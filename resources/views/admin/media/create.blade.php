

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
        <form class="dropzone" method="post" action="{{ route('media.store') }}">
            @csrf
           

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