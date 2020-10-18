<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = Article::All();
        return view('article.articles', ['articles' => $articles]);
    }
}
