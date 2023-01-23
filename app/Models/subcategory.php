<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_category_name',
        'category_name',
        'category_id',
        'product_count',
        'sub_category_count',
        'slug',
    ];
}
