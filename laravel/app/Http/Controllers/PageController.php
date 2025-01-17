<?php

namespace App\Http\Controllers;

use App\Article;
use App\Donation;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function contact()
    {
        return redirect()->to('/#contact');
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
        $articles = Article::simplePaginate(15);

        return view("pages/articles", [
            'articles' => $articles,
        ]);
    }

    public function article(Article $article)
    {
        dd($article);
        return view("pages/article", [ "article" => $article ]);
    }

    public function create()
    {
        return view("admin.pages.pageCRUD.create");
    }

    public function store(Request $r)
    {
        request()->validate([
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'layout' => 'required',
        ]);

        Page::create([
            'title' => request('title'),
            'slug' => Str::slug(request(('title'))),
            'intro' => request('intro'),
            'body' => request('content'),
            'layout' => request('layout'),
        ]);

        return redirect()->route('dashboard.index.pages');
    }

    public function edit(Page $page)
    {
        return view("admin.pages.pageCRUD.edit", [
            "page" => $page,
        ]);
    }

    public function update(Page $page, Request $r)
    {
        if ($r->id != $page->id) abort(403);

        $page->update([
            'title' => request('title'),
            'slug' => Str::slug(request(('title'))),
            'intro' => request('intro'),
            'body' => request('content'),
            'layout' => request('layout'),
        ]);

        return redirect()->route('dashboard.index.pages');
    }

    public function delete(Page $page)
    {
        $page->delete();

        return redirect()->route('dashboard.index.pages');
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
