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


@stop
