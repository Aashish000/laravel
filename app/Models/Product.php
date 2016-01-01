<?php 
 
 namespace App\Models;

	class Product extends \Eloquent {


		protected $fillable = [

			'name',
			'description',
			'price',
			'slug'

		];

	}