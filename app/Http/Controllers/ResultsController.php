<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Title;
use App\Result;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResultsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function index(Title $title)
    {
        return view('results.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function create(Title $title)
    {
        return view('results.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Title $title
     * @return Response
     */
    public function store(Title $title)
    {
        $input = Input::all();
        $input['title_id'] = $title->id;
        Result::create( $input );

        return Redirect::route('titles.show', $title->summery)->with('Result created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title $title
     * @param  \App\Result    $result
     * @return Response
     */
    public function show(Title $title, Result $result)
    {
        return view('results.show', compact('title', 'result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title $title
     * @param  \App\Result    $result
     * @return Response
     */
    public function edit(Title $title, Result $result)
    {
        return view('results.edit', compact('title', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Title $title
     * @param  \App\Result    $result
     * @return Response
     */
    public function update(Title $title, Result $result)
    {
        $input = array_except(Input::all(), '_method');
        $result->update($input);

        return Redirect::route('titles.results.show', [$title->summery, $result->summery])->with('message', 'Result updated.');
    }

    public function destroy(Title $title, Result $result)
    {
        $result->delete();

        return Redirect::route('titles.show', $title->summery)->with('message', 'Result deleted.');
    }

}