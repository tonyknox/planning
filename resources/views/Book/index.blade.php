@extends('layouts/app')

@section('content')

	<div class="row"> 

		<div class="col-sm-2"> <!-- col 1 -->
			&nbsp;

		</div>	<!-- end col 1 -->

		<div class="col"> <!-- col 2 -->
			@include('includes.searches', ['tble' => 'SearchChapters'])

			<h1>Publications</h1>
			<br />
			            
				
				@foreach ($book as $bk)
					 <div class="row">
					 	<div class="col-sm-2">
					 		
						
						<img src="{{$bk->bkthumb}}" alt="{{$bk->bkname}}" width="100%" /><br /><br />
					</div>
				
				<div class="col">
					
				
						<big><strong><a href="{{ action('BooksController@show', [$bk->bkid]) }}">{!!  $bk->bkname !!}</a></strong></big><br />
						@if(strlen($bk->bkauthor))Author: {{ $bk->bkauthor }};<br /> @endif
						@if(strlen($bk->publisher))Publisher: {{ $bk->publisher }}<br /> @endif
						@if(strlen($bk->datepublished))Date Published: {{ $bk->datepublished }}; @endif, @if(strlen($bk->isbn))ISBN: {{ $bk->isbn }}@endif
						<br /><br />
					</div>
				</div>

				@endforeach

			
			

		<div class="col-1"> <!--col 3-->
		</div>
	</div>

@include ('errors.list')

@stop
