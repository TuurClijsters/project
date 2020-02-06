<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        // Render a list 
        $articles =Article::latest()->get();

        return view ('articles.index',['articles' => $articles]);
    }

    // public function show($id){
    //     // Show a single resource
    //     $article =Article::findOrFail($id);

    //     return view ('articles.show',['article' => $article]);
    // }

    public function show(Article $article){
        return view ('articles.show',['article' => $article]);
    }

    
    public function create(){
        return view ('articles.create');
    }

    public function store(){

        Article::create($this->validateArticle());
        // validate en saves new article in database
        return redirect('/articles');
        
    }

    public function edit(Article $article){
        // $article =Article::find($article);
        // Show a view to edit a existing resource
        // return view('articles.edit',['article' => $article]);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article){

        $article->update($this->validateArticle());
        return redirect(route('articles.show', $article));
    }

    public function destroy(){
        // Delete the resource
    }

    protected function validateArticle(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
