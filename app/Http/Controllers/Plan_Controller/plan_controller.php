<?php

namespace App\Http\Controllers\Plan_Controller;

use App\Http\Controllers\Controller;
use App\Models\Packages;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class plan_controller extends Controller
{
    public function index()
    {
        return view('Dashboard.Change_Plan.ChangeDemo');
    }
    public function showPlans()
    {
        $package = Packages::all();
        return view('Dashboard.Change_Plan.ChangeDemo', compact('package'));
    }
    public function PlanDetails($id)
    {
        $package = Packages::find($id);
        return view('Dashboard.Change_Plan.PlanDetails', compact('package'));
    }
}
