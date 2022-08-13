<?php

namespace App\Http\Controllers\Plan_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class plan_controller extends Controller
{
    public function index(){
        return view('Dashboard.Change_Plan.ChangeDemo');
    }
}
