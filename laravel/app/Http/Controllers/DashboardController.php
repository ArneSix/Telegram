<?php

namespace App\Http\Controllers;

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
        return view("admin.pages.articles");
    }

    public function getIndexDonations()
    {
        return view("admin.pages.donations");
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

    }

    public function articleStore()
    {

    }

    public function articleEdit()
    {

    }

    public function articleUpdate()
    {

    }

    public function articleDelete()
    {

    }

    public function donationShow()
    {

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
