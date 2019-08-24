<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'type',
        'note',

        // add all other fields
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'categories';



   /**
     * Get the product that owns the Category.
     */
    public function product()
    {
        return $this->belongsTo('App\Category');
    }







}
