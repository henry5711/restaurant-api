<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class use_details extends Model
{
    use HasFactory;

   protected $fillable=['nombre','apellido','code_phone','phone',
'email','direccion','punto_ref'];

    public function user()
    {
        return $this->belongsTo(usuarios::class);
    }
}
