@extends('layouts.admin_common')

@section('content')
    <div class="ccard">
        <div class="tableinfo">
            @if (session('status'))
                <div class="alert order-alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="tblttl">
                <p>Order List</p>
                <form action="{{ route('dashboard.orderlist') }}" method="get">
                    <div class="d-flex mb-3">
                        <input type="text" class="sinput " value="{{ request('name') }}" placeholder="Search  name"
                            name="name">
                        <input type="text" class="sinput " value="{{ request('title') }}" placeholder="Search  product"
                            name="title">
                        <input type="text" class="sinput " value="{{ request('address') }}" placeholder="Search address"
                            name="address">
                        <input type="text" class="sinput " value="{{ request('sdate') }}" placeholder="Start date"
                            onfocus="(this.type='date')" name="sdate">
                        <input type="text" class="sinput" value="{{ request('edate') }}" placeholder="End date"
                            onfocus="(this.type='date')" name="edate">
                        <div class="search-btngp">
                            <button class="sbutton" type="submit">Search</button>
                            <a href="{{ route('dashboard.orderlist') }}" class="button cancel" type="">Cancel</a>
                        </div>
                </form>
            </div>
            <div class="data-table">
                <table id="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>order price</th>
                            <th>Address</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            @php
                                $ctitle = \App\Models\Category::find($order->category_id)->ctitle;
                            @endphp

                            <tr @if ($order->confirm == '1') class="confirm " @endif>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->title }}</td>
                                <td>{{ $ctitle }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ number_format($order->price) }} MMK</td>
                                <td>{{ number_format($order->price * $order->quantity) }} MMK</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('order.confirm', $order->id) }}" class="check">
                                        @if ($order->confirm == '1')
                                            <i class="fa fa-check-square"></i>
                                        @else
                                            <i class="fa fa-square"></i>
                                        @endif
                                    </a>
                                    <div id="ex{{ $order->id }}" class="modal clearfix">
                                        <p class="modal-text">Are you sure to delete?</p>
                                        <hr>
                                        <div class="modal-footer">
                                            <a href="#" class="button  cancel" rel="modal:close">No</a>
                                            <form action="{{ route('order.destroy', $order->id) }}" class="d-inline-block"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="button  danger">
                                                    Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <a href="#ex{{ $order->id }}" rel="modal:open" class="deletebtn"><i
                                            class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="empty">Empty order</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $orders->links('vendor.pagination.custom-pagi') }}
@endsection
