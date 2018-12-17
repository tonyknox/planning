@extends('layouts/app')

@section('vars')
	@php
		$rev_article = '';
		if(count($article->mimages)){
			$rev_article = preg_replace('[mimage/\d+]', '$article->mimages->imgpath/$article->mimages->imgname.$article->mimages->imgext',$article->article);
		}
	@endphp
@endsection
@section('content')
	<div class="row">
		<div class="col-sm-3">
		
			<div class="d-none d-sm-block">
				@if($article->artsidebar)
					<table width="100%"><tr><td width="100%">
				@endif
				<p>{!! $article->artsidebar !!}</p>
				@if($article->artsidebar)
					</td></tr><tr><td>	
				@endif	
				@if (count($tag))
					<h4>Related stories</h4>
					@foreach ($tag as $t)
						<p><a href="/articles/{{$t->artid}}">{{$t->headline}}</a></p>
					@endforeach
				@endif	
				@if($article->artsidebar)
					</td></tr></table>	
				@endif	
			</div>
		</div>	
	
		<div class="col">
			@include('includes.searches', ['tble' => 'SearchArticles'])
				<h1>{!!  $article->headline !!}</h1> 
				<p>@if(count($article->artauthor))<strong>{!! $article->artauthor !!}</strong><br />@endif
					@if(count($article->artcredit)){!! $article->artcredit !!}@endif
					@if(count($article->artdate)){!! $article->artdate !!}@endif
				</p>
				<p>
					@if(count($article->people))
						 {{ $article->people->salutation ?? '' }} {{ $art->peoplerst ?? '' }} {{ $article->people->last ?? '' }} {{ $article->people->honorifics ?? '' }}
					
					@endif

					@if(count($article->artimage))
						<div class="block w100">{!! $article->artimage ?? '' !!}<br /><span class="caption">{!! $article->artcaption !!}<br /></span></div><br />
					@endif

					@if(count($article->abstract))
						<div style="text-decoration: none">
							<p><strong>{!! $article->abstract !!}</strong></p>
						</div>
					@endif
					
					@if(strlen($article->article))
						<div style="text-decoration: none">
							{!! $article->article !!}
						</div>
					@endif
				</p>
					<br />

				<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Articles', 'editTable'=>$article->artid, 'id'=>'artid', 'text'=>'Article'])</span>
				
			
		
		<div class="col-1">
			
		</div>
	</div>			

@stop

