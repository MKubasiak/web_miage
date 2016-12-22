<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersEpisode extends Model
{
    protected $table = 'usersepisodes';
    protected $primaryKey = 'id';
    public $timestamps = false;
}