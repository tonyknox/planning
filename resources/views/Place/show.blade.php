@extends('layouts/app')

@section('content')

<div class="row">
	<div class="d-none d-sm-block col-sm-2">
		
	</div>
	
	<div class="col">
		@include('includes.searches', ['tble' => 'SearchPlaces'])
		<h1>{{ $place->plname }}</h1>
		
			
		@if($place->plimage)
			<div class="block w100">
				{!! $place->plimage !!}
				<span class="caption">{{ $place->plcaption }}</span>
			</div><br />
		@endif
		
		{!! $place->plinfo !!}
		<br />
		<p>{!! $place->plauthor !!}</p>
				
		<br />
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Places', 'editTable'=>$place->plid, 'id'=>'plid', 'text'=>'Place'])</span>
	</div>
	
	<div class="d-none d-sm-block col-sm-1">
		
	</div>
</div>

@stop

