<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mcategory extends Model
{
   


   
    public static function getAllCategories()
    {
        return self::select('category_code', 'name','image_path')->get();
    }    
    public function products()
    {
        return $this->hasMany(mProducts::class, 'category_code', 'category_code');
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_code', 'category_code');
    }
    
}
