<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Title;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TitlesController extends Controller {

    public function index()
    {
        $titles = Title::all();
        return view('titles.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        Title::create( $input );

        return Redirect::route('titles.index')->with('message', 'Title created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function show(Title $title)
    {
        return view('titles.show', compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function edit(Title $title)
    {
        return view('titles.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function update(Title $title)
    {
        $input = array_except(Input::all(), '_method');
        $title->update($input);

        return Redirect::route('titles.show', $title->summery)->with('message', 'Title updated.');
    }

    public function destroy(Title $title)
    {
        $title->delete();

        return Redirect::route('titles.index')->with('message', 'Title deleted.');
    }
  //  public function search(Title $title)
 //   {
  //      $search = Input::get('summery');
   //     $searches=Search::where('title','LIKE','%'.$search.'%')->get();


     //   return Redirect::route('titles.index')->with('message', 'Title deleted.');
  //  }
}
 