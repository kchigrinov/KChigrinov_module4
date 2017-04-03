<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Tiding;

class CategoriesController extends Controller
{

    function show($id)
	{

		$category = Categories::find($id);

		$news = \DB::table('tidings')->where('tidings.category_id', '=', $category->id)->orderBy('created_at', 'DESC')->paginate(5);
		
    	return view('categories.show', compact('category', 'news'));

    }
}
