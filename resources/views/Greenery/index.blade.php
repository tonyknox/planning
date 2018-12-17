@extends('layouts/app')

@section('content')
<div class="row">
	<div class="d-none d-sm-block col-sm-2"> <!-- col 1 -->
			
	</div>	<!-- end col 1 -->


	<div class="col"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchGreeneries'])

		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Pages</h1>

			@foreach ($page as $p)
	
				<p><strong>
					<a href="{!! action('GreeneriesController@show', [$p->grname]) !!}">{!! $p->chap_name !!} {!!  $p->grdescription !!}</strong></a>		
				
					@if (Auth::check())
						<a href="{!!action('GreeneriesController@edit', [$p->grid])!!}">( Edit )</a>
					@endif
				</p> 
			@endforeach	
			{!! $page->render() !!}		
		@endif

	</div>
	<div class="d-none d-sm-block col-sm-1"> <!-- col 1 -->
		
	</div>	<!-- end col 3 -->

</div>

@include ('errors.list')

@endsection