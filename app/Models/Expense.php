<?php

namespace App\Models;

use App\Models\Account;
use App\Models\ExpenseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id', 'description', 'amount', 'expense_type',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function expenseDetails()
    {
        return $this->hasOne(ExpenseDetail::class);
    }
}
