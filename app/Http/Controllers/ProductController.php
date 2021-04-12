<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
       $data = Product::all();
       return view('layout/product',['products'=>$data]);
    }

    function search(Request $req)
    {
        $data = Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('layout/search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        $cart = new Cart;
       // $cart->user_id = $req->session()->get('user')['id'];
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/');
    }

    static function cartItem()
    {
        //$userId = Session::get('user')['id'];
        $order = Session::get('id');
       // $productId = Session::get('product')['id'];
        return Cart::where('product_id',$productId)->count();
    }

    function cartList()
    {
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('layout/cartlist',['products'=>$products]);
    }

    function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function buyNow()
    {
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('layout/buynow',['total'=>$total]);
    }

    function myOrder(Request $req)
    {
        $id = Session::get('id');
        $allCart = Cart::where('id',$id)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->name=$req->name;
            $order->email=$req->email;
            $order->address=$req->address;
            $order->contact=$req->contact;
            $order->status="Pending";
            $order->payment_method=$req->payment_method;
            $order->payment_status="Done";
            $order->save();
        }
        $req->input();
        return redirect('/');
    }

}
