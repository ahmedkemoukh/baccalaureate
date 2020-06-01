<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['name','category_id'];
    
   public function category()
   {
       return $this->belongsto('App\Category','Category_id','id');
   }
}
