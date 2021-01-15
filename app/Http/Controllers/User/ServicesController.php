<?php

namespace App\Http\Controllers\User;
use App\Department;
use App\AllLab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function services(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.otherService.services',compact('depts','labs'));
    }
}
