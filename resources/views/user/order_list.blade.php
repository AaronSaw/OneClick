@extends('user.common')
@section('content')
    <div class="user-order">
        <div class="list-header">
            <h2>Name : <span class="list-name">{{ Auth::user()->name }}</span> </h2>
            <h2>Total Order: <span class="list-order">{{ $ordersNo }}</span></h2>
        </div>
        <table id="customers">
            <thead>
                <th>Product</th>
                <th>Category</th>
                <th>Order Date</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Order price</th>
            </thead>
            <tbody>
                @forelse ($userOrder as $order)
                    @php
                        $ctitle = \App\Models\Category::find($order->category_id)->ctitle;
                    @endphp
                    <tr @if ($order->confirm == '1') class="confirm " @endif>
                        <td>{{ $order->title }}</td>
                        <td>{{ $ctitle }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ number_format($order->price) }} MMK</td>
                        <td>{{ number_format(($order->quantity)*($order->price)) }} MMK</td>
                    </tr>
                @empty
             <tr>
                <td colspan="5" class="empty">Empty Order</td>
             </tr>
                @endforelse
                <tr>
                    <td colspan="3"></td>
                    <td colspan="2">Total</td>
                    <td>{{ number_format($prices) }} MMK</td>
                </tr>
            </tbody>
        </table>
        <div class="">
            {{ $userOrder->links('vendor.pagination.custom-pagi') }}
        </div>
    </div>
@endsection
