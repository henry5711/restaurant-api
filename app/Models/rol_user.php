<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_user extends Model
{
    use HasFactory;
   protected $table='rol_users';
    protected $fillable=['name','status'];
}
