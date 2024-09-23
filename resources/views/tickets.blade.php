<!-- resources/views/tickets.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Lista de Tickets</h1>

        <a href="{{ route('ticket.form', 'create') }}" class="btn btn-primary mb-3">Criar Novo Ticket</a>

        @if($tickets->isEmpty())
            <p>Nenhum ticket encontrado.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->title }}</td>
                            <td>{{ $ticket->category->name }}</td>
                            <td>{{ $ticket->description }}</td>
                            <td>{{ $ticket->situation->name }}</td>
                            <td>
                                <a href="{{ route('ticket.update', $ticket->id) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('ticket.delete', $ticket->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Você tem certeza que deseja deletar?')">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
