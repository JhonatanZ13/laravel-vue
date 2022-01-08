@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Ver post</h4>
</div>
<div class="mb-3">
    <label for="Titulo" class="form-label">Titulo</label>
    <input readonly type="text" class="form-control" id="Titulo" name="title" value="{{$post->title }}">
    {{-- @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror --}}
</div>
<div class="mb-3">
    <label for="url_limpia" class="form-label">Url limpia</label>
    <input readonly type="text" class="form-control" id="url_limpia" name="url_clean" value="{{ $post->url_clean }}">
</div>
<div class="mb-3">
    <label class="form-label" for="contenido">Contenido</label>
    <textarea readonly name="content" id="contenido" cols="30" rows="5" class="form-control">{{ $post->content }}</textarea>
</div>

<a href="{{ route('post.index') }}" class="btn btn-secondary">Volver</a>

@endsection
