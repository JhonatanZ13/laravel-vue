@extends('dashboard.master')

@section('content')

<form action="{{route("post.update", $post->id)}}" method="POST">
    @method('PUT')
    @include('dashboard.post._form')
    <a href="{{ route('post.index') }}" class="btn btn-secondary">Volver</a>
</form>
<hr>
<form action="{{route("post.image", $post)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group">
        <input type="file" name="image" class="form-control">
        <button class="btn btn-outline-success" type="submit">Guardar imagen</button>
    </div>
</form>
@endsection
