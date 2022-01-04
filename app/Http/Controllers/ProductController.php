<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ProductController extends Controller
{
    public function index(){
        //return Product::all();
        $data=Product::all();
        return view('product',['product'=>$data]);
    }
    public function detail($id){
            $data=Product::find($id);
     return view('detail',['product'=>$data]);
    }
    public function search(Request $request){
           $data=Product::where('name','like','%'.$request->input('query').'%')->get();
           return view('search',['product'=>$data]);
    }
    // public function cart(){
    //     return view('cart');
    // }

function addToCart(Request $request){
    if ($request->session()->has('user')) { 
        $cart=new cart();
                $cart->user_id=$request->session()->get('user')['id'];
                $cart->product_id=$request->product_id;
                $cart->save();
                return redirect('/');
    }else{
        return redirect('/login');
    }
}
static function cartItem(){
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}
function cartList()
{
$userId=Session::get('user')['id'];
$product=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
return view('cart',['product'=>$product]);
}
function removeCart($id)
{
   cart::destroy($id);

    return redirect('cartlist');
}




function orderNow(){
    $userId=Session::get('user')['id'];
  $total=$product=DB::table('cart')->join('products','product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
    
    return view('ordernow',['total'=>$total]);
}

function orderPlace(Request $request){   
    $userId=Session::get('user')['id'];
     $allCart=cart::where('user_id',$userId)->get();
     foreach($allCart as $cart){
         $order=new Order();
         $order->product_id=$cart['product_id'];
         $order->user_id=$cart['product_id'];
         $order->status="panding";
         $order->payment_method=$request->payment;
         $order->payment_status="pending";
         $order->address=$request->address;
         $order->save();
         Cart::where('user_id',$userId)->delete();
        }
     $request->input();
   return redirect('');
}
  public function myOrders(){
    $userId=Session::get('user')['id'];
   $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->get();
      
      return view('myorders',['orders'=>$orders]);
  }
}
