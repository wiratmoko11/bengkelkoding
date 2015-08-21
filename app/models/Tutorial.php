<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tutorial extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

}
