<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeriesCompany extends Model
{
    protected $table = 'seriescompanies';
    protected $primaryKey = 'id';
    public $timestamps = false;
}