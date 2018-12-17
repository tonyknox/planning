@if(Auth::check())

	@extends('layouts/app')

		@section('content')
			<h1>New Book</h1>

			<div style="margin-left:40px;margin-right:40px">

				{!! Form::open(['url' => 'books']) !!}

					@include ('Book._form', ['SubmitButtonText' => 'Add Book'])

				{!! Form::close() !!}

				@include ('errors.list')
			</div>
		@stop

@endif