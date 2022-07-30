<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use App\Order;
use App\Rating;
use App\Checklist;
use Session;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        return view('product', ['products'=>$data]);
    }
    function detail($id)
    {
       $data =Product::find($id);
       return view('detail', ['product'=>$data]);
    }
    function search(Request $req)
    {
        $data =Product::
         where('name', 'like', '%'.$req->input('query').'%')
         ->get();
         return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('cartlist');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {

        if(session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
        }
        else
        {
            return redirect('/login');
        }
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
         $total = $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
            Notification::send($userId, $order);
        }
        $req->input();

        return redirect('/');
    }
    function myOrders()
    {
        if(session()->has('user'))
        {
            $userId=Session::get('user')['id'];

            $orders= DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

            return view('myorders',['orders'=>$orders]);
        }
        else
        {
            return redirect('/login');
        }


    }
    function addnewproduct(Request $req)
    {
        if($req->session()->has('user'))
        {
            $product= new Product;
            $product->name=$req->name;
            $product->price=$req->price;
            $product->vendor_id=$req->session()->get('user')['id'];
            $product->vendor_category=$req->vendor_category;
            $product->description=$req->description;
            $product->vendor=$req->vendor;
            $product->gallery=$req->gallery;
            $product->save();
        return redirect('/product');
        }
        else
        {
            return redirect('/login');
        }
    }
    function deleteProduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('product');
    }
    function listP()
    {
        $data= Product::all();
        return view('listproducts',['products'=>$data]);
    }
    function deleteP($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('listproducts');
    }
    function showData($id)
    {
        $data= Product::find($id);
        return view('editproducts', ['data'=>$data]);
    }
    function upDate(Request $req)
    {
        $data= Product::find($req->id);
        $data->name=$req->name;
        $data->price=$req->price;
        $data->vendor_id=$req->vendor_id;
        $data->vendor_category=$req->vendor_category;
        $data->description=$req->description;
        $data->vendor=$req->vendor;
        $data->gallery=$req->gallery;
        $data->save();
        return redirect('listproducts');

    }

    function rating(Request $req)
    {

        if($req->session()->has('user'))
        {
            $data= Product::find($req->id);
            $rating= new Rating;
            $rating->product_id=$req->product_id;
            $rating->user_id=$req->session()->get('user')['id'];
            $rating->rate=$req->rate;
            $rating->comment=$req->comment;
            $rating->save();
            return redirect('viewrating');
        }
        else
        {
            return redirect('/login');
        }
    }

}
