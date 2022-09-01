@extends('layouts.app')
@section('content')
    <h1>Criar Produto</h1>
    <form action="{{ route('admin.products.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Nome Produto</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>

    <div class="form-group">
        <label for="body">Conteudo</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="price">Preço</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control">
    </div>

    <div class="form-group">
        <label for="store">Loja</label>
        <select type="text" name="store" id="store" class="form-control">
            @foreach ($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit"  class="btn btn-success btn-lg">Criar produto</button>
    </div>
</form>
@endsection