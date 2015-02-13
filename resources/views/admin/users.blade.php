@extends('admin.home')
@section('scripts')
<script src="/js/ember/admin.user.js"></script>
@stop
@section('content')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern margin-top-20" id="ember-app">


</div>

<script type="text/x-handlebars">
    <h2>Users</h2>
    {{outlet}}
</script>

<script type="text/x-handlebars" id="index">
    <table class="responsive">
        <tbody><tr>
            <th width="50">#ID</th>
            <th width="250">Name</th>
            <th width="250">Email</th>
            <th width="150">Admin Rights</th>
        </tr>
        {{#each user in this}}
        <tr>
            <td>{{user.id}}</td>
            <td>{{user.name}}</td>
            <td>{{user.email}}</td>
            <td>{{user.admin}}</td>
        </tr>
        {{/each}}
        </tbody></table>
</script>

@stop