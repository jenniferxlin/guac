<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    /**
     * Returns the articles this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() {
      return $this->hasMany('App\Article');
    }

    /**
     * Returns the guide_items this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guide_items() {
      return $this->hasMany('App\GuideItem');
    }

}
