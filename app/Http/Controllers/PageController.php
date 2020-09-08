<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Item;
use App\Brand;
use App\Subcategory;
use DB;


class PageController extends Controller
{
    public function mainfun($value='')
    {
        $items=Item::all();
        $brands=Brand::all();
        $subcategories=Subcategory::all();
        return view('main',compact('items','brands','subcategories'));
    }
    public function brandfun($id)
    {
        $brand = Brand::find($id);
    	return view('brand',compact('brand'));
    }
     public function itemdetailfun($id)
    {
        $item=Item::find($id);
        return view('itemdetail',compact('item'));
    }
    public function loginfun($value='')
    {

        return view('login');
    }
     public function promotionfun($value='')
    {
        
        $items = DB::table('items')->where('discount','>',0)->get();
        return view('promotion',compact('items'));
    }
     public function registerfun($value='')
    {

        return view('register');
    }
    public function shoppingcartfun($value='')
    {

        return view('shoppingcart');
    }
     
    public function subcategoryfun($id)
    {   
        $subcategory =Subcategory::find($id);
        return view('subcategory',compact('subcategory'));
    }
     
    

}