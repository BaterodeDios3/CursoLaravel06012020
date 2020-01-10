<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //protected $table="el nombre de mi tabla";
    protected $fillable=['nombre', 'email', 'mensaje'];
}
