<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medical;

class PanelController extends Controller
{
    //
     public function index()
        {

            return view('medical');

        }

    //
    public function add(request $request)
    {
    	$medical = new Medical;

    	$medical->name = $request->input('name');
    	$medical->passport = $request->input('passport');
    	$medical->dob = $request->input('dob');
    	$medical->gender = $request->input('gender');
    	$medical->inherited = $request->input('inherited');
    	$medical->allergy = $request->input('allergy');
    	$medical->mental = $request->input('mental');
    	$medical->stroke = $request->input('stroke');
    	$medical->diabetes = $request->input('diabetes');
    	$medical->hypertension = $request->input('hypertension');
    	$medical->vascular = $request->input('vascular');
    	$medical->ashtma = $request->input('ashtma');
    	$medical->aids = $request->input('aids');



    	$medical->save();

        return view('/medical');

    }

        public function view()
	{
		$medInfo = Medical::all();

 
		return view('viewmedical', compact('medInfo'));
	}

}
