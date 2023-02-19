@extends('main')
@section('title','create')
@section('content')
<form  method="post" action="{{route('storejob')}}" style="width:80%; margin:0 auto">
    @csrf
    <div class="form-group">
      <label for="job_name">job name</label>
      <input type="text" class="form-control" id="job_name" name="job_name" placeholder="Enter job" value="{{old('job_name')}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      @error('job_name')
          <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="active">active status</label>
      <select name="job_active" id="job_active" class="form-control">
        <option value=""> select status</option>
        <option value="1">acitive</option>
        <option value="0"> not active</option>
      </select>
      @error('job_active')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Add Job</button>
  </form>
@endsection 
