<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'user_id', 'payment_ref', 'amount', 'external_ref', 'payment_method'
        ];
}
