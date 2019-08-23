<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{


    /**
     * Get the product that owns the Supplier.
     */
    public function productr()
    {
        return $this->belongsTo('App\Supplier');
    }


}
