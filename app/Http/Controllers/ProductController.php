<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Support\Facades\db;
use App\Order;
class ProductController extends Controller
{
    //
    function index(){

        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        // return Product::find($id);
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        // return $req->input();
        $data= Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/'); 
        }
        else{
            return redirect('/login');
        }
        
    }

    static function cartItem()
    {
        // $userId=Session::get('user')['id'];
        
        $userId=session::get('user')['id']; 
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        if(session()->has('user')){
            $userId=session::get('user')['id']; 
        }
        else
        {
            $userId=null;
            redirect('/login');
        }
            // $userId=session::get('user')['id']; 
              
        $product=db::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$product]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    function orderNow(){
        $userId=session::get('user')['id'];       
        $total=db::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req){
        $userId=session::get('user')['id']; 
        $allCart=Cart::where('user_id',$userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect("/");
            
        // $total=db::table('cart')
        // ->join('products','cart.product_id','=','products.id')
        // ->where('cart.user_id',$userId)
        // ->select('products.*','cart.id as cart_id')
        // ->sum('products.price');

        // return view('ordernow',['total'=>$total]);
    }

    function myOrders()
    {
        if(session()->has('user')){
            $userId=session::get('user')['id']; 
        }
        else
        {
            $userId=null;
            return redirect('/login');
        }
        $userId=Session::get('user')['id'];
        $products= db::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['products'=>$products]);
        
    }

}
