<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function home()
    {
        return view("pages/home");
    }

    public function about()
    {
        $articles = Article::all();
        return view("pages/about");
    }

    public function privacy()
    {
        return view("pages/privacy");
    }

    public function donate()
    {
        return view("pages/donate");
    }

    public function articles()
    {
        return view("pages/articles");
    }

    public function article(Article $article)
    {
        return view("pages/article");
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit(Page $page)
    {

    }

    public function update(Page $page)
    {

    }

    public function delete(Page $page)
    {

    }

    /*
     * This default function will get any page that isn't strictly defined in laravel.
     * It will look for a custom page inside the database and load the content and layout
     * associated with that page.
     *
     * If no page is found it will automatically return a 404 page.
     */
    public function default(Page $page)
    {
        $layout = $page->layout;
        return view("layouts/$layout", [ 'data' => $page ]);
    }
}
