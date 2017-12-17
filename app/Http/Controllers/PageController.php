<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = App\Page::all();
        return view('page');
    }
}
