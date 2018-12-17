@extends('layouts/app')

@section('content')
<div class="row">
	<div class="d-none d-sm-block col-sm-2"> <!-- col 1 -->

	</div>

	<div class="col"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchMccplans'])

		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Pages</h1>
	
			@foreach ($page as $p)
		
				<p><strong>
					<a href="{!! action('MccplansController@show', [$p->mccid]) !!}">{!! $p->chapter !!} {!!  $p->mccdescription !!}</strong></a>		
				
					@if (Auth::check())
						<a href="{!!action('MccplansController@edit', [$p->mccid])!!}">( Edit )</a>
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