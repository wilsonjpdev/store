@extends('layouts.app')
@section('content')
    <a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-success">Criar Produto</a>

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>R${{ $product->price }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection