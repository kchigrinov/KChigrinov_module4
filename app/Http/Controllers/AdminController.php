<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Hash;

use \Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCategory()
    {   
        $categories = \DB::table('categories')->get();

        return view('admin.categories', compact('categories'));
    }

    public function createCategory()
    {
        if(!empty($_POST['new-category'])){
            \DB::table('categories')->insert([
                ['title' => $_POST['new-category']]
            ]);
        }

        return Redirect::back();
    }

    public function indexNews()
    {
        $categories = \DB::table('categories')->get(); 

        return view('admin.news', compact('categories'));
    }

    public function createNews()
    {   

        $categories = \DB::table('categories')->get();

        if((!empty($_POST['news-title'])) && (!empty($_POST['news-body'])) && (is_uploaded_file($_FILES['userfile']['tmp_name']))){

            $uploaddir = '../public/images/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                
            $id_category = \DB::table('categories')->where('title', '=', $_POST['category'])->pluck('id');

            foreach ($id_category as $id) {

                \DB::table('tidings')->insert([
                    ['title'        =>  $_POST['news-title'],
                     'body'         =>  $_POST['news-body'],
                     'image'        =>  $_FILES['userfile']['name'],
                     'category_id'  =>  $id,
                     'tags'         =>  $_POST['tags']
                    ]
                ]);
                echo "<h1 style='text-align:center'>Новость создана!</h1>";
            }
        }
        else{
            echo "<h1 style='color:red; text-align:center;'>заполните все поля</h1>";
        }

        return view('admin.news', compact('categories'));
    }

    public function Comments()
    {
        return view('admin.comments');
    }

    public function indexApprovedComments()
    {

        $posts = \DB::table('posts')->where('approved', '=', 0)->get();

        return view('admin.approved-comments', compact('posts'));
    }

    public function approvedComments()
    {

        \DB::table('posts')->where('id', '=', $_POST['id_post'])->update(['approved' => $_POST['approved']]);

        return back();
    }

    public function indexAdveresting()
    {
        return view('admin.advertising');
    }

    public function createAdveresting()
    {
        if((!empty($_POST['name'])) && (!empty($_POST['price'])) && (!empty($_POST['seller']))){
            \DB::table('promotions')->insert([
                        ['title'   =>  $_POST['name'],
                         'price'   =>  $_POST['price'],
                         'seller'  =>  $_POST['seller']
                        ]
                                            ]);
            echo "<h1 style='text-align:center'>Товар создан!</h1>";
        }

        return view('admin.advertising');
    }

    public function style()
    {
        return view('admin.style');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function auth(){
        $name = $_POST['admin_name'];
        $pass = $_POST['admin_password'];

        $ggg = \DB::table('users')->where('name', '=', 'admin', 'AND', 'password', '=', 'admin123456')->get();

        foreach ($ggg as $value) {
            if ((Hash::check($pass, $value->password)) && (($value->name) == $name)){
                return view('admin.index');
            }
            else{
                dd('Неверная пара логин/пароль!');
                return view('admin.welcome');
            }
        }
    }

    public function fileUpload(Request $request){

        dd($request);

        if($request->isMethod('post')){

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/path','filename.img');
            }
         }
   }
}
