<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function all_sub_category()
    {
        // $subCategories = SubCategory::all();

        $subCategories = DB::select("SELECT categories.*, sub_category.* 
        FROM categories LEFT JOIN sub_category ON categories.id = sub_category.category_id
        WHERE categories.id = sub_category.category_id");
        // dd($subCategories);

        return view('admin.subCategory.allSubCategory',compact('subCategories'));
    }

    public function add_sub_category()
    {
        $categories = Category::all();
        return view('admin.subCategory.addSubCategory',compact('categories'));
    }

    public function store_sub_category(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'category_name' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpg,jpeg,png',
            'status' => 'required',
        ]);

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/categories/', $fileName);    
        }

        $subCategories =  new SubCategory();
        $subCategories->category_id = $request->category_name;
        $subCategories->name = $request->name;
        $subCategories->description = $request->description;
        $subCategories->image = $fileName;
        $subCategories->status = $request->status;
        $subCategories->save();

        return redirect()->route('all-sub-category')->with('success','Sub Category added successfully');
    }

    public function edit_sub_category($id)
    {
        $data['categories'] = Category::all();
        $data['subCategory'] = SubCategory::find($id);
        return view('admin.subCategory.editSubCategory', $data);
    }

    public function update_sub_category(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'category_name' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpg,jpeg,png',
            'status' => 'required',
        ]);

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./uploads/categories/', $fileName);    
        }

        $subCategories = SubCategory::find($id);
        $subCategories->category_id = $request->category_name;
        $subCategories->name = $request->name;
        $subCategories->description = $request->description;
        $subCategories->image = $fileName;
        $subCategories->status = $request->status;
        $subCategories->save();
        return redirect()->route('all-sub-category')->with('success',' Sub Category updated successfully');
    }

    public function delete_sub_category($id)
    {
        $project = SubCategory::find($id);
        $project->delete();
        return back()->with('danger','Sub Category deleted successfully');
    }
}
