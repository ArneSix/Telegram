<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function show(Page $page)
    {

        return view("pages/$page", compact('page'));
    }

    // will automatically throw a 404 when a page isn't found
    public function default(Page $page)
    {
        $layout = $page->layout;
        return view("layouts/$layout", [ 'data' => $page ]);
    }
}
