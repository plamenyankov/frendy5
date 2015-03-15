@extends('admin.home')
@section('scripts')
<script src="/js/angular/admin.user.js"></script>
@stop
@section('content')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern margin-top-20" ng-app="adminUsers">
    <h2>Users</h2>

    <table class="responsive" ng-controller="mainCtrl">
        <tbody><tr>
            <th width="50">#ID</th>
            <th width="250">Name</th>
            <th width="250">Email</th>
            <th width="150">Admin Rights</th>
        </tr>

        <tr ng-repeat="user in users">
            <td>{{user.id}}</td>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.admin}}</td>
        </tr>

        </tbody></table>



</div>

@stop