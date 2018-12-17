@if(Auth::check())

	@extends('layouts/app')
@section('content2')
		<h1>New Article</h1>

		{!! Form::open(['url' => 'articles']) !!}

			<meta name="csrf-token" content="{{ csrf_token() }}">

			
				@include ('Article._form', ['SubmitButtonText' => 'Add Article'])
			

		{!! Form::close() !!}


@stop
		@include ('errors.list')

@endif
