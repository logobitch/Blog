@extends('app')
@section('content')
	<h1>Edit:{!! $article->title !!}</h1>
	<hr>
	{!! Form::model($article, ['method'=>'PATCH', 'url'=>['article', $article->id]]) !!}
		@include('article._form', ['submitButton'=> '修改文章'])
	{!! Form::close() !!}
	@include('errors.list')
@stop