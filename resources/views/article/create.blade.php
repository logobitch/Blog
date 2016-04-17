@extends('app')
@section('content')
	<h1>文章添加</h1>
	<hr>
	{!! Form::open(['url'=>'article']) !!}
		@include('article._form', ['submitButton'=>'添加文章'])
	{!! Form::close() !!}
	@include('errors.list')
@stop