<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tcomment extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public function threads(){
		return $this->belongsTo('Thread');
	}

}