<form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
  @csrf
  @method('PUT')
  
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title"
    value="{{ $post->title }}">
  </div>

  <div class="form-group">
    <label class="form-label">Categoria</label>
    <select name="category_id" class="form-control">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description"
    value="{{ $post->description }}">
  </div>
  <input class="btn btn-success" type="submit" value="invia">
</form>