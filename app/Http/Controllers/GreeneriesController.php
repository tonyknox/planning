<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greenery;
use App\Chapter;

class GreeneriesController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Greenery::with('chapters')->orderBy('book_bkid')->orderBy('grname')->paginate(15);
        return view('Greenery.index', compact(['page','chapters']));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Greenery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Greenery::create($request->all());
        return redirect('greeneries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       if(strlen($id)>3){
            $id = preg_replace('/\D/','',$id); 
            if(strlen($id)<3){
                $id = str_pad($id, 3, "0", STR_PAD_LEFT);
            }
            $id = "p".$id;
            $page = Greenery::with('chapters')->where('grname',$id)->first();
        }
        else{
            $page = Greenery::with('chapters')->where('grid',$id)->first();
        }
        
        $pages = Greenery::where('chapter_chapid',$page->chapter_chapid)->get();
        
        list($prevPage,$nextPage) = nextPage('App\Greenery','grname',$page->grname,'book_bkid',$page->book_bkid);

        list($prevChap,$nextChap) = nextChapter('App\Greenery','chapter_chapid',$page->chapter_chapid,'book_bkid',$page->book_bkid);
     
        $pageNumber = "Page".ltrim(substr($page->grname,1), '0');

        return view('Greenery.show', compact(['page', 'chapters']))->with('pages',$pages)->with('pageNumber', $pageNumber)->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('prevChap', $prevChap)->with('nextChap', $nextChap);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Greenery::findOrFail($id);
        return view('Greenery.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Greenery::findOrFail($id);
        $page->update($request->all());
        return redirect('greeneries'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
