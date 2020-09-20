@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('posts.create')}}" class="btn btn-primary">Add</a>
            <div class="card mt-5">
                <div class="card-header">Posts</div>
                <div class="card-body">
                  <ul class="list-group">
                  @foreach ($posts as $post)
                  <li class="list-group-item">
                  <h5>{{ $post->title }}</h5>
                  <p>{{ $post->content }} <a href="{{ route('posts.edit', ['post' => $post->id ])}}">Edit</a></p>
                  <form method="POST"  action="{{ route('posts.destroy', ['post' => $post->id])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" />
                </form>
                  </li>
                  @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
