<?php

namespace App\Http\Controllers\Plan_Controller;

use App\Models\User;
use App\Models\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    public function changePlan(Request $request,$id){
        $data = Packages::where('id',$id)->pluck('Package_Speed');
        $username = User::where('name',Auth::user()->name)->pluck('PackageType');
        $user = User::all()->where('name',Auth::user()->name);
        // dd($data,$username);
        dd($user);

    }
}
