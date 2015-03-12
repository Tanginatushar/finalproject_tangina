<?php namespace App\Http\Controllers;
use Input;
use Redirect;

use App\SearchResult;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = SearchResult::all();
		return view('searchResult.search', compact('search'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('searchResult.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		SearchResult::create( $input );

		return Redirect::route('searchResult.index')->with('message', 'Project created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function show(SearchResult $search){
		return view('searchResult.show', compact('search'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function edit(SearchResult $search)
	{
		return view('searchResult.edit', compact('search'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function update(SearchResult $search)
	{
		;
		$input = array_except(Input::all(), '_method');
		$search->update($input);

		return Redirect::route('searchResult.show', $search->code)->with('message', 'Project updated.');
	}

	public function destroy(SearchResult $search)
	{
		$search->delete();

		return Redirect::route('searchResult.index')->with('message', 'Project deleted.');
	}

}