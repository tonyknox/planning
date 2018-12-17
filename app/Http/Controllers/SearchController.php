<?php

namespace App\Http\Controllers;
use App\Article;
use App\Chapter;
use App\Greenery;
use App\Mccplan;
use App\Mimage;
use App\Page;
use App\Place;
use App\Person;
use Illuminate\Http\Request;

class SearchController extends Controller
{
 	public function searcharticles(Request $request)
	{
		$r = $request->input('query'); 
		$article = Article::search($r)->paginate(15);
		if(isset($article)){
			if( count($article)){
				return view('Article.index', compact('article'));
			}
		else
		{	
				return view('Article.index', ['noresult'=>'No article matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------
	   		
	public function searchchapters(Request $request)
	{					
		$r = $request->input('query');
		$chapter = Chapter::search($r)->paginate(15);
		if(isset($chapter)){
			if( count($chapter)){
				return view('Chapter.index', compact('chapter'));
			}
			else
			{
				return view('Chapter.index', ['noresult'=>'No Chapter matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------

	public function searchgreeneries(Request $request)
	{
		$r = $request->input('query');
		$page = Greenery::search($r)->paginate(15);
		if(isset($page)){
			if( count($page)){
				return view('Greenery.index', compact('page'));
			}
			else{
				return view('Greenery.index', ['noresult'=>'No Page matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------

	public function searchmccplans(Request $request)
	{
		$r = $request->input('query');
		$page = Mccplan::search($r)->with('chapters')->paginate(15);
		if(isset($page)){
			if( count($page)){
				return view('Mccplan.index', compact('page'));
			}
			else{
				return view('Mccplan.index', ['noresult'=>'No Page matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------

	public function searchimages(Request $request)
	{
		$r = $request->input('query');
		$mimages = Mimage::search($r)->paginate(15);
		if(isset($mimages)){
			if( count($mimages)){
				return view('Mimage.index', compact('mimages'));
			}
			else
			{	
				return view('Mimage.index', ['noresult'=>'No image matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------

	public function searchpages(Request $request)
	{
		$r = $request->input('query');
		$page = Page::search($r)->with('chapters')->paginate(15);
		if(isset($page)){
			if( count($page)){
				return view('Page.index', compact('page'));
			}
			else{
				return view('Page.index', ['noresult'=>'No Page matches your query. Try again . . .']);
			}
		}
	}

	//----------------------------------------------

	public function searchpeople(Request $request)
	{ 
		$r = $request->input('query');
		$person = Person::search($r)->paginate(15);
		if(isset($person)){
			if( count($person)){
				return view('Person.index', compact('person'));
			}
			else
			{	
				return view('Person.index', ['noresult'=>'No person matches your query. Try again . . .']);
			}
		}
	}

	public function searchplaces(Request $request)
	{ 
		$r = $request->input('query');
		$place = Place::search($r)->paginate(15);
		if(isset($place)){
			if( count($place)){
				return view('Place.index', compact('place'));
			}
			else
			{	
				return view('Place.index', ['noresult'=>'No place matches your query. Try again . . .']);
			}
		}
	}
	
}
