<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = Article::paginate(3);
        return view('article.index', compact('articles'));
    }
}
