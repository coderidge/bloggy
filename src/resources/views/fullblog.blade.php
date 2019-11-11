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
                           <h1>Title - {{$post->title}}</h1>
                           <h2>Body - {{$post->body}}</h2>
                            <div>
                                <h2>Comments -</h2>
                                @forelse($post->BlogComments as $comments)
                                <h3><i>{{$comments->comment}}</i></h3>
                                @empty
                                <h6>No comments</h6>
                                @endforelse
                                <form method="post" action="{{route('comments.store')}}">
                                    {{ csrf_field() }}
                                    @method('POST')
                                    <div class="form-group row">
                                        <input type="hidden" value="{{$post->id}}" name="postid">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter your comment') }}</label>
                                        <div class="col-md-6">
                                            <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" autocomplete="comment" autofocus>
                                            @error('comment')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit Comment') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
