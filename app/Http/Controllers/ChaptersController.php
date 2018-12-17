<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Page;
use App\Greenery;
use App\Mccplan;
use App\Book;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter = Chapter::with('books','pages')->orderBy('book_bkid','asc')->orderBy('chapid','asc')->get();
        return view('Chapter.index', compact(['chapter', 'books','pages']));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Chapter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chapter::create($request->all());
        return redirect('chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function show($chap)
    {
        $chapter = Chapter::with('books','pages')->findOrFail($chap);
        $chaps = Chapter::where('book_bkid',$chapter->book_bkid)->get();
        $book = Book::where('bkid',$chapter->book_bkid)->get();

        if($chapter->book_bkid == 1){
            $pges = Page::where('chapter_chapid',$chapter->chapid)->get();       
        }
        elseif($chapter->book_bkid == 2 || $chapter->book_bkid == 3) {
            $pges = Greenery::where('chapter_chapid',$chapter->chapid)->get();
        }
        elseif($chapter->book_bkid == 4){
            $pges = Mccplan::where('chapter_chapid',$chapter->chapid)->get();
        }

        list($prevPage,$nextPage) = nextPage('App\Chapter','chapid',$chapter->chapid,'book_bkid',$chapter->book_bkid);
        list($prevChap,$nextChap) = nextBook('App\Chapter','book_bkid',$chapter->book_bkid,'chapid');

        return view('Chapter.show', compact(['chapter', 'pages','books']))->with('chaps',$chaps)->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap)->with('pges', $pges)->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function edit($chap)
    {
        $chapter = Chapter::findOrFail($chap);
        return view('Chapter.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chap)
    {
        $chapter = Chapter::findOrFail($chap);
        $chapter->update($request->all());
        return redirect('chapters'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $chap
     * @return \Illuminate\Http\Response
     */
    public function destroy($chap)
    {
        //
    }
}
