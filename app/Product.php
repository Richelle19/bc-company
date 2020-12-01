<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }
    public function store()
    {
    	return $this->belongsTo(Store::class);
    }

    

}
