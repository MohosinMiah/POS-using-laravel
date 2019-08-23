<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{




    /**
     * Get the Supplier record associated with the Product.
     */
    public function supplier()
    {

        return $this->hasOne('App\Supplier', 'id');

     }




    /**
     * Get the Category record associated with the Product.
     */
    public function category()
    {

        return $this->hasOne('App\Category', 'id');

     }





}
