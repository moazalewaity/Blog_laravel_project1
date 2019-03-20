
@extends('layouts.admin')

@section('content')

 admin/users

 <h1>create new user </h1>

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit User</h3>
        </div>
        <div class="col-sm-3">
            <img height="150" src="{{$user->photo['file']}}" alt="username" />
        </div>
        <br>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('users.update' , $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username </label>
                    <input value="{{$user->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input value="{{$user->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                </div>


                 <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                     <select name="role_id">
                     	<option>Select option</option>
                     	@foreach($roles as $role)
                    	<option value="{{ $role->id}}" <?php if($user->role_id == $role->id){ echo "selected"; }?> >
                        {{ $role->name}}
                        </option>
                    	@endforeach
                    </select>
                     </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">status: </label>
                    <select name="is_Active">
                    	<option value="1"  <?php if($user->is_Acive == 1){ echo "selected"; }?>>Active</option>
                    	<option value="2"  <?php if($user->is_Acive == 2){ echo "selected"; }?>>Not Active</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input value="{{old('photo_id')}}" name="photo_id" type="file" class="form-control" id="photo_id" placeholder="Enter Email">

                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                 <input value="{{old('password')}}" name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">

                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                        </form>

                <form method="post" action="{{ route('users.destroy' , $user->id) }}">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger"">Delete</button>
            </form>
            </div>
        @include('layouts.errors')


    </div>

@stop