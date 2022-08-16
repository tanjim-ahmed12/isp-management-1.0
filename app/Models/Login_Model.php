<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login_Model extends Model
{
    use HasFactory;
    protected $table = 'login_data';
    protected $fillable = [
        'user_ID',
        'ip_Address',
        'device',
    ];
}
