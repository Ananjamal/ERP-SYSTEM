<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id', 'amount','paid', 'payment_date',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
