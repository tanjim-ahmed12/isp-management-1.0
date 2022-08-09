<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing_Info extends Model
{
    use HasFactory;
    protected $table = 'billing_info';
    protected $fillable = [
        'Reference',
        'Amount',
    ];
}
