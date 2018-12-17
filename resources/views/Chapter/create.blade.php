@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>New Chapter</h1>

		

			{!! Form::open(['url' => 'chapters']) !!}

				@include ('Chapter._form', ['SubmitButtonText' => 'Add Chapter'])

			{!! Form::close() !!}



		@include ('errors.list')

	@stop

@endif