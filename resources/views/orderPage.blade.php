@extends('user.common')

@section('content')
    @if (session('success_status'))
        <div class="success-box">
            <span class="success-message">{{ session('success_status') }}<i
                    class="fa-solid fa-xmark icon-order js-close"></i></span>
        </div>
    @endif
    @if (session('error_status'))
    <div class="success-box">
        <span class="success-message">{{ session('error_status') }}<i
                class="fa-solid fa-xmark icon-order js-close"></i></span>
    </div>
    @endif
    <div class="order">
        <div class="order-card clearfix">
            <div class="order-header">
                <h4>Shopping cart <i class="fa-solid fa-cart-shopping"></i></h4>
                <a href="{{ route('detail', $order[0]->id) }}"><i class="fa-solid fa-xmark icon-orderPage"></i></a>
            </div>
            <div class="order-img">
                <img src="{{ asset('storage/' . $order[0]->image) }}" alt="detail-img">
            </div>
            <div class="order-status">
                <h2 class="order-title">{{ $order[0]->title }}</h2>
                <div class="order-priceTitle">
                    <h4 class="order-category">{{ $order[0]->ctitle }}</h4>
                    <p class="order-price">$ {{ $order[0]->price }}</p>
                </div>
                <p class="detail-shortdescription order-shortdescription ">
                    {{ Str::words($order[0]->description, 15, '.....') }}</p>
                <button class="seemore">seemore</button>
                <p class="detail-description order-description">{{ $order[0]->description }}</p>
                <button class="seeless">seeless</button>
                <hr>
                <div class="total-blk">
                    <h4 class="total-title">Total -</h4>
                    <p class="order-price">$ {{ $order[0]->price }}</p>
                </div>
                <button class="checkOut"><a href="#">Check Out</a></button>
            </div>
        </div>
    </div>
    <div id="modalContainer">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h5 class="order-confirm">Are you sure to order this item.</h5>
            <form action="{{ route('user.store', $order[0]->id) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="product_id" value="{{ $order[0]->id }}">
                <div class="btn-sec">
                    <button class="order-cancel"><a href="{{ route('user.order', $order[0]->id) }}">Cancel</a></button>
                    <button type="submit">Yes</button>
                </div>
            </form>
        </div>

    </div>
@endsection
