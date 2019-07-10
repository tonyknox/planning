<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Munro;
use Helper;

class MunrosController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $page = Munro::with('chapters')->orderBy('book_bkid')->paginate(15);
       return view('Munro.index', compact(['page','chapters']));  
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('Munro.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       Munro::create($request->all());
       return redirect('Munros');
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
           $id = "pge".$id;
           $page = Munro::with('chapters')->where('amname',$id)->first();
       }
       else{
           $page = Munro::with('chapters')->where('amid',$id)->first();
       }
       
       $pages = Munro::where('chapter_chapid',$page->chapter_chapid)->get();
       
       list($prevPage,$nextPage) = nextPage('App\Munro','amname',$page->amname,'book_bkid',$page->book_bkid);

       list($prevChap,$nextChap) = nextChapter('App\Munro','chapter_chapid',$page->chapter_chapid,'book_bkid',$page->book_bkid);
    
       $pageNumber = "Page".ltrim(substr($page->amname,1), '0');

       return view('Munro.show', compact(['page', 'chapters']))->with('pages',$pages)->with('pageNumber', $pageNumber)->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('nextChap', $nextChap)->with('prevChap', $prevChap);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $chap
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $page = Munro::findOrFail($id);     
       return view('Munro.edit', compact('page'));
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
        $page = Munro::findOrFail($id);
        $page->update($request->all());
        return redirect('munros'); 
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