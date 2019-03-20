@extends('layouts.blog-home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 

                 @if($posts)
                <!-- First Blog Post -->

                @foreach($posts as $post)
                <h2>
                    <a href="{{route('home.post' , $post->id)}}">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">{{$post->user->name}}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
                <hr>
                <img class="img-responsive" src="{{$post->photo['file']}}" alt="">
                <hr>
                <p>{!! str_limit($post->body , 100) !!}</p>
                <a class="btn btn-primary" href="{{route('home.post' , $post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                @endforeach
                @endif 

                
                    {{$posts->render()}}

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
