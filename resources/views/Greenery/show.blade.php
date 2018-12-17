@extends('layouts/app')

@section('content')

	<div class="block w100">
		@include('includes.headings')

	</div>
<div class="row">
	<!-- col 1 - sidebar -->
	<div class="d-none d-sm-block col-sm-3">
			@include('/includes.nextPrevPage', ['tble'=>'Greeneries', 'editTable'=>$page->grid, 'id'=>'grid', 'text'=>'Page'])
			<br />
			<h3 class="blu" style="font-style:italic;">Chapters</h3>
					@foreach ($pages as $pge)
						<p><a href="{!! action('GreeneriesController@show', ['grid'=>$pge->grid]) !!}">{!! $pge->grdescription !!}</a></p>
					@endforeach
		</div>	
	
<!-- col 2 - main content -->

	<div class="col">		
		@include('includes.searches', ['tble' => 'SearchGreeneries'])
		
		<h3 class="blu" style="font-style:italic;">{{ $page->chapters->chapname }}</h3>
			
		{!! $page->grinfo !!}
			
		
		<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Greeneries', 'editTable'=>$page->grid, 'id'=>'grid', 'textBook'=>'Chapter', 'textChap'=>'Page'])</span>
		
	</div>
		
	<div class="d-none d-sm-block col-sm-1">
	</div>

</div> 
<!-- - - - - -->		


@stop
