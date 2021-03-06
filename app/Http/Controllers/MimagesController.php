<?php

namespace App\Http\Controllers;

use App\Mimage;
use Illuminate\Http\Request;

class MimagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mimages = Mimage::paginate(10);

        return view('Mimage.index', compact(['mimages']));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mimage::create($request->all());
        return redirect('mimages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mimages  $mimages
     * @return \Illuminate\Http\Response
     */
    public function show($img)
    {
        $mimage = Mimage::findOrFail($img);
        list($prevPage,$nextPage) = nxtPge('App\Mimage','imgid',$mimage->imgid);
        return view('Mimage.show', compact(['mimage']))->with('prevPage',$prevPage)->with('nextPage',$nextPage);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mimages  $mimages
     * @return \Illuminate\Http\Response
     */
    public function edit($img)
    {
        $mimages = Mimage::findOrFail($img);
        return view('Mimage.edit', compact('mimages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mimages  $mimages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $img)
    {
        $mimage = Mimage::findOrFail($img);
        $mimage->update($request->all());
        return redirect('mimages'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mimages  $mimages
     * @return \Illuminate\Http\Response
     */
    public function destroy($img)
    {
        //
    }
}
