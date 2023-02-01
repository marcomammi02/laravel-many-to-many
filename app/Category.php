<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Slugger;

    public $timestamps = false;

    public function posts() {
        return $this->hasMany('App\Post');
    }

    // Per settare lo slag nell'URL al posto dell'ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
