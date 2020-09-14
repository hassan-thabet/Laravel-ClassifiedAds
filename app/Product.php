<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title' , 'description' , 'price' , 'status' , 'sponsored' ,'user_id' , 'category_id'
    ];

    public function getStatus()
    {
        return $this -> status == 'pending' ? 'Pending' : 'Active';

    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(Image::class);    
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

 
}
