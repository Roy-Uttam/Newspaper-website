<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'cat_code',
    ];

    public function news(){
        
        return $this->hasMany(News::class);
        
    }

    public function setting(){
        
        return $this->hasMany(Setting::class);
        
    }


}
