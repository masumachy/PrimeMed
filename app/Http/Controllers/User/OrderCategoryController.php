<?php

namespace App\Http\Controllers\User;
use App\Department;
use App\ProductCategory;
use App\Product;
use App\AllLab;
use App\OrderFormPrescription;
use App\OrderWithName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderCategoryController extends Controller
{
    public function order_category(){
        $depts = Department::all();
        $productcat = ProductCategory::all();
        //$product = Product::all();
        $labs = AllLab::all();
        return view('user.orderCategory.order_list',compact('depts','labs','productcat'));
    } 
    public function order_form(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.orderCategory.order-form',compact('depts','labs'));
    }
    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobileNo' => 'required',
            'deliveryAddress' => 'required',
            'medicineQuantity' => 'required',
            'imageName' =>'required',
        ]);
        $order = new OrderFormPrescription();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->mobileNo = $request->mobileNo;
        $order->deliveryAddress = $request->deliveryAddress;
        $order->medicineQuantity = $request->medicineQuantity;
        if ($request -> hasFile('imageName')) {
            $extension = $request->imageName->extension();
            $fileName = str_slug($request ->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $order -> imageName = $fileName;
            $request -> imageName-> move('public/uploads/prescription',$fileName);
        }
        $order->save();
        return redirect()->back()->with(['masuma' => 'Your Order is confirmed!']);
    }
    public function saveName(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobileNo' => 'required',
            'deliveryAddress' => 'required',
            'medicineQuantity' => 'required',
        ]);
        $order = new OrderWithName();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->mobileNo = $request->mobileNo;
        $order->deliveryAddress = $request->deliveryAddress;
        $order->medicineQuantity = $request->medicineQuantity;
        $order->save();
        return redirect()->back()->with(['zannat' => 'Your Order is confirmed!']);
    }
    public function checkout_details(){
        $depts = Department::all();
        $labs = AllLab::all();
        return view('user.orderCategory.checkout-details',compact('depts','labs'));
    }
    public function all_product()
    {
        $products = Product::orderBy('group','ASC')->get();
        $data = [];
        foreach($products as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['group'] = $row->group;
            $rowData['imageName'] = $row->imageName;
            $rowData['dose'] = $row->dose;
            $rowData['picesPerPata'] = $row->picesPerPata;
            $rowData['price'] = $row->price;
            $rowData['quantity'] = $row->quantity;
            $data[] = $rowData;
        }
        return response()->json($data);
    }
//category wise
    public function category_wise($id)
    {
        $products = Product::orderBy('group','ASC')->where('product_categories_id',$id)->get();
        $data = [];
        foreach($products as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['group'] = $row->group;
            $rowData['imageName'] = $row->imageName;
            $rowData['dose'] = $row->dose;
            $rowData['picesPerPata'] = $row->picesPerPata;
            $rowData['price'] = $row->price;
            $rowData['quantity'] = $row->quantity;
            $data[] = $rowData;
        }
        return response()->json($data);
    }
    public function itemSearch(Request $request){
        $search = $request->search;
        $table = Product::orderBy('name', 'ASC')->search($search)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['group'] = $row->group;
            $rowData['imageName'] = $row->imageName;
            $rowData['dose'] = $row->dose;
            $rowData['picesPerPata'] = $row->picesPerPata;
            $rowData['price'] = $row->price;
            $rowData['quantity'] = $row->quantity;
            $data[] = $rowData;
        }
        return response()->json($data);
    }

}
