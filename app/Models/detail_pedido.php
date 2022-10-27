<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pedido extends Model
{
    use HasFactory;
    protected $table='detail_pedidos';
    protected $fillable=['pedido_id','product_id'];
}
