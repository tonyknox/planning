@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>Edit: {!! $chapter->chapname !!}</h1>
		
			{!! Form::model($chapter, ['method' => 'PATCH', 'action' => ['ChaptersController@update', $chapter->chapid]]) !!}

				@include ('Chapter._form', ['SubmitButtonText' => 'Update Chapter'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif