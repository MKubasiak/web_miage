<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    protected $table = 'creators';
    protected $primaryKey = 'id';
    public $timestamps = false;
}