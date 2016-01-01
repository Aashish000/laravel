<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('products/add',['uses'=> 'HomeController@index', 'as' => 'productAdd' ]);

post('products/save', ['uses' => 'HomeController@store', 'as'=> 'saveProduct']);

//for user 
get('users/add',['uses'=> 'UserController@index', 'as' => 'userAdd' ]);

post('users/save', ['uses' => 'UserController@store', 'as'=> 'saveUser']);

//for listing users 
get('users/list',['uses'=> 'UserController@lists', 'as' => 'userAdd' ]);

//post('users/save', ['uses' => 'UserController@store', 'as'=> 'saveUser']);