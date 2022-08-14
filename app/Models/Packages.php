<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'packages';
    protected $fillable = [
        'Package_Name',
        'Package_ID',
        'Package_Rate',
    ];
}
