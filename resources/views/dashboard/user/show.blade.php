@extends('dashboard.master')

@section('content')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input readonly type="text" class="form-control" id="nombre" name="name" value="{{ old('name', $user->name) }}">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Apellido</label>
        <input readonly type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $user->surname) }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input readonly type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input readonly type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
    </div>
<a href="{{ route('user.index') }}" class="btn btn-secondary">Volver</a>
@endsection
