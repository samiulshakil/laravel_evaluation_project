<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductInfo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productInfos(){
        return $this->hasMany(ProductInfo::class);
    }
}
