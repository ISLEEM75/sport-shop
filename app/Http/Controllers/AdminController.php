<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Categories;
use App\Product;
use App\User;
use App\Role;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function cart()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $product = $cart->pluck('quantity', 'product_id');
        $productid = $cart->pluck('id', 'product_id');
        $product_id = $cart->pluck('product_id');
        $products = Product::all();
        return view('cart', compact('products', 'product_id', 'product', 'productid'));

    }
    public function chickout()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $product = $cart->pluck('quantity', 'product_id');
        $productid = $cart->pluck('id', 'product_id');
        $product_id = $cart->pluck('product_id');
        $products = Product::all();
        return view('checkout', compact('products', 'product_id', 'product', 'productid'));

    }

    public function add(Request $request, $id)
    {

        $cart = new Cart();
        $product = Product::find($id);
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $product->id;
        $cart->quantity = $request->quantity;
        $cart->save();


        return redirect()->back();
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('admin.index', compact('users'));
    }
    public function product()
    {
        $products = Product::all();

        return view('admin.products.product', compact('products'));
    }

    public function addProducts()
    {
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
    public function addRole(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());

        }
        if ($request['role_editor']) {
            $user->roles()->attach(Role::where('name', 'Editor')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }

        return redirect()->back();
    }

    public function addCategory(Request $request)
    {
        $request->validate([
                'name' => 'required'
            ]
        );
        $category = new Categories();
        $category->name = $request->name;
        $category->save();
        \Session::flash('flash_message', 'successfully add.');
        return redirect()->back();
    }
    public function category(){
        return view('admin.category');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,gif,png|max:2048'
        ]);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->file('image');
        $image = $request->file('image');
        $newImage = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $newImage);
        $product->image = $newImage;
        $product->type = $request->type;
        $product->size = $request->size;
        $product->categories = $request->categories;
        \Session::flash('flash_message', 'successfully ADD.');
        $product->save();


        return redirect('admin\products');
    }
    public function edit($id)
    {

        $products = User::findOrFail(Auth::user()->id)->products;
        $product = Product::findOrFail($id);
        $categories = Categories::all();
        return view('admin.products.create', compact('product', 'products','categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,gif,png|max:2048'
        ]);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $image = $request->file('image');
        $newImage = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $newImage);
        $product->image = $newImage;
        $product->image = $newImage;
        $product->type = $request->type;
        $product->size = $request->size;
        $product->categories = $request->categories;
        $product->save();
        \Session::flash('flash_message', 'successfully Updated.');
        return redirect('admin/products');
    }

}
