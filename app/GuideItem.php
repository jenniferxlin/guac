<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideItem extends Model
{
    
    /**
     * Returns the guide this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guide() {
      return $this->belongsTo('App\Guide');
    }

    /**
     * Returns the category this thing has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
      return $this->belongsTo('App\Category');
    }

}
