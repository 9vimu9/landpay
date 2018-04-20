<?php

namespace App;

use App\Otcategorystatus;
use Illuminate\Database\Eloquent\Model;

class Otcategory extends Model
{
    protected $fillable=[
    	'name'
    ];

    public function otcategorystatuses()
    {
    	return $this->hasMany(Otcategorystatus::class);
    }

    public function getLatestOtcategoryStatus()
    {
    	return $this->hasMany(Otcategorystatus::class)->orderby('created_at', 'desc')->first();
    }

}
