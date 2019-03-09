@extends('layouts.admin')

@section('content')
@extends('layouts.admin')

@section('content')

 admin/users
    @if(Session::has('delete_user'))
    <div class="alert alert-danger">
    	{{Session('delete_user')}}
    </div>
    @endif
 <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
 	<tr>
 		<th>Id</th>
 		<th>Owmer</th>
 		<th>catgerory</th>
 		<th>photo</th>
 		<th>title</th>
 		<th>body</th>
 	</tr>
    @foreach($posts as $post)
 	<tr>
 		<td>{{$post->id}}</td>
 		<td>{{$post->user['name'] }}</td>
 		<td>{{$post->category?$post->category['name']: 'Uncatgory'}}</td>
 		<td><img height="50" src="{{$post->photo? $post->photo['file'] :'not Photo'}}"></td>
 		<td><a href="{{route('posts.edit' , $post->id)}}">{{$post->title}}</a></td>
 		<td>{{$post->body}}</td>
 		<td></td>
 	</tr>
 	@endforeach
 	
 </table>

@stop
@stop