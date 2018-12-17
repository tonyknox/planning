<?php

namespace App\Http\Controllers;

use App\Directory;
use App\Chapter;
use App\Pages;
use App\Book;

use Illuminate\Http\Request;
   

class DirectoriesController extends Controller
{
    public function index()
    {   
        $directory = Directory::with('chapters')->paginate(15);
        return view('Directory.index', compact(['directory','chapters']));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Directory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Directory::create($request->all());
        return redirect('directories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dir)
    {
        $directory = Directory::findOrFail($dir);
        //list($prevPage,$nextPage) = nextBook('App\Directory','dirid',$directory->dirid,'dirid');
        return view('Directory.show', compact(['directory']));
        //->with('prevPage', $prevPage)->with('nextPage', $nextPage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dir)
    {
        $directory = Directory::findOrFail($dir);
        return view('Directory.edit', compact('directory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dir)
    {
        $directory = Directory::findOrFail($dir);
        $directory->update($request->all());
        return redirect('directories');   
     }

    public function welcome()
    {
        $directory = Directory::where('dirid',4)->first();
        // $directory = $directory[0];
        return view('Directory.show', compact(['directory']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dir)
    {
        //
    }
}
