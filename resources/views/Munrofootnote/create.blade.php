@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Footnote</h1>

		

			{!! Form::open(['url' => 'munrofootnotes']) !!}

				@include ('Munrofootnote._form', ['SubmitButtonText' => 'Add Page'])

			{!! Form::close() !!}

	

		@include ('errors.list')

	@stop

@endif