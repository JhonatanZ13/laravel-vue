@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Categorias creadas</h4>
</div>
<a href="{{ route("category.create") }}">
    <button class="btn btn-lg btn-outline-success">Crear nueva categoria</button>
</a>
<div class="table-responsive">
    <table class="table mt-3 table-borderless table-striped">
        <thead class="">
            <tr>
                <th>Id</th>
                <th style="min-width: 150px">Titulo</th>
                <th style="min-width: 150px">Fecha creacion</th>
                <th style="min-width: 150px">Fecha actualizacion</th>
                <th class="text-center" style="min-width: 200px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->title}}</td>
                    <td>{{ $category->created_at->diffForHumans()}}</td>
                    <td>{{ $category->updated_at->diffForHumans()}}</td>
                    <td class="text-center">
                        <a href="{{ route('category.show', $category->id) }}"><button class="btn btn-sm btn-outline-primary">Ver</button></a>
                        <a href="{{ route('category.edit', $category->id) }}"><button class="btn btn-sm btn-outline-success">Editar</button></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $category->id }}" class="btn btn-sm btn-outline-danger modal_delete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex">
    {{$categories->links()}}
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro de eliminar esta categoria?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <form method="POST" action="{{ route('category.destroy', 0) }}" data-action="{{ route('category.destroy', 0) }}" class="ms-1" id="form_delete">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar categoria</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
