<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password_reset extends Model
{
    protected $fillable = ['email', 'token', 'created_at', 'updated_at'];
    public $timestamps = true;

}
