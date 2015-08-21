<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
<<<<<<< HEAD

=======
	public function dashboard()
	{
		$followings = DB::table('users')->select('following')->where('id', Auth::id())->first()->following;
		//echo $followings;
		$followings = explode(",", $followings);
		foreach ($followings as $following) {
			$getThreads = DB::table('threads')->where('userid', $following)->get();
			$getTutorial = DB::table('tutorials')->where('userid', $following)->get();
		}

		//var_dump($getThreads);
		foreach ($getThreads as $key) {
			$threads[] = (object)array(
				'id' => $key->id,
				'userid' =>$key->userid,
				'judul' => $key->judul,
				'tipe' => 'thread',
				'content' => $key->content,
				'created_at' => $key->created_at
			);
		} 



		foreach ($getTutorial as $key) {
			$tutorials[] = (object)array(
				'id' => $key->id,
				'userid' =>$key->userid,
				'judul' => $key->judul,
				'tipe' =>'tutorial',
				'content' => $key->content,
				'created_at' => $key->created_at
			);
		}

		if($getThreads!=null && $getTutorial !== null){
			$status = array_merge($threads, $tutorials);
			for ($i=0; $i < sizeof($status)-1 ; $i++) { 
				for ($j=0; $j < sizeof($status)-1 ; $j++) { 
					if($status[$j]->created_at < $status[$j+1]->created_at){
						$temp = $status[$j];
						$status[$j] = $status[$j+1];
						$status[$j+1] = $temp;
					}
				}
			}
		}else{
			$status = null;
			//var_dump($status);
		}
			
		return View::make('dashboard')->with('status', $status);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
	public function create()
	{
		return View::make('form.signup');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$signup = Input::all();

		$rules = array(
			'username' 	=> 'required|unique:users|min:6',
			'password' 	=> 'required|min:6',
			'email'		=> 'required|email|unique:users'
		);

		$messages = array(
			'username.required' => 'Username harus diisi',
			'username,unique' => 'Username telah terdaftar',
			'username.min' => 'username minimal 6 karakter',
			'password.required' => 'Password harus diisi',
			'password.min' => 'password minimal 6 karakter',
			'email.required' => 'Email harus di isi',
			'email.email' =>'Bukan email yang benar',
			'email.unique' => 'email telah terdatar'
		);

		$validasi = Validator::make($signup, $rules, $messages);

		if($validasi -> fails()){
			return Redirect::back()->withErrors($validasi)->withInput();
		}else{
			$user = new User();
			$user->username = Input::get('username');

			$user->email = Input::get('email');

			$user->password = Hash::make(Input::get('password'));

<<<<<<< HEAD
			$user->confirmation = 1;

			$user->save();

			Auth::loginUsingid($user->id);
			return Redirect::to('signup/2');
		}
	}

	public function saveUserStep2(){
		$data = Input::all();

		$user = User::find(Auth::id());
		$userSocialMedia = new SocialMedia;

		$user->name = Input::get('name');
		$user->job = Input::get('job');
		$user->about = Input::get('aboutme');
		$user->confirmation = 2;

		$userSocialMedia->userid = Auth::id();
		$userSocialMedia->facebook = Input::get('facebook');
		$userSocialMedia->github = Input::get('github');
		$userSocialMedia->twitter = Input::get('twitter');

		$user->save();
		$userSocialMedia->save();

		return Redirect::to('signup/3');
	}

=======
			$user->save();
		}
	}

>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
	public function doLogin(){
		$login = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($login)){
			return Redirect::back();
		}else{
			return Redirect::back()->withErrors('Login Gagal');
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
<<<<<<< HEAD
	public function getUser($username)
=======
	public function show($username)
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
	{
		$users = User::where('username', $username)->first();
		$threads = Thread::where('userid', $users->id)->get();

<<<<<<< HEAD
		$follows = explode(',', $users->followers);
		
		foreach ($follows as $follow) {
			if($follow == Auth::id()){
				$following = true;
				break;
			}else{
				$following = false;
			}
		}		
		if($users=='[]'){
			echo 'not found';
		}else{
			return View::make('profil')->with('users', $users)->with('threads', $threads)->with('following', $following);
=======
		if($users=='[]'){
			echo 'not found';
		}else{
			return View::make('profil')->with('users', $users)->with('threads', $threads);
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
		}

		
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
	public function updateProfil()
	{
		//$editProfil = Input::all();

		

		$id = Auth::id();

		$user = User::find($id);

		$user->name = Input::get('name-edit');
		$user->job = Input::get('job-edit');
		$user->fb = Input::get('facebook-edit');
		$user->twitter = Input::get('twitter-edit');


		$user->save();

		return Redirect::back();
	}

	public function updateFoto(){
		//if (Session::token() == Input::get('_token')){
		//	return Response::json("token sama");
			if (Request::ajax()){
				var_dump("Sukses 2");
				$id = Auth::id();
				$user = User::find($id);

				$user->photo = Input::get('image');
				$user->save();

				$response = array(
	        		'status' => 'success',
	        		'msg' => 'Option created successfully',
	    		);
				return Response::json($response); 
			}
		//}else{
		//	return Response::json("token tidak sama");
		//}
		
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

	public function login(){
		return View::make('form.login');
	}

<<<<<<< HEAD
=======

>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
}
