@extends('layouts.app')



@section('content')
<div class="container">
  <div>
    <h5 class="card-title">Titolo: {{ $post->title }}</h5>
    <h5 class="card-text">Descrizione: {{ $post->description }}</h5>
  </div>

  <div class="form-group">
    <label class="for-label">Categoria</label>
    {{ $post->category->name }}
  </div>

  <div class="form-group">
    <label class="for-label">Tag</label>
    @foreach ($post->tags as $tag)
        <span class="badge bg-success">{{ $tag->name }}</span>
    @endforeach
  </div>

  <div class="d-flex ">
    <div class="mr-3">
      <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
    </div>
    <form action="{{ route('admin.posts.destroy', $post->id) }}" method='post'>
      @csrf
      @method('DELETE')
      <input type='submit' value='Elimina' class='btn btn-danger'>
    </form>
    <div class="ml-3">
      <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">indietro</a>
    </div>
  </div>
  
</div>
@endsection
