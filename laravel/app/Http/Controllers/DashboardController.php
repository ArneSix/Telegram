<?php

namespace App\Http\Controllers;

use App\Article;
use App\Donation;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function getIndex()
    {
        return view("admin.pages.home");
    }

    public function getIndexArticles()
    {
        $articles = Article::all();

        return view("admin.pages.articles", [
            'articles' => $articles,
        ]);
    }

    public function getIndexDonations()
    {
        $donations = Donation::all();

        return view("admin.pages.donations", [
            'donations' => $donations,
        ]);
    }

    public function getIndexKeys()
    {
        return view("admin.pages.keys");
    }

    public function getIndexPages()
    {
        $pages = Page::all();

        return view("admin.pages.pages", [
            'pages' => $pages
        ]);
    }

    public function pageCreate()
    {
        return view("admin.pages.pageCRUD.create");
    }

    public function pageStore(Request $r)
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

    public function pageEdit(Page $page)
    {
        return view("admin.pages.pageCRUD.edit", [
            "page" => $page,
        ]);
    }

    public function pageUpdate(Page $page, Request $r)
    {
        //TODO: validate update

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

    public function pageDelete(Page $page)
    {
        $page->delete();

        return redirect()->route('dashboard.index.pages');
    }

    public function articleCreate()
    {
        return view("admin.pages.articleCRUD.create");
    }

    public function articleStore(Request $r)
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

    public function articleEdit(Article $article)
    {
        return view("admin.pages.articleCRUD.edit", [
            "article" => $article,
        ]);
    }

    public function articleUpdate(Article $article, Request $r)
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

    public function articleDelete(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.index.articles');
    }

    public function showDonation(Donation $donation)
    {
        $donation = Donation::where('id', $donation->id)->first();

        return view("admin.pages.donationCRUD.show", [
            "donation" => $donation,
        ]);
    }

    public function keyShow()
    {

    }

    public function createKey()
    {

    }

    public function storeKey()
    {

    }

    public function editKey()
    {

    }

    public function updatekey()
    {

    }

    public function deleteKey()
    {

    }
}
