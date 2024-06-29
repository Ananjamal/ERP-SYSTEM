<?php

namespace App\Models;

use App\Models\User;
use App\Models\Salary;
use App\Models\Expense;
use App\Models\Invoice;
use App\Models\JournalEntry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'account_number','account_name', 'balance',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function journalEntry()
    {
        return $this->hasMany(JournalEntry::class);
    }
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
    public function expense()
    {
        return $this->hasMany(Expense::class);
    }
}
