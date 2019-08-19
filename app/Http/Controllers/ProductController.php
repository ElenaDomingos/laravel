<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
        {



        $products = Product::with('category')->paginate(6);
        return view('products', ['products' => $products]);

    }

    public function oneproduct(Product $product, Request $request) {
        $product = Product::find(request('id'));
        return view('productpage',  ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('addProducts', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)

    {
        //dd($request->all()); $request->validate([

     $attributes = $request->validate([ //$this->validate(request(),[
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required|string',

        ]);

        $name = request('name');
        $price = request('price');
        $category_id = request('category_id');
        $description = request('description');
        $namePhoto = 'noimage.jpg';


        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $this->namePhoto = Auth::user()->id . '-'. time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,  $this->namePhoto);

        }
           DB::table('products')->insertGetId(
                ['category_id' => $category_id, 'name' => $name, 'price' => $price, 'photo' => $this->namePhoto,
                 'description' => $description, 'created_at' => now()]);

         return redirect('/products');


     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::all();
        return view('ManagerProducts', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Product $product, Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',

        ]);
        $product = Product::find(request('id'));
        $categories = Category::all();

        return view('EditProduct', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required|string',

        ]);
        $name = request('name');
        $price = request('price');
        $category_id = request('category_id');
        $description = request('description');
        $namePhoto = 'noimage.jpg';

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $namePhoto = Auth::user()->id . '-'. time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,  $namePhoto);

        }
         Product::where('id', $request->id)
         ->update(['category_id' => $category_id, 'name' => $name, 'price' => $price, 'photo' => $namePhoto,
         'description' => $description, 'updated_at' => now()]);

         return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
        ]);
        $product = Product::find(request('id'));
        $product->delete();

        return redirect('/products/list');



    }
}
