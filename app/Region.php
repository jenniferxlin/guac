<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
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
     * Returns the guides this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guides() {
      return $this->hasMany('App\Guide');
    }

}
