<?php

class TutorialController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	function generateLink($id, $judul){
		$linkex = explode(" ", $judul);
		$link = implode("-", $linkex);

		return $id."/".$link;
	}

	public function index()
	{
		$tutorials = Tutorial::all();

		return View::make('tutorial.index')->with('tutorials', $tutorials);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tutorial.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tutorial = Input::all();

		$rules = array(
			'tutorial-tittle' => 'required|max:100'
		);

		$messages = array(
			'tutorial-tittle.required' =>'Judul Harus Ada',
			'tutorial-tittle.max' => 'Maksimal panjang judul 100 karakter'
		);

		$validasi = Validator::make($tutorial, $rules, $messages);

		if($validasi->fails()){
			return Redirect::back()->withErrors($validasi);
		}else{
			$tutorial = new Tutorial();

			$tutorial->userid = Auth::id();

			$tutorial->categoryid = Input::get('kategori');

			$tutorial->judul = Input::get('tutorial-tittle');

			$tutorial->content = Input::get('content');

			$tutorial->save();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $judul)
	{
		
		$judulex = explode("-", $judul);
		$judulim = implode(" ", $judulex);

		$tutorial = Tutorial::where('judul', $judulim)->get();

		foreach ($tutorial as $key) {
			$user = User::where('id', $key->userid)->get();
		}
		
		

		return View::make('tutorial.detail')->with('tutorial', $tutorial)->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
