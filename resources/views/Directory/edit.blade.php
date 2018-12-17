
@if(Auth::check())

	@extends('layouts/app')

	@section('content')


		<h1>Edit: {!! $directory->dname !!}</h1>

		<div style="margin-left:40px;margin-right:40px">
		
			{!! Form::model($directory, ['method' => 'PATCH', 'action' => ['DirectoriesController@update', $directory->dirid]]) !!}

				@include ('Directory._form', ['SubmitButtonText' => 'Update Item'])

			{!! Form::close() !!}
			
		</div>

		@include ('errors.list')


	@stop

@endif