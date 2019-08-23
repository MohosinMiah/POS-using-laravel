<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


   /**
     * Get the product that owns the Category.
     */
    public function product()
    {
        return $this->belongsTo('App\Category');
    }







}
