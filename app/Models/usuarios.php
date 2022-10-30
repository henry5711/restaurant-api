<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $fillable=['name_user','password','status','rol_id'];

    public function user_details()
    {
        return $this->hasOne(use_details::class,'user_id');
    }
}
