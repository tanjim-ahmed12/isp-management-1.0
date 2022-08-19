<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Billing_Info\Bill_controller;
use App\Http\Controllers\Controller;
use App\Models\Billing_Info;
use Illuminate\Http\Request;
use App\Models\User;

class FrontViewController extends Controller
{
    public function index()
    {
        $username = User::all();
        $lastPayment = Billing_Info::all()->where('id')->last();
        return view('layouts.Dashboard', compact('username','lastPayment'));
    }
}
