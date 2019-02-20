@extends('layouts.app')
@section('title','Add Employee')

@section('content')

<div class="card">
    <div class="card-body">
        <h1> EmployeeList</h1>

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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
    
  </thead>
 
       <tbody>
     @foreach ($emps as $emp)
      <tr>
      <th scope="row">{{$emp->id}}</th>
      <td>{{$emp->name}}</td>
      <td>{{$emp->email}}</td>
      <td>{{$emp->password}}</td>
      <td><a href="{{url('employee/edit', $emp->id)}}">Edit </a>|| 
      <form id ="delete-form-{{$emp->id}}" method ="post" action ="{{url('employee/delete',$emp->id)}}">
 {{csrf_field()}}
{{method_field('DELETE')}}

</form>
<a href="" onclick = "
if(confirm('Are your sure  want to delete this'))
{
	event.preventDefault();
	document.getElementById('delete-form-{{$emp->id}}').submit();
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