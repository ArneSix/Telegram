<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view("pages/home");
    }

    public function articles()
    {

    }

    public function donations()
    {

    }

    public function pages()
    {

    }

    public function keys()
    {

    }
}
