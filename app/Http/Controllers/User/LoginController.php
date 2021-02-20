<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\AllLab;
use App\Order;
use Auth;
class LoginController extends Controller
{
    public function invoice($id){
        $depts = Department::all();
        $labs = AllLab::all();
        $invoice = Order::find($id);
        //$invoice = Order::where('user_id',Auth::user()->id)->get();
        return view('user.user.invoice',compact('depts','labs','invoice'));
    }
    public function dashboard(){
        $depts = Department::all();
        $labs = AllLab::all();
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('user.user.dashboard',compact('depts','labs','orders'));
    }
}