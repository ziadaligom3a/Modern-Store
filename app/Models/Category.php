<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    protected $guarded = [];
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];

    
    public function product(){

        return $this->hasMany(Product::class);
    }
}
