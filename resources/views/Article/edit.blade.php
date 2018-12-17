@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>Edit: {!! $article->artname !!}</h1>

			{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->artid]]) !!}

				@include ('Article._form', ['SubmitButtonText' => 'Update Article'])

			{!! Form::close() !!}
		

		@include ('errors.list')

	@stop

@endif