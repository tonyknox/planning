@extends('layouts/app')

@section('content')

	<div class="block w100">
		@include('includes.headings')
	</div>
<div class="row">
	<!-- col 1 - sidebar -->
	<div class="d-none d-sm-block col-sm-3">
		@include('/includes.nextPrevPage', ['tble'=>'Mccplans', 'editTable'=>$page->mccid, 'id'=>'mccid', 'text'=>'Page'])<br />
		<h4 class="blu" style="font-style:italic;">Pages</h4>
				@foreach ($pages as $pge)
					<p><a href="{!! action('MccplansController@show', ['mccid'=>$pge->mccid]) !!}">{!! $pge->mccdescription !!}</a></p>
				@endforeach
	</div>	

<!-- col 2 - main content -->

	<div class="col">		
	
	@include('includes.searches', ['tble' => 'SearchMccplans'])
	<h3>{{ $page->chapter }}</h3>
		<table width="100%" ><tr><td width="10%" >
			<div class="d-sm-none">
	<h3 class="blu" style="font-style:italic;">{{ $page->chapters->chapname }}</h3>
	</div>
			{!! $page->mccinfo !!}
			
		</td></tr><tr><td>
		<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Mccplans', 'editTable'=>$page->mccid, 'id'=>'mccid', 'textBook'=>'Chapter', 'textChap'=>'Page'])</span>
	</td></tr></table>
		</div>
		
	<div class="d-none d-sm-block col-sm-1">
	</div>
	
</div> 
<!-- - - - - -->		


@stop
