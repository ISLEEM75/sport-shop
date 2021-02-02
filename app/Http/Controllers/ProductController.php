<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Categories;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('/index', compact('products'));
    }

    public function shop( )
    {
        $products = Product::all();
        return view('/shop', compact('products'));
    }
    public function shopman( )
    {
        $products = Product::all()->where('type','Male');
        return view('/man', compact('products'));
    }
    public function shopwoman( )
    {
        $products = Product::all()->where('type','Female');
        return view('/woman', compact('products'));
    }







    public function showProduct($id)
    {
        $product = Product::find($id);
        $products = Product::all();
        return view('/product', compact('product','products'));
    }

    public function destroyCart($id)
    {
        $product = Cart::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }


}
