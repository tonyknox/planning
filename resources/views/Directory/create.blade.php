
@if(Auth::check())

	@extends('layouts/app')

	@section('content2')


		<h1>New Item</h1>


			{!! Form::open(['url' => 'directories']) !!}

				@include ('Directory._form', ['SubmitButtonText' => 'Add Item'])

			{!! Form::close() !!}

		</div>

		@include ('errors.list')

@stop

@endif