<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\comment;
class ficher extends Model
{
    protected $fillable = [
        'user','id','categori'
    ];


    public function comment()
    {

       return $this->BelongsTo('App\comment','id','file');
    }
}
