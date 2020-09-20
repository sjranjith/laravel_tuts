@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">           
            <div class="card mt-5">
                <div class="card-header">Create Posts</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store')}}">
                        @csrf
                        @include('blog._form')                           
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
@endsection