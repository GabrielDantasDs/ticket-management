<?php

namespace App\Http\Controllers;

use App\Classes\Ticket;
use App\Models\Category;
use App\Models\Situation;
use App\Models\Ticket as ModelsTicket;
use Illuminate\Http\Request;

class TicketController {

    public function create(Request $request) {
        $ticket = new Ticket($request->title, $request->category_id, $request->situation_id, $request->description);
        $ticket->save(new ModelsTicket());

        return $this->index($request);
    }

    public function read(Request $request, $id) {
        $ticket = ModelsTicket::where('id', $id)->firstOrFail();
        $categories = Category::all();
        $situations = Situation::all();

        return view('ticket-edit', ['ticket' => $ticket, 'categories' => $categories, 'situations' => $situations]);
    }

    public function update(Request $request, $id) {
        $ticket = new Ticket($request->title, $request->category_id, $request->situation_id, $request->description);
        $ticket_model = ModelsTicket::where('id', $id)->firstOrFail();
        $situation = Situation::where('id', $request->situation_id)->firstOrFail();

        if ($situation->name == 'Resolvido') {
            $ticket->resolve();
        }

        $ticket->save($ticket_model);

        return $this->index($request);
    }

    public function delete(Request $request, $id) {
        $ticket = ModelsTicket::where('id', $id)->delete();

        return $this->index($request);
    }

    public function index(Request $request) {
        $tickets = ModelsTicket::with('situation', 'category')->get();

        return view('tickets', ['tickets' => $tickets]);
    }

    public function form(Request $request, $operation) {
        $categories = Category::all();
        $situations = Situation::all();

        return view('ticket-create', ['categories' => $categories, 'situations' => $situations]);
    }
}
