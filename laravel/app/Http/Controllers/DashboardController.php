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
}
