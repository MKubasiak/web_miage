<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesSeason extends Model
{
    protected $table = 'seriesseasons';
    protected $primaryKey = 'id';
    public $timestamps = false;
}