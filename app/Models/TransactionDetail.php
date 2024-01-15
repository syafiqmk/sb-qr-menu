<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable =["transaction_id", "product_id", "qty", "subtotal"];

    public function transaction()
    {
    	return $this->belongsTo('App\Models\Transaction');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
