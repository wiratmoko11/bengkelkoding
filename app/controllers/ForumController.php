<?php

class ForumController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$threads = Thread::all();

		return View::make('forum.index')->with('threads', $threads);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kategori = DB::table('kategoris')->lists('kategori');

		return View::make('forum.create')->with('kategori', $kategori);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$thread = Input::all();

		$rules = array(
			'thread-tittle' => 'required',
			'content' => 'required'
		);

		$messages = array(
			'thread-tittle.required' =>'judul belum diisi',
			'content.required'=>'content belum diisi'
		);

		$validasi = Validator::make($thread, $rules, $messages);

		if($validasi -> fails()){
			return Redirect::back()->withErrors($validasi);
		}else{
			$forum = new Thread();

			$forum->userid = Input::get('userid');

			$forum->judul = Input::get('thread-tittle');

			$forum->topics = Input::get('kategori');

			$forum->content = Input::get('content');

			$forum->save();

			$title = Input::get('thread-tittle');

			$link = explode(" ", $title);
			$link = implode("-", $link);

			return Redirect::to('forum/'.$link);
		}
	}

	public function storeComment(){
		$comment = new Tcomment();

		$comment->threadid = Input::get('threadid');

		$comment->userid = Auth::id();

		$comment->comment = Input::get('content');

		$comment->save();

		return Redirect::back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$judul)
	{
		$judulex = explode("-", $judul);
		$judulim = implode(" ", $judulex);
		//echo $judulim;
		$forums = Thread::where('judul', $judulim)->first();
		//var_dump($forums);
		//foreach ($forums as $key) {
		//	$user = User::where('id', $key->userid)->get();
		//}
		$comment = Tcomment::whereThreadid($forums->id)->get();

		$thread_voter = Thread::whereVoter($forums->id)->get();

		$thread_voter = explode(",", $thread_voter);

		return View::make('forum.detail')->with('forums', $forums)->with('comment', $comment)->with('thread_voter', $thread_voter);
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

	public function upvote(){
		if(Request::ajax()){
			$threadid = Input::get('threadid');

			$thread = Thread::find($threadid);

			$currentPoint = $thread->point;

			$newPoint = $currentPoint + 1;

			$thread->point = $newPoint;

			$thread->save();

			$point = $thread->point;
		}
	}

}
