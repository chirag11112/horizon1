<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product_category;
use App\Models\Product_sub_category;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $product_category = Product_category::where('status',1)->limit(3)->get();
        return view('frontend.index',['product_category' => $product_category]);
    }

    public function about()
    {
    	return view('frontend.cms.about');	
    }

    public function contact()
    {
    	return view('frontend.cms.contact');	
    }

    public function category()
    {
        $product_category = Product_category::where('status',1)->paginate(30);
    	return view('frontend.cms.category',['product_category' => $product_category]);	
    }

    public function sub_category($id)
    {
        $main_category = Product_category::where('id',$id)->first();

        $sub_category = Product_sub_category::select('product_sub_categories.*','product_categories.name AS product_name')->leftJoin('product_categories','product_categories.id','product_sub_categories.category_id')->where('category_id',$id)->paginate(18);

        return view('frontend.cms.sub_category',['product_category' => $sub_category,'main_category' => $main_category]); 
    }
}
