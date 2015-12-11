<?php

namespace App\Http\Controllers;

use Cache; use App\Http\Controllers\Controller; 
class UserController extends Controller 
{ 
	/** 
	 * Show the profile for the given user. 
	 * 
	 * @param int $id 
	 * @return Response 
	 */ 
	public function showProfile($id) 
	{ 
		$user = Cache::get('user:'.$id');
				
		return view('profile', ['user' => $user]); 
	} 
} 	 
			
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
