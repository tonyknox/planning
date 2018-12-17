@extends('layouts/app')

@section('content')
    
        
<div class="row">
  <div class="col-12">
    <figure class="figure">
        {!! $directory->dirImage !!}
    <figcaption class="figure-caption">Collins Street, 1991. <i>Photo Tony Knox</i></figcaption>
    </figure>
  </div>
</div>
	
<div class="row">

<!-- left column -->
    	<div class="col-sm">

            <h4>{!! $directory->headlineCol1 !!}</h4>
        	{!! $directory->infoCol1 !!}

    	</div>

<!-- centre column -->
		<div class="col-sm">
    		
            <h4>{!! $directory->headlineCol2 !!}</h4>
       		{!! $directory->infoCol2 !!}
       
    	</div>

<!-- right column -->
    	<div class="col-sm">

            <h4>{!! $directory->headlineCol3 !!}</h4>
    		{!! $directory->infoCol3 !!}

    	</div>
    	
</div></div>

@if($directory->dirid != 4)
    'editTable'=>$article->artid, 'id'=>'artid', 'text'=>'Article'])</span>
@endif

@stop