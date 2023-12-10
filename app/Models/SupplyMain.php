<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyMain extends Model
{
    //use HasFactory;
    protected $table = 'supplymain';
    protected $primaryKey = 'stock_no';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'stock_no',
        'description',
        'unit',
        'balance_before',
        'delivered',
        'issued',
        'balance_after',
    ];
}
