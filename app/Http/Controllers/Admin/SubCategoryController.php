<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function all_sub_category()
    {
        return view('admin.sub_category.all_sub_category');
    }
}
