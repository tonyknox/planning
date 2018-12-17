@extends('layouts/app')

@section('vars')
	
@stop
@section('content')	

<div class="row">	
	<div class="col-3">

	</div>
<div class="col-9">
	@include('includes.searches', ['tble' => 'SearchMimages'])

		@if(count($mimage->place))
			<h3>{!! $mimage->places->plname !!}</h3><br />
		@endif
		
			<img src="{{ $mimage->imgpath }}/{{$mimage->imgname}}.{{$mimage->imgext}}" alt="{{ $mimage->alt }}" max-width="40%" />
		
		<br />
		<div class="caption">Photo: <i>{{ $mimage->credit }}</i><br />{{ $mimage->caption }}</div>
		<br /><br />

<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Mimages', 'editTable'=>$mimage->imgid, 'id'=>'imgid', 'text'=>'Image'])</span>
			</p>

	</div>

	
</div>
                                
@stop
