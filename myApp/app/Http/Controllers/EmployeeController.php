<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $emps = Employee::all();
        return view('employee.index', compact('emps'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function save(Request  $request)
    {
        $this -> validate($request,['name' => 'required',
        'email' => 'required',
        'password' =>'required']);
        Employee:: create
        ([
            'name' =>$request ->name,'email' =>$request ->email,'password' =>$request ->password
        ]);
        
        return redirect()->back()->with('status','Employee successfully created');
    }
    public  function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit',compact('employee'));
        
    }
    public function update(Request $request, $id)
    {
        $this ->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'password' =>'required'
        ]);
         $emp = Employee::find($id);
         $emp->name = $request->name;
         $emp->email= $request->email;
         $emp->password=$request->pasword;
         $emp->save();
       return redirect()->back()->with('status','Employee successfully updated');
    }
    public function delete($id)
    {   $emp = Employee::find($id);
        $emp->delete();
        return  redirect()->back()->with('status','Employee successfully Deleted');
       
    }
}
