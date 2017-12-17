<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{

    public function index()
        {     

            return view('register');

        }
    //
    public function register(request $request)
    {
    	$employee = new Employee;

    	$employee->name = $request->input('name');
    	$employee->passport = $request->input('passport');
    	$employee->dob = $request->input('dob');
    	$employee->gender = $request->input('gender');
    	$employee->address = $request->input('address');

    	$employee->save();

        return view('register');

    }

}
