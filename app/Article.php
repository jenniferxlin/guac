<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $primaryKey = 'name';

    public $incrementing = false;

    /**
     * Returns the user this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
      return $this->belongsTo('App\User');
    }

    /**
     * Returns the category this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
      return $this->belongsTo('App\Category');
    }

    /**
     * Returns the region this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
      return $this->belongsTo('App\Region');
    }

    /**
     * Returns the country this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
      return $this->belongsTo('App\Country');
    }

    /**
     * Returns the current featured articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query) {
        return $query->select('name', 'title', 'city', 'country_id', 'image', 'user_id', 'category_id', 'issue')
                     ->where('featured', true)
                     ->where('verified', 1)
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the next article after $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNext($query, $created_at) {
        return $query->select('name')
                     ->where('created_at', '>', $created_at)
                     ->where('verified', 1)
                     ->oldest();
    }

    /**
     * Returns the previous article before $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrev($query, $created_at) {
        return $query->select('name')
                     ->where('created_at', '<', $created_at)
                     ->where('verified', 1)
                     ->latest();
    }

    /**
     * Returns the list of all articles sorted by date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList($query) {
        return $query->select('name', 'title', 'city', 'image', 'issue', 'user_id', 'featured', 'category_id', 'region_id')
                     ->orderBy('created_at')
                     ->where('verified', 1)->get();
    }

    /**
     * Returns the list of all articles sorted by date matching the specified search query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        return $query->select('name', 'title', 'image', 'user_id', 'region_id', 'issue')
                     ->where('title', 'like', "%$search%")
                     ->orWhere('text', 'like', "%$search%")
                     ->orWhereHas('category', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->orWhereHas('region', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->where('verified', 1)
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the list of all articles filtered by country.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMap($query, $country) {
        return $query->select('name', 'title', 'city', 'image', 'user_id', 'category_id', 'country_id', 'region_id', 'issue')
                     ->whereHas('country', function($query) use($country) {
                         $query->where('code', "$country");
                     })
                     ->where('verified', 1)
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the list of currently unverified articles.
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnverified($query) {
        return $query->select('name', 'title', 'city', 'image', 'issue', 'user_id', 'featured', 'category_id', 'region_id')
                     ->orderBy('created_at')
                     ->where('verified', 0)->get();
    }

    /**
     * Returns the text and title and user of a single article.
     *
     * @param string $name
     * @return array
     */
    public function scopeText($query, $name) {
        return $query->select('text', 'title', 'user_id', 'name')
                     ->where('name', $name)->first();
    }

}
