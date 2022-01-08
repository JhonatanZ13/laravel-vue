@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Editar categoria</h4>
</div>
<form action="{{route("category.update", $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    @include('dashboard.partials.validation-errors')
    <div class="mb-3">
        <label for="Titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="Titulo" name="title" value="{{ old('title', $category->title) }}">
    </div>
    <div class="mb-3">
        <label for="url_limpia" class="form-label">Url limpia</label>
        <input type="text" class="form-control" id="url_limpia" name="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{ route('category.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection
