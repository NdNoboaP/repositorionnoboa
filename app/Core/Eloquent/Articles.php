<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function resources() {
        return $this->hasMany(resources::class,'article_id','id');
    }
    
 
    //
}
