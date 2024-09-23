<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Carbon\Carbon;

class DashboardController {
    function index() {
        $tickets = Ticket::whereBetween('created_at', [Carbon::parse(Carbon::now())->startOfMonth()->format('Y-m-d'), Carbon::parse(Carbon::now())->endOfMonth()->format('Y-m-d')])->get()->count();

        $tickets_resolvidos = Ticket::whereHas('situation', function ($q) {
            $q->where('name', 'Resolvido');
        })->whereBetween('created_at', [Carbon::parse(Carbon::now())->startOfMonth()->format('Y-m-d'), Carbon::parse(Carbon::now())->endOfMonth()->format('Y-m-d')])->get()->count();

        $tickets_pendentes = Ticket::whereHas('situation', function ($q) {
            $q->where('name', 'Pendente');
        })->whereBetween('created_at', [Carbon::parse(Carbon::now())->startOfMonth()->format('Y-m-d'), Carbon::parse(Carbon::now())->endOfMonth()->format('Y-m-d')])->get()->count();

        $tickets_novos = Ticket::whereHas('situation', function ($q) {
            $q->where('name', 'Novo');
        })->whereBetween('created_at', [Carbon::parse(Carbon::now())->startOfMonth()->format('Y-m-d'), Carbon::parse(Carbon::now())->endOfMonth()->format('Y-m-d')])->get()->count();

        $porcentagem_resolvidos = round(floatval(($tickets_resolvidos / $tickets) * 100), 2);

        $porcentagem_pendentes = round(floatval(($tickets_pendentes / $tickets) * 100), 2);

        $porcentagem_novos = round(floatval(($tickets_novos / $tickets) * 100), 2);

        return view(
            'dashboard',
            [
                'total_tickets' => $tickets,
                'porcentagem_resolvidos' => $porcentagem_resolvidos,
                'porcentagem_pendentes' => $porcentagem_pendentes,
                'porcentagem_novos' => $porcentagem_novos
            ]
        );
    }
}
