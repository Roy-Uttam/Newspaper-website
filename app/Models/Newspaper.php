<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'image',
        'title',
        'news_details',
        'category_id',
    ];

   
    public function category(){

        return $this->belongsTo(Category::class ,'category_id' , 'id');
    }
    public function setting(){

        return $this->belongsTo(Setting::class ,'category_id' , 'id');
    }

    public function summer(){
        
        return $this->hasOne(Summernote::class ,'id' , 'sid');
        
    }
}
