@extends('dashboard.master')

@section('content')
<div class="mt-5 mb-5">
    <h4 class="display-5 fw-bold">Crear post</h4>
</div>
<form action="{{route("post.store")}}" method="POST">
    @include('dashboard.post._form')
</form>

@endsection
