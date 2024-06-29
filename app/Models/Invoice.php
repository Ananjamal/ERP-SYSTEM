<?php

namespace App\Models;

use App\Models\Account;
use App\Models\InvoiceDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id', 'invoice_number', 'invoice_date', 'total_amount','type', 'status',
    ];

    public function invoiceDetails()
    {
        return $this->hasOne(InvoiceDetail::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
