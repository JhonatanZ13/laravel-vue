@csrf
@include('dashboard.partials.validation-errors')
<div class="mb-3">
    <label for="Titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="Titulo" name="title" value="{{ old('title', $post->title) }}">
    {{-- @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror --}}
</div>
<div class="mb-3">
    <label for="url_limpia" class="form-label">Url limpia</label>
    <input type="text" class="form-control" id="url_limpia" name="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
</div>
<div class="mb-3">
    <label for="categoria" class="form-label">Categorias</label>
    <select name="category_id" id="categoria" class="form-select">
        @foreach ($categories as $title => $id)
            <option {{$post->category_id == $id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="posted" class="form-label">Posted</label>
    <select name="posted" id="posted" class="form-select">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted]);
    </select>
</div>
<div class="mb-3">
    <label class="form-label" for="contenido">Contenido</label>
    <textarea name="content" id="contenido" cols="30" rows="5" class="form-control">{{ old('content', $post->content) }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
