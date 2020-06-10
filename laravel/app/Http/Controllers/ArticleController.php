<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create()
    {
        return view("admin.pages.articleCRUD.create");
    }

    public function store(Request $r)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);



        Article::create([
            'title' => request('title'),
            'slug' => Str::slug(request(('title'))),
            'content' => request('content'),
            'image' => request('image')->store('images'),
        ]);

        return redirect()->route('dashboard.index.articles');
    }

    public function edit(Article $article)
    {
        return view("admin.pages.articleCRUD.edit", [
            "article" => $article,
        ]);
    }

    public function update(Article $article, Request $r)
    {
        if ($r->id != $article->id) abort(403);

        $article->update([
            'title' => request('title'),
            'slug' => Str::slug(request(('title'))),
            'content' => request('content'),
            'image' => request('image')->store('images'),
        ]);

        return redirect()->route('dashboard.index.articles');
    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.index.articles');
    }
}
