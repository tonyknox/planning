@extends('layouts/app')


@section('col1')
	<h3><a href="{{ action('BooksController@index') }}">Publications</a></h3>
	<figure class="figure">
		<img src="/images/sp/sp_cover.jpg" class="figure-img img-fluid" alt="Cover, City of Melbourne 1985 Strategy Plan" width="100% \9" />
		<figcaption class="figure-caption">Cover of the 1985 City of Melbourne Srategy Plan</figcaption>
	</figure>

	<p><i>
		These publications guided the move from a laissez faire development culture hell-bent on turning history into cash to a more considered, planned, city.  
	</i></p>

	<a href="{{ action('BooksController@show', ['bkid' => 4]) }}"><h5>1972 City of Melbourne Strategy Plan</h5></a>
		<p>
			The destruction of Victorian Melbourne that began in the Bolte years was rampant by 1970 that the Melbourne City Council decided that a strategic plan was needed. Interplan Pty Ltd consisted of the American planner, Donald H. Wolbrink and Melbourne Architect, R. P. McIntyre. Their groundbreaking study was presented to Council in December 1973. Though much admired it was never implemented.
		</p>

	<a href="{{ action('BooksController@show', ['bkid' => 1]) }}"><h5>1985 City of Melbourne Strategy Plan</h5></a>
		<p>
			The changed political climate that saw John Cain reinstate the Melbourne City Council brought a wave of new councillors to the MCC. They decided that it was time for another attempt at a strategy plan and budgeted $500,000 to see it happen. This time it was done in-house and driven by Chair, Trevor Huggard. The 1985 Strategy Plan was built on the basis of 19072 and it heeded the lessons of the earlier model. This time it was implemented. It is the basis of all subsequent planning in the City pf Melbourne.
		</p>
	<a href="{{ action('BooksController@show', ['bkid' => 2]) }}"><h5>Grids and Greenery</h5></a> <a href="{{ action('BooksController@show', ['bkid' => 3]) }}"><h5>&amp; Case Studies</h5></a>
		<p>
			Look at how planning in the City of Melbourne changed following the implementation of the 1985 Strategy Plan.
		</p>
			
@stop

@section('col2')
	<h3><a href="{{ action('ArticlesController@index') }}">Articles</a></h3>
	<figure class="figure">
		<img src="/images/places/fishermans_bend/fishermans_bend.jpg" class="figure-img img-fluid" alt="Aerial view of Fishemans Bend" width="100% \9" />
		<figcaption class="figure-caption">Fishermans Bend from the air</figcaption>
	</figure>

	<p><i>
	A collection of newspaper and other articles looking at the planning decisions altering the face of our city. These stretch from the Kennett years and the reign of his planning minister Rob Maclellan until the present day. They also attempt to shine a light on the minds and methods of property developers
	</i></p>

	<a href="{{ action('ArticlesController@show', ['artid' => 32]) }}"><h5>Ventnor</h5></a>
	<p>Mathew Guy, nicknamed Mr Skyscraper, by planner Michael Buxton, had the unfortunate habit of acting first and reflecting later
	</p>

	<a href="{{ action('ArticlesController@show', ['artid' => 11]) }}"><h5>Fishermans Bend</h5></a>
	@stop

	@section('col3')
	     <h3><a href="{{ action('PeopleController@index') }}">People</a></h3>
	     <figure class="figure">
	     	<img src="/images/politicians/jeff_kennett/kennett_with_press.jpg" class="figure-img img-fluid" alt="Jeff Kennett in his heyday with Alan Stockdale in the background" width="100%" />
			<figcaption class="figure-caption">Jeff Kennett in his heyday with Alan Stockdale in the background</figcaption>
		</figure>
@stop
