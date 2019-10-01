<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_sub_category;
use App\Models\Product_category;

/**
 * Class Sub_categoryController.
 */
class Sub_categoryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$categories = Product_sub_category::select('product_categories.name AS category','product_sub_categories.*')->leftJoin('product_categories','product_categories.id','=','product_sub_categories.category_id')->paginate(10);
        return view('backend.sub_category.index',['categories' => $categories]);
    }

    public function create()
    {
        $categories = Product_category::get();
    	return view('backend.sub_category.create',['categories' => $categories]);	
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required|max:255',
            'category_id' => 'required',
	        'status' => 'required',
	    ]);

    	$category = new Product_sub_category;
    	$category->name = $request->name;

        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);        
            $category->image = $name;
        }

        $category->category_id = $request->category_id;
    	$category->status = $request->status;
    	$category->save();

    	return redirect()->route('admin.sub_category.index')->withFlashSuccess('Sub Category Added Successfully.');
    }

    public function show($id)
    {
    	$category = Product_sub_category::select('product_categories.name AS category','product_sub_categories.*')->leftJoin('product_categories','product_categories.id','=','product_sub_categories.category_id')->where('product_sub_categories.id',$id)->first();
    	return view('backend.sub_category.show',['category' => $category]);	
    }

    public function edit($id)
    {
    	$category = Product_sub_category::findOrfail($id);
        $categories = Product_category::pluck('name','id');
    	return view('backend.sub_category.edit',['category' => $category,'categories' => $categories]);	
    }

    public function update(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required|max:255',
            'category_id' => 'required',
	        'status' => 'required',
	    ]);

    	$category = Product_sub_category::findOrfail($request->id);
    	$category->name = $request->name;

        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);        
            $category->image = $name;
        }

        $category->category_id = $request->category_id;
    	$category->status = $request->status;
    	$category->save();

    	return redirect()->route('admin.sub_category.index')->withFlashSuccess('Sub Category Updated Successfully.');
    }

    public function delete($id)
    {
    	$category = Product_sub_category::findOrfail($id);
    	$category->delete();
    	return redirect()->back()->withFlashSuccess('Sub Category Deleted Successfully.');
    }
}
