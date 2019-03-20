

@extends('layouts.admin')

@section('content')


 <h1>Edit Post </h1>

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit </h3>
        </div>

         <div class="col-sm-3">
            <img height="100" src="{{$post->photo['file']}}" alt="post" />
        </div>
        <br>
        <hr>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('posts.update' , $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input value="{{$post->title }}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">category_id:  </label>
                    <select name="category_id">
                    	@foreach($categorys as $category)
                    	<option value="{{$category->id}}" <?php if($post->category_id == $category->id){"selected";}?> >{{$category->name}}</option>
                    	@endforeach
                    </select>
                </div>
                 
                   <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input value="{{old('photo_id')}}" name="photo_id" type="file" class="form-control" id="photo_id" placeholder="Enter Email">


                 <div class="form-group">
                    <label for="exampleInputEmail1">Descrpition</label>
                    <textarea rows="5" name="body">
                        {{$post->body}}
                    </textarea>

                     </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit Post</button>
                  <form method="post" action="{{ route('posts.destroy' , $post->id) }}">
                    @method('DELETE')
                <button type="submit" class="btn btn-danger"">Delete</button>
            </form>
            </div>
        </form>
        @include('layouts.errors')


    </div>

@stop