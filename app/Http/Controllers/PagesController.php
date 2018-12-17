<?php

namespace App\Http\Controllers;

use App\Page;
use App\Chapter;
use Illuminate\Http\Request;
use Helper;

class PagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::with('chapters')->orderBy('book_bkid')->orderBy('pname')->paginate(15);
        return view('Page.index', compact(['page','chapters']));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Page::create($request->all());
        return redirect('pages');
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
            $page = Page::with('chapters')->where('pname',$id)->first();
        }
        else{
            $page = Page::with('chapters')->where('pid',$id)->first();
        }
        
        $pages = Page::where('chapter_chapid',$page->chapter_chapid)->get();

        list($prevPage,$nextPage) = nextPage('App\Page','pname',$page->pname,'book_bkid',$page->book_bkid);
        list($prevChap,$nextChap) = nextChapter('App\Page','chapter_chapid',$page->chapter_chapid,'book_bkid',$page->book_bkid);
        // $prev =$prev->pid;
        // $next =$next->pid;
        
        $pageNumber = "Page ".ltrim(substr($page->pname,1), '0');

        return view('Page.show', compact(['page', 'chapters']))->with('pages',$pages)->with('pageNumber', $pageNumber)->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);     
        return view('Page.edit', compact('page'));
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
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect('pages'); 
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
