<!-- resources/views/ticket-create.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <h1>Criar Nova Categoria</h1>

    <form action="{{ route('category.create') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Criar categoria</button>
    </form>
</div>
@endsection