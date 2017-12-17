<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class RegisterEmployee extends Controller
{
    //
    public function register()
    {
    	$employee = new Employee

    	$employee->name = $request->input('name');
    	$employee->name = $request->input('passport');
    	$employee->name = $request->input('dob');
    	$employee->name = $request->input('gender');
    	$employee->name = $request->input('email');
    	$employee->name = $request->input('password');
    	$employee->name = $request->input('address');

    	$employee->save();

        return redirect('/')->with('success', 'Folder Created');


    }
}
