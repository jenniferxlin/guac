<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    
    /**
     * Returns the country this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
      return $this->belongsTo('App\Country');
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
     * Returns the guide_items this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guide_items() {
      return $this->hasMany('App\GuideItem');
    }

    /** Get the featured guides. */
    public function scopeFeatured($query) {
        return $query->select('id', 'title', 'image', 'country_id', 'issue')
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the next article after $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNext($query, $created_at) {
        return $query->select('id')
                     ->where('created_at', '>', $created_at)
                     ->oldest();
    }

    /**
     * Returns the previous article before $created_at.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrev($query, $created_at) {
        return $query->select('id')
                     ->where('created_at', '<', $created_at)
                     ->latest();
    }

    /**
     * Returns the list of all articles sorted by date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search) {
        return $query->select('id', 'title', 'image', 'country_id', 'issue')
                     ->where('title', 'like', "%$search%")
                     ->orWhere('summary', 'like', "%$search%")
                     ->orWhereHas('region', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->orWhereHas('country', function($query) use($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->orderBy('created_at')->get();
    }

    /**
     * Returns the list of all guides filtered by country.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMap($query, $country) {
        return $query->select('id', 'title', 'image', 'country_id', 'issue')
                     ->whereHas('country', function($query) use($country) {
                         $query->where('code', "$country");
                     })
                     ->orderBy('created_at')->get();
    }

}
