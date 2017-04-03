<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiding;

class TidingsController extends Controller
{

    function show($id)
	{

		$singlenews = Tiding::find($id);

		\DB::table('tidings')->where('id', '=', $id)->increment('view_count', 1);

		$tags = \DB::table('tidings')->where('id', '=', $id)->pluck('tags');

		
		$coments = \DB::select('SELECT p.body, t.category_id, u.name,t.id, approved FROM posts p
								JOIN tidings t ON t.id = p.tiding_id
								JOIN users u ON u.id = p.user_id
								ORDER BY p.created_at DESC
								');


    	return view('tidings.show', compact('singlenews', 'tags', 'coments', 'id'));

    }

    function findByTag($tag)
	{
		$newsByTag = \DB::table('tidings')->where('tags', 'LIKE', '%' . $tag . '%')->get();

    	return view('tidings.showbytag', compact('newsByTag'));

    }

}