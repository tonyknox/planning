@if(Auth::check())

	@extends('layouts/app')


	@section('content')
		<div class="row">
			<div class="col-sm-2">&nbsp;</div>
			<div class="col-sm-8">

				<h1>New Place</h1>

				{!! Form::open(['url' => 'places']) !!}

					@include('Place._form', ['SubmitButtonText' => 'Add Place'])

				{!! Form::close() !!}

			</div>
		</div>
		@include ('errors.list')

	@stop

@endif