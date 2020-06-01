<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usser extends Model
{
    protected $fillable=['Name'];

    public function scopeNam($query)
    {
        
       return $query->where('name','a')->get();
    }

    public function category()
    {
        return $this->belongsto('Category');
    }
}
