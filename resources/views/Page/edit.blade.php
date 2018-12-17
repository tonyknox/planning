@if(Auth::check())

	@extends('layouts/app')


	@section('content2')
	

		<h1>Edit: {!! $page->pname !!}</h1>
		
			{!! Form::model($page, ['method' => 'PATCH', 'action' => ['PagesController@update', $page->pid]]) !!}

				@include ('Page._form', ['SubmitButtonText' => 'Update Page'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif