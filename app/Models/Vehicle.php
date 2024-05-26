<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'agmt_no',
        'app_id',
        'customer_name',
        'bkt',
        'pos',
        'tos',
        'reg_number',
        'chassis_no',
        'engine_no',
        'model',
        'product',
        'file_name',
        'branch',
        'customer_mobile_no',
        'status',
    ];
}
