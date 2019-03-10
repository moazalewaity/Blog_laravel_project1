


@extends('layouts.admin')

@section('content')


 <h1>create new categories </h1>

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('categories.update' , $cat->id) }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input value="{{$cat->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">edit new categories</button>
                   <form method="post" action="{{ route('categories.destroy' , $cat->id) }}">
                    @method('DELETE')
                <button type="submit" class="btn btn-danger"">Delete</button>
            </form>
            </div>
        </form>
        @include('layouts.errors')


    </div>

@stop