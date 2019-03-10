@extends('layouts.admin')

@section('content')

    @if(Session::has('delete_post'))
    <div class="alert alert-danger">
    	{{Session('delete_post')}}
    </div>
    @endif

 <div class="box box-primary">
           <div class="box-header with-border">
            <h3 class="box-title">New categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('categories.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add new categories</button>
            </div>
        </form>
    <hr size="20" style="color: black;">


 <table id="example2" class="table table-striped" role="grid" aria-describedby="example2_info">
 	<tr>
 		<th>Id</th>
 		<th>Name</th>
 	</tr>
    @foreach($categories as $categorie)
 	<tr>
 		<td>{{$categorie->id}}</td>
 		<td><a href="{{route('categories.edit' , $categorie->id)}}">{{$categorie->name }} </a></td>
 		
 	</tr>
 	@endforeach
 	
 </table>
    </div>

@stop
