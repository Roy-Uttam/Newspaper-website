<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable=[

        'name',
        'image',
        'title',
        'news_details',
        'category_id',
        'is_active',

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}
