<?php

namespace App\Http\Controllers\Admin;
use App\OrderFormPrescription;
use App\OrderWithName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function prescription_list(){
        $order = OrderFormPrescription::paginate(10);
        return view('admin.order.prescription-list',compact('order'));
    }
    public function delete($id){
        $order = OrderFormPrescription::find($id);
        $path = public_path('uploads/prescription/'.$order->imageName);
        if(file_exists($path)){
            unlink($path);
        }
        $order->delete();
        return redirect()->to('admin/order-with-prescription');
    }
    public function medicine_name_list(){
        $order = OrderWithName::paginate(10);
        return view('admin.order.medicine-name-list',compact('order'));
    }
    public function deleteName($id){
        $order = OrderWithName::find($id);
        $order->delete();
        return redirect()->to('admin/order-with-name');
    }
}