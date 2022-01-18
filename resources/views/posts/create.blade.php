<header>
  <h1 class="text-center text-danger m-5">Create New Post</h1>
</header>

<form action="{{ route('admin.posts.store') }}" method="POST">
  @csrf
  
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="text-center mb-3">
    <button type="submit" class="btn btn-success btn-submit">Submit</button>
  </div>
</form>