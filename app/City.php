<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function partner()
    {
        return $this->hasOne('App\Partner');
    }
    public function delivertimes()
    {
        return $this->hasMany('App\Deliverytime');
    } 
    public function holidays()
    {
        return $this->hasMany('App\Holiday');
    } 
}
