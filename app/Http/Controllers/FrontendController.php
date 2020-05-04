<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function allCategoryShow()
    {
        $subCategories = DB::select("SELECT categories.*, sub_category.* 
        FROM categories LEFT JOIN sub_category ON categories.id = sub_category.category_id
        WHERE categories.id = sub_category.category_id");

        return view('home',compact('subCategories'));
    }
}
