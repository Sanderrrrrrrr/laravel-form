<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logInAuth extends Model
{
    protected $table = 'log_in_auth';
    protected $fillable = ['email', 'password'];
}
