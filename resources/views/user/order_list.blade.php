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
                <th>Price</th>
            </thead>
            <tbody>
                @forelse ($userOrder as $order)
                    @php
                        $ctitle = \App\Models\Category::find($order->category_id)->ctitle;
                    @endphp
                    <tr>
                        <td>{{ $order->title }}</td>
                        <td>{{ $ctitle }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>${{ $order->price }}</td>
                    </tr>
                @empty
                @endforelse
                <tr>
                    <td colspan="2"></td>
                    <td>Total</td>
                    <td>${{ $prices }}</td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
