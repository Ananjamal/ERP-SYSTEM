<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
         'account_id', 'amount', 'type', 'description','status',
    ];


    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
