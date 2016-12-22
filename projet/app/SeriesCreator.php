<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesCreator extends Model
{
    protected $table = 'seriescreators';
    protected $primaryKey = 'id';
    public $timestamps = false;
}