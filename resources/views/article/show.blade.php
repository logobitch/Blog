@extends('app')
@section('content')
	<h1>{{ $article->title }}</h1>
	<hr>
	<article>
		{{ $article->content }}
	</article>
@stop