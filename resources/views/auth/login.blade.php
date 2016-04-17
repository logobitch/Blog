@extends('app')
@section('content')
	<div class="col-md-4 col-md-offset-4">
		<h1>用户登录</h1>
		<form action="{{ url('/auth/login') }}" method="post" class="form-groups">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			{{ csrf_field() }}
			<input type="submit" value="登录" class="btn btn-primary form-control">
		</form>
	</div>
@stop