@extends('layouts.main')

@section('content')
<div class="row-offers large-collapse">
    <div class="medium-2 hide-for-small columns">

        <ul class="frendy-side-nav">
            <li class="cat-side-nav"><a href="">Категории</a></li>
            <li class="active"><a href="#">Днес</a></li>
            <li class="divider"></li>
            <li><a href="#">Мода</a></li>
            <li class="divider"></li>
            <li><a href="#">Спортни</a></li>
            <li class="divider"></li>
            <li><a href="#">Електроника</a></li>
            <li class="divider"></li>
            <li><a href="#">Почивки</a></li>
        </ul>
    </div>
    <div class="medium-7 columns">
        <div class="show-for-medium-up">

                <img src='img/slider/slider1.jpg'/>
<!--                <img src='img/slider/slider2.jpg'/>-->
<!--                <img src='img/slider/slider3.jpg'/>-->
<!--                <img src='img/slider/slider4.jpg'/>-->
        </div>
</div>
    <div class="medium-3 columns">
        <img src='img/slider/top1.jpg' alt="top image" class="image-100"/>
        <img src='img/slider/top2.jpg' alt="top image" class="image-100"/>

    </div>

</div>
<div class="show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">

            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar ">
                <a href="#"> </a></li>
        </ul>

    </nav>
</div>
<div class="row">
    <div class="small-text-center title-home-category column small-12">Оферти За Деня</div>
</div>


@stop
