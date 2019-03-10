@extends('layouts.admin')

@section('content')
 <div class="box box-primary">
           <div class="box-header with-border">
            <h3 class="box-title"> Users</h3>
        </div>
    @if(Session::has('delete_user'))
    <div class="alert alert-danger">
    	{{Session('delete_user')}}
    </div>
    @endif

       <a href="{{route('users.create')}}" class="btn btn-app">
        <i class="fa fa-plus-circle"></i> add
    </a>
 <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
 	<tr>
 		<th>Id</th>
 		<th>Photo</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Role</th>
 		<th>Active</th>
 		<th>Ation</th>
 	</tr>
    @foreach($users as $user)
 	<tr>
 		<td>{{$user->id}}</td>
 		<td>
 			<img height="50" src="{{$user->photo?$user->photo['file']:'No photo users'}}">
 			
 		</td>
 		<td><a href="{{route('users.edit' , $user->id)}}">{{$user->name}}</a></td>
 		<td>{{$user->email}}</td>
 		<td>{{$user->role['name']}}</td>
 		<td>{{$user->is_Active == 1 ? 'active': 'not active'}}</td>
 		<td></td>
 	</tr>
 	@endforeach
 	
 </table>
</div>

@stop