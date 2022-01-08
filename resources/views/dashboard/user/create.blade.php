@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Crear usuarios</h4>
</div>
<form action="{{route("user.store")}}" method="POST" autocomplete="off">
    @csrf
    @include('dashboard.partials.validation-errors')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection
