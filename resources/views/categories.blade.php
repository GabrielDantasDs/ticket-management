<!-- resources/views/tickets.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h1>Lista de Categorias</h1>

        <a href="{{ route('category.form') }}" class="btn btn-primary mb-3">Criar Nova Categoria</a>

        @if($categories->isEmpty())
            <p>Nenhuma categoria encontrado.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.update', $category->id) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
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
