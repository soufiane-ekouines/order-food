<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_repas extends Model
{
    use HasFactory;
    protected $fillable = [
        'qte',
        'cmt',
        'repas_id',
        'order_id',
    ];
}
