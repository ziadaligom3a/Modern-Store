<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class boxes extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name','body'];
}
