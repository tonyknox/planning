@extends('layouts/app')

@section('content')
<div class="row">
	<div class="d-none d-sm-block col-sm-2"> <!-- col 1 -->

	</div>

	<div class="col"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchPages'])

		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Pages</h1>

			@foreach ($page as $p)
			
				<p><strong>
					<a href="{!! action('PagesController@show', [$p->pid]) !!}">{!! $p->chapter_name !!} {!!  $p->pdescription !!}</strong></a>		
				
					@if (Auth::check())
						<a href="{!!action('PagesController@edit', [$p->pid])!!}">( Edit )</a>
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

@stop