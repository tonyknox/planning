@if(Auth::check())

	@extends('layouts/app')


	@section('content2')


		<h1>Edit: {!! $page->grname !!}</h1>
		
			{!! Form::model($page, ['method' => 'PATCH', 'action' => ['GreeneriesController@update', $page->grid]]) !!}

				@include ('Greenery._form', ['SubmitButtonText' => 'Update Page'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif