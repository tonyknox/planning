@extends('layouts/app')
	
@section('content')
<div class="row">
	<div class="d-none d-sm-block col-sm-2">

	</div>

	<div class="col">
		@include('includes.searches', ['tble' => 'SearchPeople'])

		<h1>People</h1>
			
		@foreach ($person as $pp)
			
			@php
  				if(preg_match('/<img.*?>/', $pp->biography, $match)){
  					$img = $match[0];
  				}
			@endphp
				
			<div class="row">
				<div class="col-sm-3">
					
					<div style="max-width:160px;">
						{!! strlen($pp->ppimage) ? $pp->ppimage : $img !!}	
						
					</div>
					<br /><br/>
				</div>
				<div class="col-9">
							
					<strong><big><a href="{{ action('PeopleController@show', [$pp->ppid]) }}">{{ $pp->salutation  ?? ''}} {{ $pp->first  ?? '' }} {{  $pp->last ?? ''}} {{ $pp->honorifics  ?? ''}}</a></big></strong>
					<br />

					{!! $info = abbreviate($pp->biography,$pp->ppid,'ppid','people',180) !!}
				
					@if (Auth::check())<a href="{{action('PeopleController@edit', [$pp->ppid])}}">( Edit )</a>@endif
					<br /><br />
				</div>
			</div>	
		@endforeach
	</div>
		<div class="d-none d-sm-block col-sm-1">
		</div>
</div>

{!! $person->render() !!}
@include ('errors.list')

@endsection

