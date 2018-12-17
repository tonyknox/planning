@if(Auth::check())

	@extends('layouts/app')


	@section('content2')
	

		<h1>Edit: {!! $page->mccname !!}</h1>
		
			{!! Form::model($page, ['method' => 'PATCH', 'action' => ['MccplansController@update', $page->mccid]]) !!}

				@include ('Mccplan._form', ['SubmitButtonText' => 'Update Page'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif