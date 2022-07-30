<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use Session;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    //
    function index()
    {
        $data= Vendor::all();
        return view('vendorlist', ['vendors'=>$data]);
    }
    function addvendor(Request $req)
    {

        if($req->session()->has('user'))
        {

            $vendor= new Vendor;
            $vendor->name=$req->name;
            $vendor->user_id=$req->session()->get('user')['id'];
            $vendor->status=$req->status;
            $vendor->product_category=$req->product_category;
            $vendor->location=$req->location;
            $vendor->email=$req->email;
            $vendor->address=$req->address;
            $vendor->save();
            return redirect('/vendorlist');
        }
        else
        {
            return redirect('/login');
        }

    }
    /*function vendorList()
    {
        $userId=Session::get('user')['id'];
        $products= DB::table('vendors')
        ->join('products','vendor.product_category','=','products.category')
        ->where('vendors.user_id',$userId)
        ->select('products.*','vendors.id as vendor_id')
        ->get();

        return view('vendorlist',['products'=>$products]);
    }*/
    function vendorDetail($id)
    {
       $data =Vendor::find($id);
       return view('vendordetails', ['vendor'=>$data]);
    }
    function list()
    {
        $data= Vendor::all();
        return view('listvendor',['vendors'=>$data]);
    }
    function delete($id)
    {
        $data=Vendor::find($id);
        $data->delete();
        return redirect('listvendor');
    }
    function showdataV($id)
    {
        $data= Vendor::find($id);
        return view('editvendor', ['data'=>$data]);
    }
    function updateV(Request $req)
    {
        $data= Vendor::find($req->id);
        $data->name=$req->name;
        $data->user_id=$req->user_id;
        $data->status=$req->status;
        $data->product_category=$req->product_category;
        $data->location=$req->location;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('listvendor');
    }
}
