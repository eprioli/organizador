<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['nome', 'url'];




}
