<?php

class BengkelkodingController extends \BaseController {

	public function follow($status){
		if(Request::ajax()){
			if($status == 0){
				$userB = User::find(Input::get('userId'));
				$userA = User::find(Auth::id());
				$userBId = Input::get('userId');
				$userAId = Auth::id();

				
				$userA->following = $userA->following.$userBId.',';
				$userB->followers = $userB->followers.$userAId.',';
				$userA->save();
				$userB->save();
				
				return Response::json(array($userA->following, $userB->followers));
			}elseif($status == 1){
				$userB = User::find(Input::get('userId'));
				$userA = User::find(Auth::id());


				$userAFollowings = explode(',', $userA->following);
				$i = 0;
				foreach ($userAFollowings as $userAFollowing) {
					if($userAFollowing == Input::get('userId')){
						$userAFollowings[$i] = null;
						break;
					}
					$i++;
				}
				$userAFollowings = implode(',', $userAFollowings);
				$userA->following = $userAFollowings;
				$userA->save();

				$userBfollowers = explode(',', $userB->followers);
				$i = 0;
				foreach ($userBfollowers as $userBfollower) {
					if($userBfollower == Auth::id()){
						$userBfollowers[$i] = null;
						break;
					}
					$i++;
				}
				$userBfollowers = implode(',', $userBfollowers);
				$userB->followers = $userBfollowers;
				$userB->save();
				return Response::json(array($userA->following, $userB->followers));
			}
		}
	}

	public function dashboard()
	{
		$dashboard = Dashboard::where('userid', Auth::id())->get();
		
		return View::make('dashboard')->with('dashboard', $dashboard);
	}

	public function getSignUp1()
	{	
		return View::make('form.signup');
	}

	public function getSignUp2(){
		$confirmation = Auth::user()->confirmation;
		
		if($confirmation == 1){
			return View::make('form.signup-1');
		}else{
			return "403 Forbidden";
		}
	}

	public function getSignUp3(){
		$confirmation = Auth::user()->confirmation;
		
		if($confirmation == 2){
			return View::make('form.signup-2');
		}else{
			return "403 Forbidden";
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
