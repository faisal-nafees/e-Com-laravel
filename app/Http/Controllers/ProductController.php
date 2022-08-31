<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('product', ['products'=> $data]);
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    public function search(Request $request){
        $data = Product::where('name', 'like', '%'.$request->search. '%')->get();
        return view('search', ['products' => $data]);
    }

    public function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
    public static function cartItem(){
        $userId = Session::get('user')->id;
        return Cart::where('user_id', $userId)->count();

        // or
        // $user_id = session()->get('user')['id'];
        // $items = Cart::where('user_id',$user_id)->get();
        // return count($items);
    }

    public function cartList(){
        $userId = Session::get('user')->id;
        $data = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->select('products.*')
        ->where('carts.user_id', $userId)
        ->get();

        return view('cartlist', ['products'=>$data]);
    }
}
