<?php

namespace App\Http\Controllers;
use DB;
use App\Product;
use Auth;
use App\Orders;

use Illuminate\Http\Request;

class OrdersController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::where('user_email', Auth::user()->email)->get();;
        return view('Orders', ['orders' => $orders]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Product $product, Request $request)
    {

        //$attributes =  ['user_email' => Auth::user()->email];
       // $attributes += ['order_id' => Orders::max('order_id') + 1];
        $attributes = $request->validate([
             'product_id' => 'required|numeric',
              'email' => 'required|string',

         ]);



         $user_email = request('email');
         $order_id = Orders::max('order_id') + 1;
         $product_id = request('product_id');
         $product_name = Product::find($product_id)->name;
         $message = 'Товар ' . $product_name . ' заказан';

        if (Auth::check()) {
            $user_email = Auth::user()->email;
        }

         DB::table('orders')->insertGetId(
            ['order_id' => $order_id, 'product_id' => $product_id, 'user_email' => $user_email, 'created_at' => now()]);

       //Send Email to the Client

     //Mail::to(\Auth::user())->send(new Send(['product' => $product, 'users'=>$user_email]));
      return redirect()->back()->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        if(Auth::user()->role === 1){
          return view('Orders');
        }else{
            $orders = Orders::all();
            return view('ManageOrders', ['orders' => $orders]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
