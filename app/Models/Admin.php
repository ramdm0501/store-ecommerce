<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table='admins';
    protected $guarded=[];
    public $timestamps= true;

}
