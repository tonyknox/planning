@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Image</h1>


			{!! Form::open(['url' => 'mimages']) !!}

				@include ('Mimage._form', ['SubmitButtonText' => 'Add Image'])

			{!! Form::close() !!}

		
		@include ('errors.list')

	@stop
	
@endif