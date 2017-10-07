<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Transformers\UserTransformer;

class UserController extends Controller
{
    public function users(User $user) 
    {
    	$users = $user->all();
    	
    	return fractal()
    		->collection($users)
    		->transformWith(new UserTransformer)
    		->toArray();
    }
}