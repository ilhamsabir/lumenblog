<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    

  public function index(){
 
        $article  = Article::all();
 
        return response()->json($article);
 
    }

    //
}
