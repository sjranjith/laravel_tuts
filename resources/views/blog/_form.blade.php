<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="title" class="form-control"
     value="{{ old('title', $post->title ?? null)}}"
     id="title" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input name="content" type="text" class="form-control" value="{{ old('content', $post->content ?? null)}}"
    id="content" placeholder="content">
  </div>
  @if ($errors->any())
  <div style="color:red">
      <ul>
         @foreach ($errors->all() as $error)
              <li>{{ $error}}</li>
          @endforeach
      </ul>
  </div>
@endif