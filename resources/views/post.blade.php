@extends('layouts.blog-home')


@section('content')
<!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$post->user['name']}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{$post->photo['file']}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">
                	{!! $post->body !!}
                </p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->

    @if(Session::has('comment_msg'))
    <div class="alert alert-danger">
    	{{Session('comment_msg')}}
    </div>
    @endif

     @if(Auth::check())
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form  method="post" action="{{route('comment.store')}}">
                    	@csrf
                        <div class="form-group">
                       <input type="hidden" name="post_id" value="{{$post->id}}">

                            <textarea name="body" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


    @endif

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                @if(count($comments)>0)
                @foreach($comments as $c)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img width="64" height="64" class="media-object" src="{{url('/')}}/images/{{$c->photo}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                        	{{$c->author}}
                            <small>{{$c->created_at}}</small>
                        	
                        </h4>
                        {{$c->body}}
                    </div>
                </div>
                @endforeach
                @endif

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>
@endsection