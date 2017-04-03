<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Tiding;

class CommentsController extends Controller
{

    function show($id)
	{

		$posts = \DB::table('posts')->where('posts.user_id', '=', $id)->get();
		
		$user = \DB::table('users')->where('users.id', '=', $id)->get(); 


    	return view('layouts.coments', compact('posts', 'user'));

    }
}
