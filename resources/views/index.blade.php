@extends('layouts.app')

@section('content')


<section class="catalog">
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
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <div class="row">
                        @foreach($lastProducts as $item)
                        <div class='col-sm-4'>
                            <div class='product-image-wrapper'>
                                <div class='single-products'>
                                    <div class='productinfo text-center'>
                                        <div class='img-wrapper'>
                                            <img src='{{ asset($item->preview) }}' alt='' />
                                        </div>
                                        <h2>{{ number_format($item->price, 0, ',', ' ') }} RUB</h2>
                                        <a href='/product/{{ $item->id }}'><p> {{ $item->name }}</p></a>
                                        <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>В корзину</a>
                                    </div>
                                    @if($item -> is_new)
                                    <img src='{{ asset('images/views/index/new.png') }}' class='new' alt=''>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="pgn-wrapper"> 
                            {{$lastProducts -> links()}}
                        </div>
                    </div>

                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

@endsection