<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contact;

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

    public function showAboutPage()
    {
        return view('frontend.pages/about');
    }

    public function showContactPage()
    {
        return view('frontend.pages/contact');
    }

    public function storeContactInfo(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'required',
            'message' => 'required',

        ]);

        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
        $contacts->save();

        return back()->with('success','Your Information added successfully');

    }
}
