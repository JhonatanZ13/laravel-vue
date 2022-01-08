@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Usuarios creados</h4>
</div>
<a href="{{ route("user.create") }}">
    <button class="btn btn-lg btn-outline-success">Crear nuevo usuario</button>
</a>
<div class="table-responsive">
    <table class="table mt-3 table-borderless table-striped">
        <thead class="">
            <tr>
                <th>Id</th>
                <th style="min-width: 150px">Nombres</th>
                <th style="min-width: 150px">Email</th>
                <th style="min-width: 150px">Rol</th>
                <th style="min-width: 150px">Fecha actualizacion</th>
                <th class="text-center" style="min-width: 200px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name." ".$user->surname}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->rol->key}}</td>
                    <td>{{ $user->created_at->diffForHumans()}}</td>
                    <td>{{ $user->updated_at->diffForHumans()}}</td>
                    <td class="text-center">
                        <a href="{{ route('user.show', $user->id) }}"><button class="btn btn-sm btn-outline-primary">Ver</button></a>
                        <a href="{{ route('user.edit', $user->id) }}"><button class="btn btn-sm btn-outline-success">Editar</button></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $user->id }}" class="btn btn-sm btn-outline-danger modal_delete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex">
    {{--$categories->links()--}}
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro de eliminar este usuario?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <form method="POST" action="{{ route('user.destroy', 0) }}" data-action="{{ route('user.destroy', 0) }}" class="ms-1" id="form_delete">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar usuario</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
