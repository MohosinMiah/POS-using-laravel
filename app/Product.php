<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $table = 'products';

    // Setup fields of table "category"
    protected $fillable = ['id', 'name', 'category_id', 'price','quantity'];

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


      /**
     * Get the supplier that owns the Product.
     */
    public function purchase()
    {
        return $this->belongsTo('App\Purchase');

    }



}
