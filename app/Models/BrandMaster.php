<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandMaster extends Model
{
    use HasFactory;

    
    protected $table = 'brand_masters';
    protected $primaryKey = 'brand_id';

    protected $fillable = [
        'product_id',
        'status_id',
        'image_id',
        'name',
        'lang',
        'lang_id',
    ];
    
}
