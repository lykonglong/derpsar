<?php

namespace App\Http\Controllers;
use App\product;
use App\slider;
use App\category;
use App\Promotion;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
//        $category=category::get();
        $category= category::get();
        $hotproduct1 = Promotion::orderby('discount','desc')->limit(1)->get();
        $hotproduct2 = Promotion::orderby('discount','desc')->offset(1)->limit(1)->get();
        $hotproduct3 = Promotion::orderby('discount','desc')->offset(2)->limit(2)->get();
        $hotproduct4 = Promotion::orderby('discount','desc')->offset(3)->limit(1)->get();
        $product=product::get();
        $specialproduct=product::orderBy('view','desc')->get();
        $slider=slider::get();
        $hotpromotion= DB::table('promotions')->where('expired','>',DB::raw('NOW()'))->orderBy('discount','desc')->limit(1)->get();
        return view('product/index',compact('product','specialproduct','slider','category','hotproduct1','hotproduct2','hotproduct3','hotproduct4','hotpromotion'));
    }

//    public function hotpromot(){
//$hotpromotion= DB::table('promotions')->where('expired','>','now()')->orderBy('discount','desc')->limit(1)->get();
//return view('layout/main',compact('hotpromotion'));
//}
}
