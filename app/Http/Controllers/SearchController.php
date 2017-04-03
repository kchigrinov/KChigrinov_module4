<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiding;

class SearchController extends Controller
{
    
    function search()
	{
	    
		$keyword = $_GET['search'];

		$news = \DB::table('tidings')->where('tags', 'LIKE', '%' . $keyword . '%')->get();
		
		if(count($news) != 0){

	    return view('search', compact('news'));
	  	} 

	  	else
	  	{
	  		return view('index');
	  	}

    }

}