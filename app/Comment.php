<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function BlogPost(){
        return $this->belongsTo('App\BlogPost');
    }
}
