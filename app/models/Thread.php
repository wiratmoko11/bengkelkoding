<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Thread extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public function comments(){
		return $this->hasMany('Tcomment');
	}	

}
