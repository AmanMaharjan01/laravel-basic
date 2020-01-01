@extends('template')

@section('body')
<div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <form method="post" action="{{ url('students') }}">
      @csrf
      <div class="form-group @error('name') has-error @enderror">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value=" {{ old('name') }}">
        @error('name')
          <p class="alert-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-group @error('address') has-error @enderror">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value=" {{ old('address') }}">
        @error('address')
          <p class="alert-danger">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
  <div class="col-md-3">

  </div>
</div>

@endsection