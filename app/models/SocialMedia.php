<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Socialmedia extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public function user() {
		return $this->belongsTo('User', 'userid');
	}

}
