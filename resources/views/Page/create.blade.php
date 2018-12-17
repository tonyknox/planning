@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Page</h1>


			{!! Form::open(['url' => 'pages']) !!}

				@include ('Page._form', ['SubmitButtonText' => 'Add Page'])

			{!! Form::close() !!}


		@include ('errors.list')

	@stop

@endif