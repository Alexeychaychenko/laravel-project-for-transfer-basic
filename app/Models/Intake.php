<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    use HasFactory;

    protected $fillable = [
        'shippingmethod',
        'customername',
        'barcode',
        'description',
        'shippingweight',
        'pickup',
        'location',
        'price',
        'week',
        'Box',
        'status',
    ];
}
