<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table = 'governorates';
    protected $fillable = [
        'governorate_name' , 'governorate_name_en'
    ];

    public function City(){
        return $this->hasMany(City::class);
    }
}
