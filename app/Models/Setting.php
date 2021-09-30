<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[

        
        'category_id'
      

    ];

    public function category(){

        return $this->belongsTo(Category::class ,'category_id' , 'id');
    }

    public function news(){
        
        return $this->hasMany(News::class,'category_id' , 'id');
        
    }

}
