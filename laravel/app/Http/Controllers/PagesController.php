<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function home()
    {
        return view("pages/home", compact('DATA_TO_COMPACT'));
    }

    public function about()
    {

    }

    public function privacy()
    {

    }

    public function donate()
    {

    }

    public function articles()
    {

    }

    public function article(Article $article)
    {

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
