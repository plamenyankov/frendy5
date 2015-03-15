@extends('layouts.main')
@section('content')
<div class="row-offers">
    <div class="large-3 columns">hello</div>
    <div class="large-6 columns"><div class="slider show-for-medium-up" style="border: 5px solid red" id="cslider">
            <div class="section">
                <div class="large-12 columns"><img data-lazy='img/promo.png'/></div>
            </div>
            <div class="section">
                <div class="large-12 columns" style="background-color:red"><img data-lazy='img/promo.png'/></div>
            </div>
            <div class="section">
                <div class="large-12 columns" style="background-color:green"><img data-lazy='img/promo.png'/></div>
            </div>
            <div class="section">
                <div class="large-12 columns" style="background-color:aqua"><img data-lazy='img/promo.png'/></div>
            </div>
        </div></div>
    <div class="large-3 columns">hello</div>

</div>
<div class="show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">

            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar "><a href="#"> <i
                        class="step fi-magnifying-glass size-20 mr-5"></i><span>Търси</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><input type="text" class="search" placeholder="Search" value=search></li>
                <li><a href="#" class="button"><i class="step fi-magnifying-glass size-20"></i></a></li>
            </ul>
            <!-- Left Nav Section -->
            <ul class="left">
                <li><select class="nav-select" name="category" id="">
                        <option value="" selected>Категория</option>
                        <option value="">дрехи</option>
                        <option value="">дрехи</option>
                        <option value="">дрехи</option>
                    </select></li>
            </ul>
        </section>
    </nav>
</div>
<div class="row">
    <div class="small-text-center title-home-category column small-12">Оферти За Деня</div>
</div>
@if($products)
@foreach($products->chunk(4) as $product)
<div class="row-offers">
    <div class="panel-offers column">

        @foreach($product as $p)
        <div class="medium-6 small-12 large-3 columns">
            <div class="offer">
                <div class="center offer-info-top">{{$p['title']}}</div>
                <div class="center offer-label">
                    <div class="left">-70%</div>
                    <div class="right-label">{{$p['price']}}</div>
                </div>
                <div class="img-holder"><a href="/продукт/{{str_replace(' ', '-',$p['title'])}}/{{$p['id']}}"><img src="{{$p['image']}}" alt=""/></a>
                </div>
            </div>
            <div class="offer-info-bt">
                <div class="left">

                    <a href="#"><i class="fa fi-shopping-cart size-16" ></i><span
                            class="offer-shopping-info">(12)</span></a>
                    <a href="#"><i class="fa fi-heart size-16"></i><span class="offer-shopping-info">(48)</span></a>
                    <a href="#"><i class="fa fi-eye large"></i><span class="offer-shopping-info">(312)</span></a>
                <span class="offer-rating"><i class="fi-star"></i><i class="fi-star"></i><i class="fi-star"></i><i
                        class="fi-star"></i><i class="fi-star"></i></span><span class="offer-shopping-info">(98%)</span>
                </div>
                <div class="right"><a href="#"><i class="fa fi-list"></i></a></div>
            </div>
            <div class="additional-info">
                <ul class="adi-img">
                    <li><img src='img/product.gif' alt='iphone'></li>
                    <li><img src='img/macbook.png' alt='iphone'></li>
                    <li><img src='img/product.gif' alt='iphone'></li>
                    <li><img src='img/macbook.png' alt='iphone'></li>
                </ul>
                <div class="offer-text-desc">
                    <h4>MacBook Pro</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur assumenda, corporis,
                    dolor
                    dolore enim iste magni quas qui sapiente sed sint, unde! Blanditiis cum et molestias, nobis
                    quibusdam vero.
                </div>
                <button class="alert tiny button">Виж Повече</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endif
@stop
