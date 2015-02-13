@extends('admin.home')
@section('content')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
    <div class="row">
        <div class="large-10 columns">
            <div class="page-name">
                <h3 class="left">Dashboard</h3>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="dashboard">
        <div class="row">
            <div class="large-3 medium-6 small-12 columns">
                <div class="stats border">
                    <div class="left">
                        Sales
                        <h3>$97334001</h3>
                    </div>
                    <i class="fi-price-tag right sales"></i>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="large-3 medium-6 small-12 columns">
                <div class="stats border">
                    <div class="left">
                        Orders
                        <h3>400</h3>
                    </div>
                    <i class="fi-shopping-cart right orders"></i>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="large-3 medium-6 small-12 columns">
                <div class="stats border">
                    <div class="left">
                        Profit
                        <h3>$600</h3>
                    </div>
                    <i class="fi-dollar right profit"></i>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="large-3 medium-6 small-12 columns">
                <div class="stats border">
                    <div class="left">
                        Users
                        <h3>100</h3>
                    </div>
                    <i class="fi-torso right user"></i>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="large-8 columns">
                <div class="custom-panel">
                    <div class="custom-panel-heading">
                        <h4>Charts</h4>
                    </div>
                    <div class="custom-panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
            <div class="large-4 columns">
                <div class="custom-panel">
                    <div class="custom-panel-heading">
                        <h4>Charts</h4>
                    </div>
                    <div class="custom-panel-body">
                        <div id="morris-donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="large-6 columns">
                <div class="custom-panel">
                    <div class="custom-panel-heading">
                        <h4>Quick Message</h4>
                    </div>
                    <div class="custom-panel-body">
                        <label>Address</label>
                        <input id="Text2" type="text" />
                        <label>Subject</label>
                        <input id="Text3" type="text" />
                        <label>Message</label>
                        <textarea></textarea>
                        <a href="#" class="button tiny radius coral-bg right">Send</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="large-6 columns">
                <div class="custom-panel">
                    <div class="custom-panel-heading">
                        <h4>To Do</h4>
                    </div>
                    <div class="custom-panel-body">
                        <input id="new-todo" type="text" placeholder="What needs to be done?">
                        <ul id="todo-list">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop