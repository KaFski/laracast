<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::latest('published_at')->Published()->get();
        
        return view('articles/index')->with('articles', $articles);
    }
    
    public function show($id) {
        $article = Article::findOrFail($id);
        
        return view('articles/show')->with('article', $article);
    }
    
    public function create() {
        return view('articles/create');
    }
    
    public function store(CreateArticleRequest $request) {
        
        Article::create($request->all());
        
        return redirect('articles');
                
    }

}
