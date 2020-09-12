<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'gov_id' , 'city_name' , 'city_name_en'
    ];



    public function Governorate(){
        return $this->belongsTo(Governorate::class);
    }
}
