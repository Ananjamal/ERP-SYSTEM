<?php

namespace App\Models;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpenseDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'expense_id', 'description','price',
    ];

    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }
}
