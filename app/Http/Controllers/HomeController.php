<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tickets;
use App\Models\Billing_Info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $username = User::all();
        $lastPayment = Billing_Info::all()->where('id')->last();
        $ticketBrief = Tickets::all();
        return view('layouts.Dashboard', compact('lastPayment','ticketBrief'));
    }
}
