<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class AdminDashboardController extends Controller
{
    public function store_subscriber(Request $request)
    {
        $this->validate($request,[
            'subscribers_email' => 'required',
        ]);

        $subscribers =  new Subscriber();
        $subscribers->subscribers_email = $request->subscribers_email;
        $subscribers->save();

        return back()->with('success','Your email added successfully');
    }

    public function all_subscriber()
    {
        $subscribers = Subscriber::all();
        return view('admin.pages.all_subscriber', compact('subscribers'));
    }

    public function delete_subscriber($id)
    {
        $project = Subscriber::find($id);
        $project->delete();
        return back()->with('danger','Subscriber deleted successfully');
    }
}
