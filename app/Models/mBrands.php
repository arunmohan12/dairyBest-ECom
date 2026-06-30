<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mBrands extends Model
{
    protected $primaryKey = 'brand_id';


    public function products()
    {
        // Assumes your mProducts table has a 'brand_id' foreign key
        return $this->hasMany(mProducts::class, 'brand_id');
    }
}
