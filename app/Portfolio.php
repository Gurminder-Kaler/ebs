<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = ['id','title','img','tech_used'];
        protected $table = 'portfolio';
}
