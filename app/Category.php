<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name' , 'icon_url'
    ];

    public function getDate()
    {
        $date = $this -> updated_at;
        return $date->format('Y-m-d - h:i A' , strtotime($date));
    }

    public function products(){
        return $this->hasMany(Product::class);

    }

}
