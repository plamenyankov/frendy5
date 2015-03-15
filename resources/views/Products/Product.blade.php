@extends('layouts.main')
@section('content')
<div class="row-offers">
    <div class="row mt-20">
        <ul class="breadcrumbs">
            <li><a href="/"><i class="step fi-home"></i></a></li>
            <li class="current"><a href="#">{{$product['title']}}</a></li>
        </ul>
    </div>
</div>
<div class="row bg-white">
    <div class="large-6 columns">
        <div class="left">

            <div class="mt-20">
                <a href="">
                <img src="/{{$product['image']}}" alt="">
                </a>
            </div>
            <div class="clearing-container">

                <ul class="product-imgs">

                    <li><a href="#"><img  src="/img/store/2014-new-arrival-canvas-shoes-men-breathable-Fashion-patchwork-men-s-sneakers-lace-up-platform-casual.jpg_220x220.jpg"></a></li>

                </ul>

            </div>
        </div>
    </div>
    <div class="large-6 columns">
        <h2>{{$product['title']}}</h2>
        <h3>Цена: {{$product['price']}}лв </h3>

        <h5>Модел: </h5>

        <h5>Марка: </h5>
        <div class="row">
            <div class="medium-4 columns">
                <h5>Размер:</h5>
            </div>

        </div>
        <div class="row">
            <div class="medium-5 columns">
                <h5 class="left">Количество: </h5>
            </div>
            <div class="medium-7 columns">

                <input type="text" class="quantityClass"/>

            </div></div>
        <button class="success">
            <i class="fa fi-shopping-cart size-16"></i> Купи </button>
    </div>

</div>
@stop