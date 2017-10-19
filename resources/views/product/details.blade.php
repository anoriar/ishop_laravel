@extends('layouts.app')

@section('content')

<section class="details">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        @foreach($categories as $item)
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                <h4 class='panel-title'><a href='/category/{{ $item->id }}'> {{ $item->name}} </a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-4">
                        <div class="view-product">
                            <div class='img-wrapper'>
                                <img src='{{ asset($product -> preview) }}' alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="product-information"><!--/product-information-->

                            @if($product->is_new) 
                                 <img src='{{ asset('images/views/index/new.png') }}' class='new' alt=''>
                            @endif

                            <h2>{{ $product->name }}</h2>
                            <p>ID: {{ $product->id }}</p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                                <span>RUB {{number_format($product->price, 0, ',', ' ')}}</span>
                                <label>Количество:</label>
                                
                                <input type='text' value=' {{ $product->count }} ' />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Добавить в корзину
                                </button>
                            </span>
                            <p><b>Код:</b> {{ $product->code }}</p>
                            <p><b>Бренд:</b> {{ $product->brand }}</p>
                            <p><b>Описание:</b> {{ $product->description }}</p>

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
            </div>
        </div>
    </div>
</section>

@endsection