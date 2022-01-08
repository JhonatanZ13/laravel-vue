@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Ver categoria</h4>
</div>
<div class="mb-3">
    <label for="Titulo" class="form-label">Titulo</label>
    <input readonly type="text" class="form-control" id="Titulo" name="title" value="{{ old('title', $category->title) }}">
</div>
<div class="mb-3">
    <label for="url_limpia" class="form-label">Url limpia</label>
    <input readonly type="text" class="form-control" id="url_limpia" name="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
</div>
<a href="{{ route('category.index') }}" class="btn btn-secondary">Volver</a>
@endsection
