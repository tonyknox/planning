@extends('layouts/app')

@section('content')
<div class="row">

	<!-- col 1 - sidebar -->

	<div class="d-none d-sm-block col-sm-3">
		@foreach($chaps as $chap)
			<p>
				<a href="{{action('ChaptersController@show', [$chap->chapid])}}">{{ $chap->chapname }}</a>
			</p>
		@endforeach
	</div>
	

	<!-- col 2 - main content -->

	<div class="col">
		
		@include('includes.searches', ['tble' => 'SearchChapters'])

		@foreach($book as $book)
			<h2>{!! $book->bkname !!}</h2>
		@endforeach
		<br />

		<h4>{!! $chapter->chapname !!}</h4>

		@foreach($pges as $p)
			<strong>
				<a href="{!!action('PagesController@show', [$p->pid])!!}">{!! $p->pdescription !!}</a>
				<a href="{!!action('GreeneriesController@show', [$p->grid])!!}">{!! $p->grdescription !!}</a>
				<a href="{!!action('MccplansController@show', [$p->mccid])!!}">{!! $p->mccdescription !!}</a>
			</strong>
			<br />
		@endforeach
			
		<br />
			<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Chapters', 'editTable'=>$chapter->chapid, 'id'=>'chapid', 'textBook'=>'Book', 'textChap'=>'Chapter'])</span>
		
	</div> 
	<div class="d-none d-sm-block col-1">
	</div>
</div>
<!-- - - - - -->		

@stop
