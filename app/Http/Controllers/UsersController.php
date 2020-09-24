<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Hash;
use Session;
use DB;


class UsersController extends Controller
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
                'name' => 'required',
                'email' => 'required',
                'contactno' => 'required',
                'password' => 'required'
            ]
            
        )->validate();

        $user = new Users();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contactno = $request->input('contactno');
        $user->password = $request->input('password');
        // $user->password = Hash::make($request['password']);
        $user->regDate = Carbon::now();
        $user->save();
    
        
        //return json based from the resource data
        return ( new Reference( $user ))
                ->response()
                ->setStatusCode(201);

        

    }

}
