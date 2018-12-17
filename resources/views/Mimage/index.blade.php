@extends('layouts/app')
<!--  -->
@section('vars')

@stop
@section('content')
	
		
	
		
	 
	<div class="row">

		<div class="col-sm-2">
				&nbsp;
		</div>

		<div class="col">

		@include('includes.searches', ['tble' => 'SearchMimages'])
			<div class="col-9">
				<h1>Images</h1>
				<div >
					@foreach ($mimages as $img)
						<div class="block w55 left"><p>
						<a href="{{ action('MimagesController@show', [$img->imgid]) }}">
			   					<img src="{{ $img->imgpath }}/{{ $img->imgname }}.{{$img->imgext}}" alt="{!! $img->alt !!}" width="100%"  />
			   					
							</p>
						</div>
					@endforeach
			</div>
		</div>
		<div class="col">
		<span class="caption">{{$img->caption}}</span></a><br /><br />
	</div>

	




{!! $mimages->render() !!}

@include ('errors.list')

@stop