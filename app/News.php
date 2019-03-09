<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //product $table = 'ne
    //ws';
    
    public static function provied()
    {
    	return static::where('id' ,'>' , 3)->get();
    }

        public static function DeleteByID($id)
    {
    	return static::find($id)->delete();
    }
}
