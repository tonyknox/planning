@if(Auth::check())

	@extends('layouts/app')


	@section('content2')
	

		<h1>Edit: {!! $page->amname !!}</h1>
		
			{!! Form::model($page, ['method' => 'PATCH', 'action' => ['MunrosController@update', $page->amid]]) !!}

				@include ('Munro._form', ['SubmitButtonText' => 'Update Page'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif