<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesGenre extends Model
{
    protected $table = 'seriesgenres';
    protected $primaryKey = 'id';
    public $timestamps = false;
}