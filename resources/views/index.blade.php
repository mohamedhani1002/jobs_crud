@extends('main')
@section('title','jobs')
@section('content')
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{session::get('success')}}
    </div>
@endif

<a href="{{route('createjob')}}" style="margin: 50px; color:aliceblue;" class="btn btn-small btn-info">add job</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">active</th>
        <th>actions</th>
        
      </tr>
    </thead>
    <tbody>
     @if(!@empty($data))
     @php $i =1; @endphp
     @foreach ($data as $info)
        <tr>
         <td> {{ $i }}</td>
         <td> {{ $info->name }}</td>   
         <td> @if ($info->active==1) active @else not active @endif</td>
         <td>
          <a class="btn btn-sm btn-primary" href="{{route('editjob',$info->id)}}">Edit</a>
          <a class="btn btn-sm btn-danger" href="{{route('deletejob',$info->id)}}">delete</a>

         </td>
        </tr> 
     @php $i++; @endphp
     @endforeach
     @else

     @endif 

    </tbody>
  </table>
  <br>
    {{$data->links()}}
@endsection
    
