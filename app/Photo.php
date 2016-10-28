<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
    	'path'
    ];

    protected $imgDir = '/images/';

    public function getPathAttribute($photo)
    {
    	return $this->imgDir.$photo;
    }
}
