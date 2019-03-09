
@extends('layouts.admin')

@section('content')

 admin/users

 <h1>create new user </h1>

 <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username </label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input value="{{old('email')}}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                </div>


                 <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                     <select name="role_id">
                     	<option>Select option</option>
                     	@foreach($roles as $role)
                    	<option value="{{ $role->id}}">{{ $role->name}}</option>
                    	@endforeach
                    </select>
                     </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">status: </label>
                    <select name="is_Active">
                    	<option value="1">Active</option>
                    	<option value="2">Not Active</option>
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
                <button type="submit" class="btn btn-primary">Add new category</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/admin/users'">Cansel</button>
            </div>
        </form>
        @include('layouts.errors')


    </div>

@stop