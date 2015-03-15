<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Welcome to Smarter Admin</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link href="/css/foundation-icons/foundation-icons.css" rel="stylesheet" />
    <script src="/js/ember/libs/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="/js/angular-file-upload-shim.js"></script> <!-- for no html5 browsers support -->
    <script src="/js/angular-file-upload.js"></script>
    <script src="//cdn.jsdelivr.net/anglular.flow/2.2.0/ng-flow-standalone.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
    <script src="/js/angular/modules/route.js"></script>
    <script src="/js/angular/admin.js"></script>

    <link type="text/css" media="screen" rel="stylesheet" href="/css/responsive-tables.css" />
    <script type="text/javascript" src="/js/responsive-tables.js"></script>
    <!--    <script src="js/vendor/modernizr.js"></script>-->
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/css/flat-icon/flaticon.css" rel="stylesheet" />
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/css/todos.css" rel="stylesheet" />
    @yield('scripts')
    <style>
        i{
            color:#FFF;
            /*font-size: 48px;*/
        }

    </style>
    <base href="/admin">
</head>
<body>
<div class="row full-width wrapper">
    <div class="large-12 columns content-bg">
        <div id="top-menu">
            <div class="row">
                <div class="large-2 medium-4 small-12 columns top-part-no-padding">
                    <div class="logo-bg">
                        <i class="step fi-address-book size-72"></i>
                        <i class="fi-list toggles" data-toggle="hide"></i>
                    </div>
                </div>
                <div class="large-10 medium-8 small-12 columns top-menu">
                    <div class="row">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="large-8 columns">
                                    <input id="Text1" type="text" class="search-text" placeholder="Search" />
                                </div>
                            </div>
                        </div>
                        <div class="large-4 medium-6 small-12 columns text-center">
                            <div class="row">
                                <div class="medium-3 small-3 columns">
                                    <div class="notification">
                                        <i class="fi-mail"></i>
                                        <span class="mail">4</span>
                                    </div>
                                </div>
                                <div class="medium-3 small-3 columns">
                                    <div class="notification">
                                        <i class="fi-megaphone"></i>
                                        <span class="megaphone">5</span>
                                    </div>
                                </div>
                                <div class="medium-3 small-3 columns">

                                    @if(Auth::user()->avatar)
                                    <img src="<% Auth::user()->avatar %>" alt="" style="width: 40px; margin-top: 10px;"/>
                                    @else
                                    <img src="http://www.gravatar.com/avatar/<% md5(Auth::user()->email) %>" alt=""
                                         style="width: 35px"/>
                                    @endif
                                </div>
                                <div class="medium-3 small-3 columns">
                                    <a href="/auth/logout"><i class="fi-power power-off"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @if(Session::has('flash_message'))
        <div data-alert class="alert-box success ">
            <% Session::get('flash_message') %>
            <a href="#" class="close">&times;</a>
        </div>
        @endif
        <div class="row">
            <div class="no-padding">
                <div class="large-2 medium-12 small-12 columns">
                    <ul class="side-nav">
                        <li class="active"><a href="/admin"><i class="flaticon-dashboard1"></i>Dashboard</a></li>
                        <li><a href="/admin/products"><i class="flaticon-profile4"></i>Products</a></li>
                        <li><a href="/admin/users"><i class="flaticon-profile4"></i>Users</a></li>
                        <li><a href="profile.html"><i class="flaticon-profile4"></i>Profile</a></li>
                        <li><a href="staff.html"><i class="flaticon-businessman22"></i>Staff</a></li>
                        <li><a href="inbox.html"><span class="flaticon-mailbox10"></span>Inbox</a></li>
                        <li><a href="invoice.html"><i class="flaticon-invoice1"></i>Invoice</a></li>
                        <li>
                            <ul>
                                <li>
                                    <dl class="accordion" data-accordion="myAccordionGroup">
                                        <dd>
                                            <a href="#panel1c"><i class="flaticon-forms"></i>Components</a>
                                            <div id="panel1c" class="content">
                                                <ul>
                                                    <li>
                                                        <a href="general.html">General</a>
                                                    </li>
                                                    <li>
                                                        <a href="wizard.html">Wizard</a>
                                                    </li>
                                                    <li>
                                                        <a href="editor.html">Wysiwug Editor</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li><a href="login.html"><i class="flaticon-incoming4"></i>Login</a></li>
                        <li><a href="register.html"><i class="flaticon-add58"></i>Register</a></li>
                        <li><a href="pricing.html"><i class="flaticon-businessman63"></i>Pricing</a></li>
                    </ul>
                </div>
            </div>
     <div ng-app="admin">
         <div ng-view></div>
     </div>


        </div>
    </div>
</div>

<script src="/js/foundation.min.js"></script>
<script src="/js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="/js/plugins/morris/morris.js"></script>
<script src="/js/todos.js"></script>
<script src="/js/menu.js"></script>
<script>
    $(document).foundation();
</script>

<script src="/js/morris-demo.js"></script>
</body>
</html>
