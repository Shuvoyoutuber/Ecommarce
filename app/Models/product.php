<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'Product_name',
        'Product_short_deshcription',
        'Product_long_deshcription',
        'Product_price',
        'Product_category_id',
        'Product_sub_category_id',
        'Product_category_name',
        'Product_sub_category_name',
        'Product_slug',
    ];
}
