<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function all_category()
    {
        return view('admin.category.all_category');
    }

    public function add_category()
    {
        return view('admin.category.add_category');
    }

    public function save_category(Request $request)
    {
    //   return $request->all();
        $this->validate($request,[
          'category_name'  =>'required',
          'category_description'  =>'required',
          'category_status'  =>'required',
        ]);

        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->category_description = $request->category_description;
        $categories->category_status = $request->category_status;
        $categories->save();

        return redirect()->route('all-category')->with('success','Category added successfully');

    }
}
