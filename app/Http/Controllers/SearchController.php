<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Guide;

class SearchController extends Controller
{
    
    /**
     * Searches the site, bringing up the results.
     * 
     */
    public function search(Request $request) {
        $articles = Article::search($request->search);
        // $guides = Guide::search($request->search);
        $request->flash();
        return view('results', [
            'articles' => $articles,
            // 'guides' => $guides
        ]);
    }

}
