@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>Edit: {!! $book->bkname !!}</h1>
		<div style="margin-left:40px;margin-right:40px">
			{!! Form::model($book, ['method' => 'PATCH', 'action' => ['BooksController@update', $book->bkid]]) !!}

				@include ('Book._form', ['SubmitButtonText' => 'Update Book'])

			{!! Form::close() !!}
		</div>
		
		@include ('errors.list')

	@stop

@endif