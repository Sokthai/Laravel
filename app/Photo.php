<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'flyers_photo';
    protected $fillable = ['photo']; // if we change anything in the model, we MUST exit tinker and enter again to take effect

    public function flyer(){
        return $this->belongsTo('App\Flyer');
    }
}
