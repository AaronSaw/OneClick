@extends('user.common')

@section('content')
    <div>
        <div class="detail">
            <div class="detail-card clearfix">
                <div class="detail-img">
                    <img src="{{ asset('storage/' . $detail[0]->image) }}" alt="detail-img">
                </div>
                <div class="detail-status">
                    <h2 class="detail-title">{{ $detail[0]->title }}</h2>
                    <div class="pricetitle">
                        <h4 class="detail-category">{{ $detail[0]->ctitle }}</h4>
                        <p class="detail-price">$ {{ $detail[0]->price }}</p>
                    </div>
                    <p class="detail-shortdescription">{{ Str::words($detail[0]->description, 15, '.....') }}</p><button
                        class="seemore">seemore</button>
                    <p class="detail-description">{{ $detail[0]->description }}</p><button class="seeless">seeless</button>
                    <a href="{{ route('user.order', $detail[0]->id) }}"><button class="order-btn"><i
                                class="fa-solid fa-cart-shopping"></i> Order Button</button></a>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="relatedCategory">Related Products</h2>
        <div class="related-card clearfix">
            @foreach ($relatedCategories as $conCategory)
                <a href="{{ route('detail', $conCategory->id) }}">
                    <div class="carousel">
                        <div class="carousel-container">
                            <div class="carousel-item">
                                <img src="{{ asset('storage/' . $conCategory->image) }}" alt="Product Image"
                                    class="carousel-item-img">
                                <div class="panel">
                                    <div class="inside">
                                        <a href="{{ route('detail', $conCategory->id) }}"
                                            class="fa-solid fa-circle-info"></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="">
                                        <h3><span class="info-name"> Name:</span> {{ $conCategory->title }}</h3>
                                    </a>
                                    <strong>
                                        <span class="price"> Price: </span>$ {{ $conCategory->price }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
