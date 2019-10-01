<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_category;

/**
 * Class CategoryController.
 */
class CategoryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$categories = Product_category::paginate(10);
        return view('backend.category.index',['categories' => $categories]);
    }

    public function create()
    {
    	return view('backend.category.create');	
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required|max:255',
	        'status' => 'required',
	    ]);

    	$category = new Product_category;
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);        
            $category->image = $name;
        }

    	$category->name = $request->name;
    	$category->status = $request->status;
    	$category->save();

    	return redirect()->route('admin.category.index')->withFlashSuccess('Category Added Successfully.');
    }

    public function show($id)
    {
    	$category = Product_category::findOrfail($id);
    	return view('backend.category.show',['category' => $category]);	
    }

    public function edit($id)
    {
    	$category = Product_category::findOrfail($id);
    	return view('backend.category.edit',['category' => $category]);	
    }

    public function update(Request $request)
    {
    	$validatedData = $request->validate([
	        'name' => 'required|max:255',
	        'status' => 'required',
	    ]);

    	$category = Product_category::findOrfail($request->id);

        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);        
            $category->image = $name;
        }

    	$category->name = $request->name;
    	$category->status = $request->status;
    	$category->save();

    	return redirect()->route('admin.category.index')->withFlashSuccess('Category Updated Successfully.');
    }

    public function delete($id)
    {
    	$category = Product_category::findOrfail($id);
    	$category->delete();
    	return redirect()->back()->withFlashSuccess('Category Deleted Successfully.');
    }
}
