<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = Article::paginate(3);
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreBlogPost $request)
    {
        $data = $request->validated();
        $article = new Article();
        $article->fill($data);
        $article->save();
        return redirect()->route('articles.index')->with('status', 'New article has been successfully added!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StoreBlogPost $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();
        $article->fill($data);
        $article->save();
        return redirect()->route('articles.index')->with('status', 'The article has been successfully updated!');
    }
}
