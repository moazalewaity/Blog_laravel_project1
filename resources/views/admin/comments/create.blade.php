

@extends('layouts.admin')

@section('content')

 admin/users

 <h1>create new Post </h1>

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input value="{{old('title')}}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">category_id:  </label>
                    <select name="category_id">
                    	@foreach($categorys as $category)
                    	<option value="{{$category->id}}">{{$category->name}}</option>
                    	@endforeach
                    </select>
                </div>
                 
                   <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input value="{{old('photo_id')}}" name="photo_id" type="file" class="form-control" id="photo_id" placeholder="Enter Email">


                 <div class="form-group">
                    <label for="exampleInputEmail1">Descrpition</label>
                    <textarea rows="5" name="body"></textarea>

                     </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add new Post</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/admin/posts'">Cansel</button>
            </div>
        </form>
        @include('layouts.errors')


    </div>

@stop