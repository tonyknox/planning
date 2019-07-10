@extends('layouts/app')

@section('content')
<div class="row">
	<div class="d-none d-sm-block col-sm-2"> <!-- col 1 -->

	</div>

	<div class="col"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchAmplans'])

		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Pages</h1>
	
			@foreach ($page as $p)
		
				<p><strong>
					<a href="{!! action('MunrosController@show', [$p->amid]) !!}">{!! $p->amchapter !!} {!!  $p->amdescription !!}</strong></a>		
				
					@if (Auth::check())
						<a href="{!!action('MunrosController@edit', [$p->amid])!!}">( Edit )</a>
					@endif
				</p> 
			@endforeach	
			{!! $page->render() !!}		
		@endif

	</div>
	<div class="d-none d-sm-block col-sm-1">
	</div>
	
</div>

@include ('errors.list')

@endsection