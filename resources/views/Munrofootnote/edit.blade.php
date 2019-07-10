@if(Auth::check())

	@extends('layouts/app')


	@section('content2')
	

		<h1>Edit: {!! $page->mfnnumber !!}</h1>
		
			{!! Form::model($page, ['method' => 'PATCH', 'action' => ['MunrofootnotessController@update', $page->mfnid]]) !!}

				@include ('Munrofootnote._form', ['SubmitButtonText' => 'Update Footnote'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif