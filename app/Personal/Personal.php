<?php

namespace App\Personal;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['names', 'last_name', 'sex', 'birthday'];
}
