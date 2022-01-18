<div class="container">
  <div>
    <h5 class="card-title">Titolo: {{ $post->title }}</h5>
    <p class="card-text">Descrizione: {{ $post->description }}</p>
  </div>
  <div>
    <a class="btn btn-success mx-4" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
  </div>
  <form action="{{ route('admin.posts.destroy', $post->id) }}" method='post'>
    @csrf
    @method('DELETE')
    <input type='submit' value='Elimina' class='btn btn-danger my-3'>
  </form>
  
</div>