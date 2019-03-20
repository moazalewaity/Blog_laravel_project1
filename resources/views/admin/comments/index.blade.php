@extends('layouts.admin')

@section('content')

 <div class="box box-primary">
           <div class="box-header with-border">
            <h3 class="box-title"> Comment</h3>
        </div>
    
 <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
 	<tr>
 		<th>Id</th>
 		<th>Author</th>
 		<th>Email</th>
 		<th>Body</th>
 		<th>title</th>
 	</tr>
    @foreach($comments as $comment)
 	<tr>
 		<td>{{$comment->id}}</td>
 		<td>{{$comment->author }}</td>
 		<td>{{$comment->email}}</td>
 		<td>{{$comment->body}}</td>
 		<td>
 			<a target="_new" href="{{ route('home.post' , $comment->post->id)}}">View Post</a>
 		</td>
 		<td>
 			@if($comment->is_acive == 1 )
 			<form action="{{route('comment.update' , $comment->id)}}" method="post">
 				@csrf
 				@method('PATCH')
 				<input type="hidden" name="is_active" value="0" />
 				<button type="submit" class="btn btn-default">un-approve</button>
 			</form>
 			@else
 			<form action="{{route('comment.update' ,$comment->id)}}" method="post">
 				@csrf
 				@method('PATCH')
 				<input type="hidden" name="is_acive" value="1">
 				<button type="submit" class="btn btn-info">Approve</button>
 			</form>

 			@endif
                  &nbsp;
 			<form action="{{route('comment.destroy' ,$comment->id)}}" method="post">
 				@csrf
 				@method('DELETE')
				<button type="submit" class="btn btn-danger">DELETE</button>
 			</form>
 		</td>
 	</tr>
 	@endforeach
 	
 </table>
</div>

@stop
