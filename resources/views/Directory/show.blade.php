@extends('layouts/app')

@section('content')
    
@if($directory->dirid == 4)        
    <div class="row">
        <div class="col-12">
            <figure class="figure">
                {!! $directory->dirImage !!}
                <figcaption class="figure-caption">Collins Street, 1991. <i>Photo Tony Knox</i></figcaption>
            </figure>
        </div>
    </div>
@endif
	
<div class="row">

<!-- left column -->
    @if($directory->infoCol1)
    	<div class="col-sm">

            <h4>{!! $directory->headlineCol1 !!}</h4>
        	{!! $directory->infoCol1 !!}

    	</div>
    @endif

<!-- centre column -->
    @if($directory->infoCol2)
		<div class="col-sm">
    		
            <h4>{!! $directory->headlineCol2 !!}</h4>
       		{!! $directory->infoCol2 !!}
       
    	</div>
    @endif

<!-- right column -->
    @if($directory->infoCol3)
    	<div class="col-sm">

            <h4>{!! $directory->headlineCol3 !!}</h4>
    		{!! $directory->infoCol3 !!}

    	</div>
    @endif
    	
</div>
<br />

@if($directory->dirid != 4)
   @if (Auth::check())<a href="{!!action('DirectoriesController@edit', [$directory->dirid])!!}">( Edit )</a>@endif
@endif

@stop