<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Purchase extends Model
{
      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'purchases';




    /**
     * Get the Product record associated with the Purchase.
     */
    public function product()
    {

        return $this->hasOne('App\Product', 'id');

     }




}
