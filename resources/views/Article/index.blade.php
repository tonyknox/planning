@extends('layouts/app')

@section('content')

<div class="row">

	<div class="col-sm-2">

	</div>

	<div class="col">
		
		@include('includes.searches', ['tble' => 'SearchArticles'])
		<h1>Articles</h1>

		@foreach ($article as $art)
			@if(!strlen($art->artthumb))
				@php
					$img = '';
					if(preg_match('/<img.*?>/', $art->article, $match)){
						$img = $match[0];
					}
				@endphp
			@endif
			<div class="row">
				<div class="col-sm-3">
					
					@if(strlen($art->artimage))
						<a href="{{action('ArticlesController@show', [$art->artid])}}">{!! $art->artimage !!}</a>
					@elseif(strlen($img))
						<a href="{{action('ArticlesController@show', [$art->artid])}}">{!! $img !!}</a>	
					@elseif(strlen($art->artthumb))
						<a href="{{action('ArticlesController@show', [$art->artid])}}">{!! $art->artthumb !!}</a>
					@endif
					<br /><br />
				</div>
				<div class="col">
				
					<strong><a href="{{ action('ArticlesController@show', [$art->artid]) }}">
					@if($art->headline)
						{{ $art->headline }}
					@endif
					</a> </strong> <br />
					{{ $art->artdate ?? '' }}
					{!! $info = abbreviate($art->abstract,$art->artid,'artid','articles',120) !!}
					<br /><br />		
				</div>
			</div>
		@endforeach

	</div>
	<div class="col-sm-1">
	</div>
</div>

{!! $article->render() !!}

@include ('errors.list')
@stop




