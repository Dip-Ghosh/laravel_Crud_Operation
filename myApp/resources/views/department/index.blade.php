@extends('layouts.app')
@section('title','Add Department')

@section('content')

<div class="card">
    <div class="card-body">
        <h1> Department List</h1>

    </div>
    @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}

                </div>
    @endif

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
    
  </thead>
 
       <tbody>
     @foreach ($departments as $department)
      <tr>
      <th scope="row">{{$department->id}}</th>
      <td>{{$department->title}}</td>
      <td><a href="{{url('department/edit', $department->id)}}">Edit </a>|| 
      <form id ="delete-form-{{$department->id}}" method ="post" action ="{{url('department/delete',$department->id)}}">
 {{csrf_field()}}
{{method_field('DELETE')}}

</form>
<a href="" onclick = "
if(confirm('Are your sure  want to delete this'))
{
	event.preventDefault();
	document.getElementById('delete-form-{{$department->id}}').submit();
}
else
{
event.preventDefault();
}"
> Delete </a>
      
      </td>
     
    </tr>
    @endforeach
 
  </tbody>
  
</table>

@endsection