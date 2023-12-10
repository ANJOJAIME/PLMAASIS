<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyDelivered extends Model
{
    //use HasFactory;
    protected $table = 'delivered';
    protected $fillable = [
        'delivery_date',
        'actual_delivery_date',
        'acceptance_date',
        'iar_no',
        'item_no',
        'stock_no',
        'description',
        'unit',
        'dr_no',
        'check_no',
        'po_no',
        'po_date',
        'po_amount',
        'pr_no',
        'price_per_purchase_request',
        'bur',
        'remarks',
    ];
}
