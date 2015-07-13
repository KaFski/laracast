<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth', ['except' => 'index', 'show']);
    }
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
    
    public function store(ArticleRequest $request) {
        
        $article = new Article($request->all());
        
        \Auth::user()->articles()->save($article);
        
        \Session::flash('flash_message', 'Your article has been created');
        
        return redirect('articles');
                
    }
    
    public function edit($id) {
        
        $article = Article::findOrFail($id);
        
        return view('articles/edit')->with('article', $article);
    }
    
    public function update($id, ArticleRequest $request) {
        
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles');
        
    }

}
