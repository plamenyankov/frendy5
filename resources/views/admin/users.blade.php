@extends('admin.home')
@section('content')
<div class="large-10 medium-12 small-12 columns light-grey-bg-pattern margin-top-20">

    <table class="responsive">
        <tbody><tr>
            <th width="50">#ID</th>
            <th width="250">Name</th>
            <th width="250">Email</th>
            <th width="100">Admin</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Plamen</td>
            <td>p.s.yankov@abv.bg</td>
            <td>YES</td>
        </tr>
        </tbody></table>
</div>
<script src="/js/ember/app.js"></script>
<script type="text/x-handlebars">
    <h2>Welcome to Ember.js</h2>
    {{outlet}}
</script>

<script type="text/x-handlebars" id="user">
    <ul>
        {{#each item in model}}
        <li class="">{{item}}</li>
        {{/each}}
    </ul>
</script>
@stop