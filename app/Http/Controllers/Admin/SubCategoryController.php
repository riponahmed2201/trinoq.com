<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class SubCategoryController extends Controller
{
    public function all_sub_category()
    {
        return view('admin.subCategory.allSubCategory');
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
            'description' => 'required',
            'approval_status' => 'required',
        ]);

        $projects =  new Item();
        $projects->name = $request->name;
        $projects->description = $request->description;
        $projects->approval_status = $request->approval_status;
        $projects->created_by = Auth::user()->id;
        $projects->save();

        return redirect()->route('all-sub-category')->with('success',' Item added successfully');
    }

    public function edit_sub_category($id)
    {
        $item = Item::find($id);
        return view('admin.subCategory.editSubCategory', compact('item'));
    }

    public function update_sub_category(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'approval_status' => 'required',
        ]);

        $projects = Item::find($id);
        $projects->name = $request->name;
        $projects->description = $request->description;
        $projects->approval_status = $request->approval_status;
        $projects->created_by = Auth::user()->id;
        $projects->save();

        return redirect()->route('all-sub-category')->with('success',' Item updated successfully');
    }

    public function delete_sub_category($id)
    {
        $project = Item::find($id);
        $project->delete();
        return back()->with('danger','Item deleted successfully');
    }
}
