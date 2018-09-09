<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;
use App\Guide;
use App\Category;
use App\Country;
use App\Region;

use App\Http\Resources\Article as ArticleResource;
use App\Http\Resources\Guide as GuideResource;

use Auth;

class ArticleController extends Controller
{

    /**
     * Returns the list of articles.
     *
     * @return \Illuminate\View\View
     */
    public function articles() {
        $articles = Article::list();
        $categories = Category::all();
        $regions = Region::all();
        return view('articles', [
            'articles' => $articles,
            'categories' => $categories,
            'regions' => $regions
        ]);
    }

    /**
     * Returns the list of currently unverified articles.
     *
     * @return \Illuminate\View\View
     */
    public function unverified() {
        $articles = Article::unverified();
        $categories = Category::all();
        $regions = Region::all();
        return view('articles', [
            'articles' => $articles,
            'categories' => $categories,
            'regions' => $regions
        ]);
    }

    /**
     * Returns a single article, based on the name.
     *
     * @param string $name
     * @return \Illuminate\View\View
     */
    public function article($name) {
        $article = Article::find($name);
        // Get next and prev articles in order to have links
        // on the side of the page.
        $next = Article::next($article->created_at)->first();
        $prev = Article::prev($article->created_at)->first();
        $user = Auth::user();
        if($article->verified || ($user && $user->can('view', $article))) {
            return view('article', [
                'article' => $article,
                'next' => $next ? $next->name : "",
                'prev' => $prev ? $prev->name : ""
            ]);
        }
        return redirect()->route('index');
    }

    /**
     * Shows the editor for an article's text
     *
     * @return \Illuminate\View\View
     */
    public function showEdit($name) {
        $article = Article::find($name);
        $authors = User::all();
        $regions = Region::all();
        $categories = Category::all();
        $countries = Country::all();
        $user = Auth::user();
        if($user && $user->can('update', $article)) {
            return view('article_edit', [
                'article' => $article,
                'authors' => $authors,
                'regions' => $regions,
                'categories' => $categories,
                'countries' => $countries
            ]);
        }
        session()->flash('warning', 'Unauthorized to perform that action');
        return redirect()->route('index');
    }

    /**
     * Edits the text for an article.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, $name) {
        $article = Article::find($name);
        $user = Auth::user();
        if($user && $user->can('update', $article)) {
            $article->text = $request->text ?: $article->text;
            $article->title = $request->title ?: $article->title;
            $article->issue = $request->issue ?: $article->issue;
            $article->summary = $request->summary ?: $article->summary;
            $article->city = $request->city ?: $article->city;
            $article->user_id = $request->author ?: $article->user_id;
            $article->region_id = $request->region ?: $article->region_id;
            $article->category_id = $request->category ?: $article->category_id;
            $article->country_id = $request->country ?: $article->country_id;
            $article->image = $request->image ? asset($request->image) : $article->image;
            $article->verified = $request->verify ? true : false;
            $article->save();
            session()->flash('success', "Article $article->title edited successfully!");
            return redirect()->route('article', ['name' => $article->name]);
        }
        session()->flash('warning', 'Unauthorized to perform that action');
        return redirect()->route('index');
    }

    /**
     * Shows the page for uploading an article.
     *
     * @return \Illuminate\View\View
     */
    public function showUpload() {
      $authors = User::all();
      $regions = Region::all();
      $categories = Category::all();
      $countries = Country::all();
      $article = new Article();
      $author = Auth::user();
      if($author && $author->can('create', $article)) {
        session()->flash('upload');
        return view('article_edit', [
            'article' => $article,
            'authors' => $authors,
            'author' => $author,
            'regions' => $regions,
            'categories' => $categories,
            'countries' => $countries
        ]);
      }
      session()->flash('warning', 'Unauthorized to perform that action');
      return redirect()->route('index');
    }

    /**
     * Actually uploads the article.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function upload(Request $request) {
      $article = new Article();
      $author = Auth::user();
      if($author && $author->can('create', $article)) {
        $article->text = $request->text ?: "";
        $article->title = $request->title ?: "";
        $article->issue = $request->issue ?: "";
        $article->summary = $request->summary ?: "";
        $article->city = $request->city ?: "";
        $article->name = $request->title ? $this->makeName($request->title) : "";
        $article->user_id = $request->author ?: 1;
        $article->region_id = $request->region ?: 1;
        $article->category_id = $request->category ?: 1;
        $article->country_id = $request->country ?: 1;
        $article->featured = false;
        $article->image = $request->image ? asset($request->image) : "";
        $article->verified = $request->verify ? true : false;
        $article->save();
        session()->flash('success', "Article $article->title uploaded successfully!");
        return redirect()->route('article', ['name' => $article->name]);
      }
      session()->flash('warning', 'Unauthorized to perform that action');
      return redirect()->route('index');
    }

    /**
     * Permanently deletes the article specified by $name.
     */
    public function delete($name) {
        $article = Article::find($name);
        $title = $article->title;
        $user = Auth::user();
        if($user && $user->can('delete', $article)) {
            $article->forceDelete();
            session()->flash('success', "Article $title deleted successfully");
        }
        else {
            session()->flash('warning', 'Unauthorized to perform that action');
        }
        return redirect()->route('index');
    }

    /**
     * Shows an editable list of articles.
     *
     * @return \Illuminate\View\View
     */
    public function showFeatured() {
      $articles = Article::list();
      return view('featured_edit', ['articles' => $articles]);
    }

    /**
     * Edits the list of featured articles.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function editFeatured(Request $request) {
      $articles = $request->featured;
      foreach($articles as $feature_name) {
        $article = Article::find($feature_name);
        $article->featured = true;
        $article->save();
      }
      foreach(Article::featured() as $old_featured) {
        if(!in_array($old_featured->name, $articles)) {
            $old_featured->featured = false;
        }
        else {
            $old_featured->featured = true;
        }
        $old_featured->save();
      }
      session()->flash('success', "Featured articles edited successfully");
      return redirect()->route('index');
    }

    /**
     * Returns a JSON list of articles filtered by country.
     */
    public function json(Request $request) {
        $country = $request->country;
        $stories = ArticleResource::collection(Article::map($country));
        // $guides = GuideResource::collection(Guide::map($country));
        // $merged = $stories->merge($guides);
        return response()->json($stories);
    }

    /**
     ************** HELPERS ****************
     */

    /**
     * Makes the name from the title.
     *
     * @param string $title
     * @return \Illuminate\View\View
     */
    public function makeName($title) {
        $title = str_replace(" ", "-", strtolower($title));
        return preg_replace('/[^A-Za-z0-9\_\-]/', '', $title);
    }

    /**
     * Gets the image URL and uploads it.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getImage($request) {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images');
            return $path;
        }
        else {
            return $request->original;
        }
    }

}
