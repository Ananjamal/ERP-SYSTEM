<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JournalEntry extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id', 'description','debit_amount', 'credit_amount',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
