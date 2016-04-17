@extends('app')
@section('content')
	<div class="col-md-4 col-md-offset-4">
		<h1>用户注册</h1>
		<form action="{{ url('/auth/register') }}" method="post" class="form-groups">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="password_confirmation">Password_confirmation</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
			</div>
			{{ csrf_field() }}
			<input type="submit" value="登录" class="btn btn-primary form-control">
		</form>
		@if($errors->any())<ul class="list-group">@foreach($errors->all() as $error)    <li class="list-group-item list-group-item-danger">{{$error}}</li>@endforeach</ul>@endif
	</div>
@stop
