<!-- resources/views/tickets.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Métricas mensais de {{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->startOfMonth()->format('d/m/Y')}} até {{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->endOfMonth()->format('m/d/Y')}}</h1>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Total de tickets</h5>
                      <p class="card-text">{{ $total_tickets }}</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Porcentagem de resolvidos</h5>
                      <p class="card-text">{{ $porcentagem_resolvidos }} %</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Porcentagem de pendentes</h5>
                      <p class="card-text">{{ $porcentagem_pendentes }} %</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Porcentagem de novos</h5>
                      <p class="card-text">{{ $porcentagem_novos }} %</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
