<?php

namespace App\Http\Controllers\Billing_Info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billing_Info;

class Bill_controller extends Controller
{
    public function index(){
        $bills = Billing_Info::all(); 
        return view('Dashboard.Billing Info.Billing', compact('bills'));
    }
    public function insert(Request $request){
        $bill = new Billing_Info();
        $bill->Reference = $request->input('Reference');
        $bill->Amount = $request->input('Amount');
        $bill->save();
        return redirect('/Billing') ->with('status',"Payment Complete");
    }
    public function billing(){
        return view('Dashboard.Billing Info.Billing');
    }
    
}
