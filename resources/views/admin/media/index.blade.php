@extends('layouts.admin')


@section('content')


    @if(Session::has('delete_photo'))
    <div class="alert alert-danger">
    	{{Session('delete_photo')}}
    </div>
    @endif
 <div class="box box-primary">
           <div class="box-header with-border">
            <h3 class="box-title"> Media</h3>
        </div>
    <a href="{{route('media.create')}}" class="btn btn-app">
        <i class="fa fa-plus-circle"></i> add
    </a>
 <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
 	<tr>
 		<th>Id</th>
 		<th>Name</th>
 		<th>Create</th>
        <th></th>
 	</tr>
    @foreach($photos as $photo)
 	<tr>
 		<td>{{$photo->id}}</td>
            <td>
            <img height="50" src="{{$photo->file ? $photo->file : 'No photo users'}}">
        </td>
        <td>{{$photo->created_at}}</td>

        <td>
             <form method="post" action="{{ route('media.destroy' , $photo->id) }}">
                @csrf
               @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
 	</tr>
 	@endforeach
 	
 </table>


                     {{$photos->render()}}

</div>

@stop