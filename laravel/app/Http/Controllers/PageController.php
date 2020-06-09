<?php

namespace App\Http\Controllers;

use App\Article;
use App\Donation;
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
        $articles = Article::all()->take(2);
        $donations = Donation::all()->take(10);

        return view("pages/home", [
            'articles' => $articles,
            'donations' => $donations,
        ]);
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

    /*
     * This default function will get any page that isn't strictly defined in laravel.
     * It will look for a custom page inside the database and load the content and layout
     * associated with that page.
     *
     * If no page is found it will automatically return a 404 page.
     */
    public function getPage($pageSlug)
    {
        $page = Page::where('slug', $pageSlug)->first();

        if (!$page) abort('404');

        return view("pages.$page->template", [
            'page' => $page,
        ]);
    }
}
