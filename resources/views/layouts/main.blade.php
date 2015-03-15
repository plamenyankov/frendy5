<!doctype html>
<html lang="en">
<head>
    <title>Frendy</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/foundation-icons/foundation-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
    <meta charset="UTF-8">
</head>
<body>
<div class="row-custom show-for-large-only">Поръчки: 1-800-0000 | Ймейл: office@shop.com</div>
<div class="sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <a href="/" id="logo"> <img src="/img/turtile.png" alt="logo"></a>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="has-dropdown not-click"><a href="#">
                        @if(!Auth::guest())
                        @if(Auth::user()->avatar)
                        <img src="<% Auth::user()->avatar %>" alt="" style="width: 35px;"/>
                        @else
                        <img src="http://www.gravatar.com/avatar/<% md5(Auth::user()->email) %>" alt=""
                             style="width: 35px"/>
                        @endif
                        <% Auth::user()->name %>
                        @else
                        <i class="fa fa-user"></i>
                        @endif
                    </a>
                    <ul class="dropdown">
                        <li>
                            <!--                            @include('partials.navLogin')-->
                            @if(Auth::guest())
                            <table width="360" class="registration-form">
                                <tr>
                                    <td><h4 class="login-txt">Твоя профил</h4></td>
                                </tr>

                                <tr>
                                    <td width="180">
                                        <a href="/auth/register" class="">
                                            <button class="button success">
                                                Регистрация
                                            </button>
                                        </a>
                                    </td>
                                    <td width="180">
                                        <a href="/auth/login" class="">
                                            <button class="button">Вход</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="360" colspan="2">
                                        <a href="/password/email">Забравена парола?</a>
                                    </td>
                                </tr>
                                <td colspan="2">
                                    <h5 class="login-txt-social"><i class="step fi-share size-24 mr-5"></i> Вход със
                                        социялна мрежа</h5>
                                </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="/auth/facebook">
                                            <button class="button">Facebook</button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            @else
                            <table width="360" class="registration-form">
                                <tr>
                                    <td>
                                        <a href="/auth/logout">
                                            <button class="button">
                                                Изход
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            @endif
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#"><i class="fa fa-shopping-cart"></i>
                        <% Predis::get('users') %></a>
                    <ul class="dropdown">
                        <li>Hello</li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#"><i class="fa fa-heart"></i></a>
                    <ul class="dropdown">
                        <li>Bye</li>
                    </ul>
                </li>
            </ul>
            <!-- Left Nav Section -->
            <ul class="left">
                <li class="has-dropdown"><a href="#"><i class="fa fa-calendar-o nav-font-icon"></i>Днес</a>
                    <ul class="dropdown">
                        <li class="has-dropdown not-click"><a href="">Дамско</a>
                            <ul class="dropdown">
                                <li><a href="">категория</a></li>
                                <li class="show-for-medium-down"><a href="">категория</a></li>
                            </ul>
                        </li>
                        <li><a href="">Мъжко</a></li>
                        <li><a href="">Друго</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="step fi-male-female size-18 mr-5"></i>Мода</a></li>
                <li><a href="#"><i class="fa fa-futbol-o nav-font-icon"></i>Спортни</a></li>
                <li><a href="#"><i class="step fi-monitor size-18 mr-5"></i>Електроника</a></li>
                <li><a href="#"><i class="step fi-mountains size-18 mr-5"></i>Почивки</a></li>
                <li><a href="#"><i class="step fi-page-edit size-18 mr-5"></i>Публикувай</a></li>
            </ul>
        </section>
    </nav>
    @if(Session::has('flash_message'))
    <div data-alert class="alert-box success ">
        <% Session::get('flash_message') %>
        <a href="#" class="close">&times;</a>
    </div>
    @endif
</div>

@yield('content')
<div class="footer-light">
    <div class="row">
        <div class="large-4 columns">
            <ul class="no-bullet">
                <li><h4>Моят акаунт</h4></li>
                <li><i class="fa fa-angle-right"></i><a href="">Влез в акаунт</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Регистрирай се</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Любими</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">История на поръчките</a></li>
            </ul>
        </div>
        <div class="large-4 columns">
            <ul class="no-bullet">
                <li><h4>Информация</h4></li>
                <li><i class="fa fa-angle-right"></i><a href="">FAQ</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Доставка</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Плащане</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Размери</a></li>
            </ul>
        </div>
        <div class="large-4 columns">
            <ul class="no-bullet">
                <li><h4>Още</h4></li>
                <li><i class="fa fa-angle-right"></i><a href="">За Нас</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Контакти</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    <div class="row">
        <div class="medium-4 columns"><a href="/" id="logo"> <img src="/img/turtile.png" alt='logo'></a>
            <span class="brand-name">Frendy</span>
            <h6 class="subheader">Frendy е модерен онлайн магазин в който може те купувате и продавате</h6>
            <h6 class="subheader"><i class="fa fa-copyright"></i> 2015 Frendy by Plamen Yankov</h6>
        </div>
        <div class="medium-4 columns"><h4>Намерете ни</h4>
            <a href=""><i class="step fi-social-facebook size-48"></i></a>
            <a href=""><i class="step fi-social-twitter size-48"></i></a>
            <a href=""><i class="step fi-social-google-plus size-48"></i></a>
            <a href=""><i class="step fi-social-pinterest size-48"></i></a>
            <a href=""><i class="step fi-social-skype size-48"></i></a>
        </div>
        <div class="medium-4 columns">
            <h4>Методи за плащане</h4>
            <a href="../icon/paypal"><i class="fa fa-paypal size-48"></i> </a>
            <a href="../icon/paypal"><i class="fa fa-cc-visa size-48"></i> </a>
        </div>
    </div>
</div>
<script src="/js/foundation.min.js"></script>
<script src="/js/foundation/foundation.alert.js"></script>
<script src="/js/vendor/modernizr.js"></script>

<script>
    $(document).ready(function () {
        $('.slider').slick({
            dots: true,
            speed: 500,
            autoplay: false,
            infinite: true,
            centerPadding: '0px',
            lazyLoad: 'ondemand'
        });
        $('div.alert-box').not('alert-important').delay(3000).slideUp(300);
    });
    $(document).foundation('alert', 'reflow');
</script>
</body>
</html>
