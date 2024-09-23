<!-- resources/views/ticket-create.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <h1>Criar Novo Ticket</h1>

    <form action="{{ route('ticket.create') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id" value="" required>
                <option></option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="situation_id">Situação</label>
            <select class="form-control" id="situation_id" value=1 name="situation_id" required disabled>
                @foreach ($situations as $situation)
                <option {{ $situation->name === 'Novo' ? 'selected' : '' }} value="{{ $situation->id }}">{{ $situation->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="situation_id" value="{{ old('situation_id', $situations->first()->id) }}">

        <div class="form-group">
            <label for="resolve_date">Data de resolução</label>
            <input type="date" class="form-control" id="resolve_date" name="resolve_date" disabled>
        </div>

        <div class="form-group">
            <label for="resolve_date_dead_line">Prazo de resolução</label>
            <input type="date" class="form-control" id="resolve_date_dead_line" name="resolve_date_dead_line" value="{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->addDays(3)->format('Y-m-d') }}" disabled>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Criar Ticket</button>
    </form>
</div>
@endsection