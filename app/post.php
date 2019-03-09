<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
       protected $fillable = [
        'photo_id' , 'category_id' , 'title'  , 'body' 
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


      public function photo()
    {
        return $this->belongsTo('App\photo');
    }

     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    
}
