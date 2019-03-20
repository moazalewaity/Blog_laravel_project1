@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Setting</h3>
  </div>
  <!-- /.box-header -->

     @if(Session::has('success'))
    <div class="alert alert-danger">
      {{Session('success')}}
    </div>
    @endif
  <div class="box-body">
     <form method="post" action="{{ url('admin/settings') }}" enctype="multipart/form-data">
      @csrf
        <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">sitename_ar </label>
        <input value="{{ $Setting->sitename_ar }}" name="sitename_ar" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter sitename_ar">
        </div>
      </div>
     
    <div class="form-group">

      <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">sitename_en </label>
        <input value="{{$Setting->sitename_en }}" name="sitename_en" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter sitename_en">
        </div>
    </div>
    </div>

    <div class="form-group">
      <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">email </label>
        <input value="{{ $Setting->email }}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
      </div>
    </div>
    <div class="form-group">

       <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">logo </label>
        <input value="{{$Setting->logo}}" name="logo" type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter logo">
        </div>
      </div>
    </div>


    <div class="form-group">

       <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">icon </label>
        <input value="{{$Setting->icon}}" name="icon" type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter icon">
        </div>
      </div>
    </div>

    <div class="form-group">

      <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">description </label>
        <input value="{{$Setting->description}}" name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
        </div>
      </div>
    </div>

    <div class="form-group">
        <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">keywords </label>
        <input value="{{$Setting->keywords }}" name="keywords" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter keywords">
        </div>
      </div>
    </div>


     <div class="form-group">
       <div class="box-body">
         <div class="form-group">
        <label for="exampleInputEmail1">status </label>
        <select name="status">
          <option value="1">Open</option>
          <option value="0">Close</option>
        </select>
        </div>
      </div>
    </div>

     <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/admin'">Cansel</button>
            </div>
          </form>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection