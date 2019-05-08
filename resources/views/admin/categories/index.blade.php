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
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                    Launch Info Modal
                </button>
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



    <div class="modal modal-info fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Info Modal</h4>
                </div>
                <form id="addform">
                <div class="modal-body">
                    @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                            </div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline">Save Data</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
        $(document).ready(function () {
                $('#addform').on('submit' , function(e){
                    e.preventDefault();
                    $.ajax({
                        type : "POST",
                        url : "/admin/categories" ,
                        data : $('#addform').serialize(),
                        success : function(response){
                            $('#modal-info').modal('hide');
                            alert("add succed");
                            console.log(response);
                            },
                        error: function(e){
                            console.log(e);
                            alert("Error !!");
                        }
                    })
                });

        });

    </script>

@stop
