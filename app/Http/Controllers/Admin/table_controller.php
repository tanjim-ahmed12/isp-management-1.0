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
    // public function addTicket(){
    //     return view('Dashboard.Ticket_Table.addTicket');
    // }
    public function insert(Request $request){
        $ticket = new Tickets();
        $ticket->ticket_Brief = $request->input('ticket_Brief');
        $ticket->ticket_Details = $request->input('ticket_Details');
        $ticket->review = $request->input('review');
        $ticket->rating = $request->input('rating');
        $ticket->save();
        return redirect('/Tickets') ->with('Message',"Added New Ticket");
    }
    public function edit($id){
        $edit = Tickets::find($id);
        return view('Dashboard.Ticket_Table.editTicket', compact('edit'));
    }
    public function update(Request $request,$id){
        $update = Tickets::find($id);
        $update->ticket_Brief = $request->input('ticket_Brief');
        $update->ticket_Details = $request->input('ticket_Details');
        $update->review = $request->input('review');
        $update->rating = $request->input('rating');
        $update->update();
        return redirect('/Tickets') ->with('Message',"Ticket Updated");
    }
    public function delete($id){
        $tickets = Tickets::find($id);
        $tickets->delete();
        return redirect()->back()->with('message',"Ticket Deleted");
    }
    
}
