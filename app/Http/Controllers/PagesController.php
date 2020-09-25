<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Session;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Online Shopping';
        //for sidebar
        $data['categories'] =  DB::table('category')->where('is_deleted', 0)->get();
        $data['content'] =  DB::table('products')->where('is_deleted', 0)->orderBy('id')->paginate(12);
        // $data['sub'] = DB::table('subcategory')->leftJoin('category', 'category.categoryid')
        // ->where('subcategory.is_deleted', 0)->orderBy('subcategory.subcat_id')->take(3);
        // $data['productdetails'] =  DB::table('products')->where('is_deleted', 0)->get();
        return view ('welcome')->with('data', $data);
    }
    public function login(){
        if(Session::has('id')){
            return view('pages/profile');
        }else{
            return view('pages/login');
        }
    }

    public function success(){
        if(Session::has('id')){
            return view('success');
        }else{
            return view('pages/login');
        }
    } 

    public function signup(){
        if(Session::has('id')){
            return view('pages/profile');
        }else{
            return view('pages/signup');
        }
    }

    public function trackorder()
    {
        return view ('pages.trackorder');
    }

    public function topay()
    {
        return view ('pages.topay');
    }

    public function productdetails($id)
    {
        // $data['productdetails'] =  DB::table('products')->where('is_deleted', 0)->findOrFail($id);
        // $data['products'] = Product::where('is_deleted', 0)->findOrFail($id);
        // return view('pages.productdetails')->with('data', $data);

        $data['products'] = Product::leftJoin('category', 'category.id', '=', 'products.category')
        ->leftJoin('subcategory', 'subcategory.subcat_id', '=', 'products.subCategory')
        ->findOrFail($id);
        return view('pages.productdetails')->with('data', $data);

    }

    public function mycart($id)
    {
        $data['products'] = Product::where('is_deleted', 0)->findOrFail($id);
        return view('pages.mycart')->with('data', $data);
    }

    //  public function mycart()
    // {
    //     return view ('pages.mycart');
    // }

    public function profile()
    {
        return view ('pages.profile');
    }

    public function welcomeseller()
    {
        return view ('pages.welcomeseller');
    }


    // public function content(){
    //     $data['content'] = Product::where('is_deleted', 0)->get();
    //     return view('content')->with('data', $data);
    // }
    
    // //for sidebar
    // public function sidebar($id){
    //     $data['categories'] = Category::where('id', null)->get();
    //     return view('categories')->with('data', $data);
    // }

    // public function seminar($id){
    //     $data['seminar'] = Seminar::leftJoin('cms_gallery', 'cms_gallery.gallery_id', '=', 'cms_seminars.gallery_id')->findOrFail($id);  
    //     $data['other_seminars'] =  DB::table('cms_seminars')->where('cms_seminars.is_deleted', 0)->orderBy('seminar_date', 'desc')->take(3)->get();
    //     return view('seminar')->with('data', $data);
    // }


}
