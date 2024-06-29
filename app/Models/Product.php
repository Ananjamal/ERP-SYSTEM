<?php

namespace App\Models;

use App\Models\Inventory;
use App\Models\ProductTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'price','image'
    ];

    public function productTransactions()
    {
        return $this->hasMany(ProductTransaction::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
