@if(Auth::check())

	@extends('layouts/app')


	@section('content')

			<h1>Edit: {!! $mimages->imgname !!}</h1>
			
				{!! Form::model($mimages, ['method' => 'PATCH', 'action' => ['MimagesController@update', $mimages->imgid]]) !!}

					@include ('Mimage._form', ['SubmitButtonText' => 'Update Image'])

				{!! Form::close() !!}
	
			

			@include ('errors.list')
		

	@stop

@endif