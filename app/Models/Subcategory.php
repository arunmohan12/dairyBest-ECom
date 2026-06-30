<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //

    protected $fillable = ['name', 'category_code', 'image_path'];

    public function category()
    {
        return $this->belongsTo(Mcategory::class, 'category_code', 'category_code');
    }
    public function products()
    {
        return $this->hasMany(mProducts::class, 'subcategory_id','id');
    }
    

}
