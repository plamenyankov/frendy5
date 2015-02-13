@extends('app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/js/ember/app.js"></script>
<script type="text/x-handlebars">
    <h2>Welcome to Ember.js</h2>
    {{outlet}}
</script>
<!--<script type="text/x-handlebars" id="index">-->
<!--    {{outlet}}-->
<!--</script>-->
<script type="text/x-handlebars" id="index">
    <ul>
        {{#each item in model}}
        <li class="">{{item}}</li>
        {{/each}}
    </ul>
</script>
@endsection
