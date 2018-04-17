<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{

	public function layout()
	{
    	return $this->hasMany('App\Image');
	}

}
