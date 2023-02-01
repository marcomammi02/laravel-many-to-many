<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Slugger;

    public function category() {
        return $this->belongsTo('App\Category');
    }

    // Per settare lo slag nell'URL al posto dell'ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
