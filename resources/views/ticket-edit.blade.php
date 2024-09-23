<!-- resources/views/ticket-edit.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Ticket</h1>

    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $ticket->title }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id" value="{{ $ticket->category_id }}" required>
                @foreach ($categories as $category)
                <option {{ $ticket->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="situation_id">Situação</label>
            <select class="form-control" id="situation_id" name="situation_id" value="{{ $ticket->situation_id }}" required>
                @foreach ($situations as $situation)
                <option {{ $ticket->situation_id == $situation->id ? 'selected' : '' }} value="{{ $situation->id }}">{{ $situation->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="resolve_date">Data de resolução</label>
            <input type="date" class="form-control" id="resolve_date" name="resolve_date" value="{{ $ticket->resolve_date ? \Carbon\Carbon::parse($ticket->resolve_date)->format('Y-m-d') : null }}" disabled>
        </div>

        <div class="form-group">
            <label for="resolve_date_dead_line">Prazo de resolução</label>
            <input type="date" class="form-control" id="resolve_date_dead_line" name="resolve_date_dead_line" value="{{ \Carbon\Carbon::parse($ticket->resolve_date_deadline)->format('Y-m-d') }}" disabled>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $ticket->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
    </form>
</div>
@endsection