@extends('main')
@section('title','edit')
@section('content')
<form  method="post" action="{{route('updatejob',$data['id'])}}" style="width:80%; margin:0 auto">
    @csrf
    <div class="form-group">
      <label for="job_name">job name</label>
      <input type="text" class="form-control" id="job_name" name="job_name" placeholder="Enter job" value="{{old('job_name',$data['name'])}}">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      @error('job_name')
          <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="active">active status</label>
      <select name="job_active" id="job_active" class="form-control">
        <option value=""> select status</option>
        <option @if (old('job_active',$data['active'])==1) selected @endif value="1">active</option>
        <option @if (old('job_active',$data['active'])==0 and old('job_active',$data['active'])==0) selected @endif value="0"> not active</option>
      </select>
      @error('job_active')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">edit Job</button>
  </form>
@endsection 
