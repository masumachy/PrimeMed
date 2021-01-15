<?php

namespace App\Http\Controllers\User;
use App\Department;
use App\AllLab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderCategoryController extends Controller
{
    public function order_category(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.orderCategory.order_list',compact('depts','labs'));
    }
    public function medicine(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.orderCategory.medicine',compact('depts','labs'));
    }
}
