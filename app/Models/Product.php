<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    // public $name = 'test';
    protected $guarded = [];
    use HasTranslations;
    public $translatable = ['name'];
    public function category(){

        return $this->belongsTo(Category::class);
    }

   
    public function user(){

        return $this->belongsToMany(User::class,'userps','product_id','user_id');
    }


}
