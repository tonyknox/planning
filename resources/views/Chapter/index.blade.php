@extends('layouts/app')

@section('content')
<div class="row">

	<div class="d-none d-sm-block col-2"> <!-- col 1 -->
		
	</div>	<!-- end col 1 -->

	<div class="col-sm"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchChapters'])
		
		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Chapters</h1>
		
			@foreach ($chapter as $chap)
				<p>
					<a href="{!!action('ChaptersController@show', [$chap->chapid])!!}"><strong>{!!  $chap->chapname !!}</strong></a>
		
					
					@if (Auth::check())
						<a href="{!!action('ChaptersController@edit', [$chap->chapid])!!}">( Edit )</a>
					@endif
				</p>
			@endforeach	
		@endif
	</div>	<!-- end col 2 -->
	<div class="d-none d-sm-block col-1">
	</div>
</div>	<!-- end row -->
@include ('errors.list')

@endsection