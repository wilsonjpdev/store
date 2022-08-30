@extends('layouts.app')
@section('content')
    <h1>Criar Loja</h1>
    <form action="{{ route('admin.stores.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Nome Loja</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>

    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" name="phone" id="phone" class="form-control">
    </div>

    <div class="form-group">
        <label for="mobile_phone">Celular/Watsapp</label>
        <input type="text" name="mobile_phone" id="mobile_phone" class="form-control">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control">
    </div>

    <div class="form-group">
        <label for="user">Usuário</label>
        <select type="text" name="user" id="user" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit"  class="btn btn-success btn-lg">Criar Loja</button>
    </div>
</form>
@endsection