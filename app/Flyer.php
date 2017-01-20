<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $table = "flyers";
    protected $fillable = [ // if we change anything in the model, we MUST exit tinker and enter again to take effect
          'street',
          'city',
          'zip',
          'state',
          'country',
          'price',
          'description',
    ];

    public function photos(){
        return $this->hasMany('App\photo');
    }



}
