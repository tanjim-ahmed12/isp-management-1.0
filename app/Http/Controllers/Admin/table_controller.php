<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;
// use app\Http\Controllers\Auth\RegisterController;
use App\Models\User;

class table_controller extends Controller
{
    public function index(){
        $tickets = Tickets::all(); 
        return view('Dashboard.Ticket_Table.index', compact('tickets'));
    }
    public function add(){
        return view('Dashboard.Ticket_Table.add');
    }
    public function insert(Request $request){
        $ticket = new Tickets();
        $ticket->ticket_Brief = $request->input('ticket_Brief');
        $ticket->ticket_Details = $request->input('ticket_Details');
        $ticket->review = $request->input('review');
        $ticket->rating = $request->input('rating');
        $ticket->save();
        return redirect('/Tickets/add') ->with('Status',"Added Data");
    }
    
}
