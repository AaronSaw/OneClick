@extends('layouts.admin_common')
@section('content')
    <div class="ccard">
        <h2 class="tblttl">Product Lists
            <form action="{{ route('product.index') }}" method="get">
                <div class="d-flex mb-3">
                    <input type="text" class="sinput " value="{{ request('title') }}" placeholder="Search  title"
                        name="title">
                    <input type="text" class="sinput " value="{{ request('price') }}" placeholder="Search  price"
                        name="price">
                    <input type="text" class="sinput " value="{{ request('ctitle') }}" placeholder="Search category"
                        name="ctitle">
                    <input type="text" class="sinput " value="{{ request('sdate') }}" placeholder="Start date"
                        onfocus="(this.type='date')" name="sdate">
                    <input type="text" class="sinput" value="{{ request('edate') }}" placeholder="End date"
                        onfocus="(this.type='date')" name="edate">
                    <div class="search-btngp">
                        <button class="sbutton" type="submit">Search</button>
                        <a href="{{ route('product.index') }}" class="button cancel" type="">Cancel</a>
                    </div>
                </div>
            </form>
        </h2>
        @if (session('status'))
            <div class="alert product-alert">
                {{ session('status') }}
            </div>
        @endif
        @if (request('keyword'))
            <p class=" mr-1">Search By : " {{ request('keyword') }}"
                <span><a href="{{ route('product.index') }}" class="ml-1"> @</a></span>
            </p>
        @endif
        <div class="data-table">
            <table id="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td> <img src="{{ asset('storage/' . $product->image) }}" alt="" class="pimg"></td>
                            <td class="">
                                {{ $product->title }}
                            </td>
                            <td>
                                {{ $product->ctitle }}
                            </td>
                            <td>
                                {{ Str::words($product->description, 5, '...') }}
                            </td>
                            <td>{{ number_format($product->price) }} MMK</td>
                            <td>
                                {{ $product->created_at->format('d M Y') }}
                            </td>
                            <td>
                                <div class="action-btngroup">
                                    <a href="{{ route('product.edit', $product->id) }}" class="button success">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <div id="ex{{ $product->id }}" class="modal">
                                        <p class="modal-text">Are you sure to delete</p>
                                        <hr>
                                        <div class="modal-footer">
                                            <a href="#" rel="modal:close" class="button cancel">No</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="button danger">
                                                    Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Link to open the modal -->
                                    <p><a href="#ex{{ $product->id }}" rel="modal:open" class="button danger"><i
                                                class="fa-regular fa-trash-can"></i></a></p>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty">Empty Products</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="paginate">
            {{ $products->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
