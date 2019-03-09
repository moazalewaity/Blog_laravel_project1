<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $uploads = '/images/' ;
    protected $fillable = [
        'file'
    ];

    public function getFileAttribute($image)
    {
    	return $this->uploads . $image;
    }
}
