<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class FrontViewController extends Controller
{
    public function index(){
        $username = User::all();
        return view('layouts.Dashboard',compact('username'));
    }
    public function billing(){
        return view('Dashboard.Billing Info.Billing');
    }
}
