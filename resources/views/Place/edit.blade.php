@if(Auth::check())

	@extends('layouts/app')


	@section('content')
<div class="row">
<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-8">
		<h1>Edit: {!! $place->plname !!}</h1>
		
			{!! Form::model($place, ['method' => 'PATCH', 'action' => ['PlacesController@update', $place->plid]]) !!}

				@include ('Place._form', ['SubmitButtonText' => 'Update Place'])

			{!! Form::close() !!}
		</div>
		</div>

		@include ('errors.list')


	@stop

@endif