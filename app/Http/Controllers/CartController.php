<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\CartHeader;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;
use DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        Validator::make($request->all(),
            [
                'qty' => 'required'
            ]
            
        )->validate();

        $user = new CardDetail();
        $user->qty = $request->input('qty');
        $user->create_datetime = Carbon::now();
        $user->save();

        $user = CardDetail::findOrFail($user->user_hash);
        $user_hash = $user->user_hash;


        $data = array(
            'user_hash' => $user->user_hash,
            'email' => $request->input('fullname')
            );
                
        $response['stat']='success';
        $response['msg']='<b>Successfully Signup.</b> Please login now.';
        echo json_encode($response);

    //     Validator::make($request->all(),
    //     [
            
    //         'variant_1' => 'required',
    //         'variant_2' => 'required',
    //         'qty' => 'required',

    //     ]
        
    // )->validate();

    // // $user_hash = session('user_hash');

    // $addcart = new CartDetail();
    // $addcart->variant_1 = $request->input('variant_1');
    // $addcart->variant_2 = $request->input('variant_2');
    // $addcart->qty = $request->input('qty');
    // $addcart->create_datetime = Carbon::now();
    // $addcart->save();

    // $addcart = CartDetail::findOrFail($addcart->user_hash);
    // $addcart_hash = $addcart->user_hash;

    // $data = array(
    //     'user_hash' => $addcart->user_hash,
    //     );
            
    // $response['stat']='success';
    // $response['msg']='<b>Successfully Added to Cart.</b>';
    // echo json_encode($response);
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
        $data['products'] = Product::leftJoin('inct', 'inct.inct_hash', '=', 'inmr.inct_hash')
        ->leftJoin('insc', 'insc.insc_hash', '=', 'inmr.insc_hash')
        ->findOrFail($id);
        return view('pages.productdetails')->with('data', $data);
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
