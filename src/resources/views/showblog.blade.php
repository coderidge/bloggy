@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Blogs</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($posts as $post)
                            <div>
                                <h1>Title: {{$post->title}}</h1>
                                <h2>Body: {{$post->body}}</h2>
                                <a href="/blogs/{{$post->id}}/edit">EDIT</a>
                                <form action="{{route('blogs.destroy', ['id' => $post->id])}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button>Delete Blog</button>
                                </form>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

