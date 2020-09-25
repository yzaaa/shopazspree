<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Orders;
use App\Models\Product;
use Session;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('id')){
            $id = session('id');
            $title = 'Profile';
            $data['profile'] =  Users::where('is_deleted', 0)->findOrFail($id);

            $data['orders'] = Orders::leftJoin('products', 'products.id', '=', 'orders.productId')
            ->where('orders.id', $id)
            ->orderBy('orders.id', 'desc')->get();


        return view('pages.profile')->with('data', $data);
    }else{
        return view('pages.login');
        }
    }

    public function cart()
    {
        if(Session::has('id')){
            $id = session('id');
            $title = 'MyCart';
            $data['mycart'] =  DB::table('users')->where('is_deleted', 0)->orderBy('id')->get();

            $data['products'] = Product::where('is_deleted', 0)->findOrFail($id);

        return view('pages.mycart')->with('data', $data);
    }else{
        return view('pages.login');
        }
    }


    // public function order()
    // {
    //     $id = session('id');

    //     $order = new Order();
    //     $order->id = $id;
    //     $order->productId = $productId;
    //     $order->quantity = $quantity;
    //     $order->orderDate = date("Y-m-d");
    //     $order->paymentMethod = $paymentMethod;
    //     $order->save();

    //     $title = 'Profile';
    //     $data['profile'] = Users::where('is_deleted', 0)->findOrFail($id);

    //     $data['orders'] = Orders::leftJoin('products', 'products.id', '=', 'orders.productId')
    //         ->where('orders.id', $id)
    //         ->orderBy('orders.id', 'desc')->get();

    //     return view('profile')->with('data', $data);

    // }


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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
