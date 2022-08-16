<?php

namespace App\Http\Controllers\Session;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login_Model;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    public function index(){
        // $data = User::where('id',Auth::user()->id)->pluck('id');
        $login = Login_Model::all()->where('user_ID',Auth::user()->id);
        return view('Dashboard.Session.session', compact('login'));
        // dd($login);
    }
}
