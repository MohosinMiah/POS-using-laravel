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



    // Setup fields of table "category"
    protected $fillable = ['id', 'display_name', 'name', 'key'];

    /**
     * Get the Product record associated with the Purchase.
     */
    public function product()
    {

        return $this->hasOne('App\Product', 'id');

     }




}
