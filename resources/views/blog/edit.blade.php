@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">           
            <div class="card mt-5">
                <div class="card-header">Update Posts</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', ['post' => $post->id])}}">
                        @csrf
                        @method('PUT')
                            @include('blog._form')                          
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection