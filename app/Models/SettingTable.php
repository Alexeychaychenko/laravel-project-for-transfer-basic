<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTable extends Model
{
    use HasFactory;

    protected $table = 'setting';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ecoprice',
        'seafreightfactor',
        'seafreightprice',
        'srdrate',
        'eurorate',
        'giftcardrate',
        'orderrate',
        'seafreightrate',
        'airmailprice',
    ];
    
}
