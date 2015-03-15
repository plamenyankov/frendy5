@extends('layouts.main')
@section('content')

	<div class="row margin-top-20">
		<div class="medium-6 medium-offset-3 panel">

				<div class="panel-heading">Вход</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Опс!</strong> Има грешка във въвеждането на данни.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li><% $error %></li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="<% csrf_token() %>">

						<div class="form-group">
							<label class="col-md-4 control-label">Имейл адрес</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="<% old('email') %>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Парола</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Запомни ме
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="button tiny login" >
									Вход
								</button>

								<a href="/password/email">Забравена парола?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
	</div>
@endsection
