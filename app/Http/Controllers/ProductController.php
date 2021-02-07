<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
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
}
