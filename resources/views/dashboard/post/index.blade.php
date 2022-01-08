@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Posts publicados</h4>
</div>
<a href="{{ route("post.create") }}">
    <button class="btn btn-lg btn-outline-success">Crear nuevo post</button>
</a>
<div class="table-responsive">
    <table class="table mt-3 table-borderless table-striped">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posteado</th>
                <th style="min-width: 150px">Fecha creacion</th>
                <th style="min-width: 150px">Fecha actualizacion</th>
                <th class="text-center" style="min-width: 200px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->category->title}}</td>
                    <td>{{ $post->posted}}</td>
                    <td>{{ $post->created_at->diffForHumans()}}</td>
                    <td>{{ $post->updated_at->diffForHumans()}}</td>
                    <td class="text-center">
                        <a href="{{ route('post.show', $post->id) }}"><button class="btn btn-sm btn-outline-primary">Ver</button></a>
                        <a href="{{ route('post.edit', $post->id) }}"><button class="btn btn-sm btn-outline-success">Editar</button></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $post->id }}" class="btn btn-sm btn-outline-danger modal_delete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex">
    {{ $posts->links() }}
</div>
{{-- <form method="POST" action="{{ route('post.destroy', $post->id) }}" class="ms-1">
    @method('DELETE')
    @csrf
    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar</button>
</form> --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro de eliminar este post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <form method="POST" action="{{ route('post.destroy', 0) }}" data-action="{{ route('post.destroy', 0) }}" class="ms-1" id="form_delete">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar post</button>
          </form>
        </div>
      </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click','.modal_delete', function(){
            let id = $(this).attr('data-id');
            $('#deleteModalLabel').text('Eliminar el POST: '+id);
            let action = $('#form_delete').attr('data-action').slice(0,-1);
            $('#form_delete').attr('action', action + id)
            console.log(action)
        });
    });
</script>
@endsection
