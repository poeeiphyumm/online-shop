<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subcategory;
use App\Category;
use App\Item;

class BladeController extends Controller
{
    public function shop($value='')
    {
    	$id=request('blade');
    	if(isset($id)){

    		$subcategory = DB::table('subcategories')
    			->where('subcategories.category_id','=',$id)
    			->get();
    	}	
    	else{
    		$subcategory=Subcategory::all();

    	}
    	$categories = Category::all();
    	return view('category',compact('subcategory','categories'));

    }
    public function product($value='')
    {
    	$subid=request('item');
    	if(isset($id)){

    		$item = DB::table('items')
    			->where('items.subcategory_id','=',$id)
    			->get();
    	}else{
    		$item = Item::all();

    	}
    	$subcategories = Subcategory::all();
    	return view('subcategory',compact('item','subcategories'));

    }
}
