<?php

namespace App\Http\Controllers;

//use App\ticket;
use Session;
use Illuminate\Http\Request;
use App\Categoria;
use App\Ticket;
use App\Priority;
use App\User;
use App\Http\Requests\ticketVal;
use App\Http\Requests\numberVal;

class TicketController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categorias = Categoria::all();
        $prioridades = Priority::all();

        return view("crearTicket", compact("tickets", "categorias", "prioridades"));
    }

    public function create(ticketVal $request){
        $ticket = new Ticket;
        
        
        $ticket->title = $request->titulo;
        $ticket->mensaje = $request->mensaje;
        $ticket->priority_id = $request->prioridad;
        $ticket->categoria_id = $request->categoria;
        $ticket->user_id = auth()->user()->id;
        
        $ticket->save();

        $mensaje = "Se creo el ticket '".$request->titulo."' exitosamente.";
        
        Session::flash('mensaje', $mensaje);

        return redirect("my_tickets");
    }

    public function misTickets(){
        $tickets = Ticket::all()->where('user_id', auth()->user()->id);
        
        $categorias = Categoria::all();
        $prioridades = Priority::all();
        
        return view("mistickets", compact("tickets", "categorias", "prioridades"));
    }
    public function miTicket($id){

        $tickets = Ticket::all()->where('id', $id);

        $categorias = Categoria::all();
        $prioridades = Priority::all();
        
        //var_dump($tickets);
        return view("miTicket", compact("tickets", "categorias", "prioridades"));
    }

    public function adminIndex(){
        $tickets = Ticket::all();
        $categorias = Categoria::all();
        $prioridades = Priority::all();
        $users = User::all();
        
        return view("ticketsAdmin", compact("tickets", "categorias", "prioridades", "users"));
    }

    public function close_ticket($ticket_id){
        //modificar el dato modificado

        $ticket = Ticket::find($ticket_id);
        $ticket->status = true;
        $ticket->save();

        return redirect("/admin/tickets");
    }
}
