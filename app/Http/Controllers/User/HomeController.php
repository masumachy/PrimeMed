<?php

namespace App\Http\Controllers\User;
use App\Department;
use App\ProductCategory;
use App\AllLab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.home',compact('depts','labs'));
    }
}
