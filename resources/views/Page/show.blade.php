@extends('layouts/app')

@section('content')
@include('includes.headings')

<div class="row">
	<!-- col 1 - sidebar -->
	<div class="d-none d-sm-block col-sm-3">

		@include('/includes.nextPrevPage', ['tble'=>'Pages', 'editTable'=>$page->pid, 'id'=>'pid', 'text'=>'Page'])<br />

		<h3 class="blu" style="font-style:italic;">Chapters</h3>
		@foreach ($pages as $pge)
			<p><a href="{!! action('PagesController@show', ['pid'=>$pge->pid]) !!}">{{ $pge->pdescription }}</a></p>
		@endforeach

	</div>	


<!-- col 2 - main content -->

	<div class="col">		
	
		@include('includes.searches', ['tble' => 'SearchPages'])

		<h3 class="blu" style="font-style:italic;">{{ $page->chapters->chapname }}</h3>
		
		{!! $page->pinfo !!}
				
		<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Pages', 'editTable'=>$page->pid, 'id'=>'pid', 'textBook'=>'Chapter', 'textChap'=>'Page'])</span>
	
		</div>
		
	<div class="d-none d-sm-block col-sm-1">	
	</div> 
<!-- - - - - -->		
</div>

@stop
