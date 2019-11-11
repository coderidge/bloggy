@extends('layouts.app')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-className">
            {{session('message')}}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blog</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                        @endif
                    @foreach($posts as $post)
                        <div>
                            <h1><a href="/blogs/{{$post->id}}">Title - {{$post->title}}</a></h1>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
