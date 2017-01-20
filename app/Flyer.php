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


    public function scopeLocatedAt($query, $zip, $street){
        $street = str_replace('-', ' ', $street);
        return $query->where(compact('zip', 'street'));
    }


    public function photos(){
        return $this->hasMany('App\photo');
    }

    public function getPriceAttribute($price){ //this will format the Price attribute whenever we call Price field ($flyers->price)
        return 'Price: $' . number_format($price);
    }

    public function getStreetAttribute($street){ //this will format the street attribute whenever we call street field ($flyers->street)
        return 'Street: ' . $street;
    }

}
