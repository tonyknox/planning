<?php

namespace App\Http\Controllers;

use App\Person;
use App\Article;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::with('articles')->paginate(12);
        return view('Person.index', compact('person','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Person::create($request->all());
        return redirect('people');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function show($pp)
    {
        $person = Person::findOrFail($pp);
        $tags = preg_split("/ /",$person['pptag']);
        $tag = Article::where('arttag', 'like', '%'.$tags[0].'%')->orderBy('arttag')->orderBy('artdate')->get();
        $auth_tag = '';
        if( preg_match('/author/i',$person['type']  )){
            $p = $person['first'].' '. $person['last'];
            $auth_tag = Article::where('artauthor', 'like', '%'.$p.'%')->get();
        }

        list($prevPage,$nextPage) = nextBook('App\Person','ppid',$person->ppid,'ppid');

        return view('Person.show', compact(['person']))->with('prevPage', $prevPage)->with('nextPage', $nextPage)->with('tag', $tag)->with('auth_tag', $auth_tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function edit($pp)
    {
        $person = Person::findOrFail($pp);
        return view('Person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pp)
    {
        $person = Person::findOrFail($pp);
        $person->update($request->all());
        return redirect('people'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function destroy($pp)
    {
        //
    }
}
