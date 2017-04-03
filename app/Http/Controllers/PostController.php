<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tidings;

class PostController extends Controller
{
    
    public function store($id)
    {
        $user_id = \Auth::id();


            if(isset($user_id))
            {
                $category = \DB::table('tidings')->where('id', '=', $id)->get();
                foreach ($category as $values) {
                    if(($values->category_id) != 5){
                        \DB::table('posts')->insert(
                        ['body'      => request('body'), 
                         'tiding_id' => $id, 
                         'user_id'   => $user_id
                        ]);

                        return back();
                    }
                    else
                    {   
                        \DB::table('posts')->insert(
                        ['body'      => request('body'), 
                         'tiding_id' => $id, 
                         'user_id'   => $user_id,
                         'approved'  => 0
                        ]);
                        return back()->withErrors(['message', 'The Message']);
                    }
                }
            }
            else{
                return back();
            }



    }


}
