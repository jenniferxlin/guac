<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Guide;

use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the front page of featured articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured = Article::featured();
        $articles = Article::list();
        // $guides = Guide::featured();
        return view('index', [
            'featured' => $featured,
            'articles' => $articles,
            // 'guides' => $guides
        ]);
    }
}
