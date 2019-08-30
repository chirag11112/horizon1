<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_sub_category;
use App\Models\Product_category;
use App\Models\User_inquiry;
use DB;

/**
 * Class User_inquiryController.
 */
class User_inquiryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$vendor_inquiry = User_inquiry::select('user_inquiries.*',DB::raw('CONCAT(users.first_name," ",users.last_name) AS user_id'),DB::raw('CONCAT(vendor.first_name," ",vendor.last_name) AS vendor_id'))->leftJoin('users','users.id','=','user_inquiries.user_id')->leftJoin('users AS vendor','vendor.id','=','user_inquiries.user_id')->paginate(10);
        return view('backend.user_inquiry.index',['vendor_inquiry' => $vendor_inquiry]);
    }

    public function show($id)
    {
    	$vendor_inquiry = User_inquiry::select('user_inquiries.*',DB::raw('CONCAT(users.first_name," ",users.last_name) AS user_id'),DB::raw('CONCAT(vendor.first_name," ",vendor.last_name) AS vendor_id'))->leftJoin('users','users.id','=','user_inquiries.user_id')->leftJoin('users AS vendor','vendor.id','=','user_inquiries.user_id')->where('user_inquiries.id',$id)->first();
    	return view('backend.user_inquiry.show',['vendor_inquiry' => $vendor_inquiry]);	
    }

    public function delete($id)
    {
    	$vendor_inquiry = User_inquiry::findOrfail($id);
    	$vendor_inquiry->delete();
    	return redirect()->back()->withFlashSuccess('Inquiry Deleted Successfully.');
    }
}
