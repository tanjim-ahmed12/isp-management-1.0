<?php

namespace App\Http\Controllers\Plan_Controller;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;

class plan_controller extends Controller
{
    public function index(){
        return view('Dashboard.Change_Plan.ChangeDemo');
    }
    public function showPlan($id){
        $package = new Packages();
        $package = Packages::find($id);
        $package-> view();
        return redirect()->back()->with('message',"Ticket Deleted");
    }
}
