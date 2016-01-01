<?php
 namespace App\Models;
 use \Hash;
 class User extends \Eloquent{


protected $fillable = [

			'name',
			'username',
			'password',
			'is_admin'

		];

		function setPasswordAttribute($value){
			$this->attributes['password']=Hash::make($value);
		}

		function getNameAttribute($value){
			return ucwords($value);
		}



 }