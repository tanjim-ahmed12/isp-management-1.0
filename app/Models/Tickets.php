<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $table = 'ticket_table';
    protected $fillable = [
     'ticket_Brief',
     'ticket_Details',
     'review',
     'rating'   
    ];
}
