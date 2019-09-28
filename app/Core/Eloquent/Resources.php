<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function article(){
        return $this->belongsTo(article::class,'article_id','id');
    }
    //
}
