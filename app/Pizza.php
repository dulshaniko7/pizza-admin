<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
	public function kinds(){
		return $this->hasMany(Kinds::class);
	}

}
