<?php
 
namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Article;
 
class ArticleController extends Controller{
 
 
    public function index(){
 
        $article  = Article::all();
 
        return response()->json($article);
 
    }
 
    public function getArticle($id){
 
        $article  = Article::find($id);
 
        return response()->json($article);
    }
 
    public function saveArticle(Request $request){
 
        $article = Article::create($request->all());
 
        return response()->json($article);
 
    }
 
    public function deleteArticle($id){
        $article  = Article::find($id);
 
        $article->delete();
 
        return response()->json('success');
    }
 
    public function updateArticle(Request $request,$id){
        $article  = Article::find($id);
 
        $article->title = $request->input('title');
        $article->content = $request->input('content');
 
        $article->save();
 
        return response()->json($article);
    }
 
}
 
 