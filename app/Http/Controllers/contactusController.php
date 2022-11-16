<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;

class contactusController extends Controller
{
    public function contact() {
        return view('feature.contactus');
    }

    protected function upload(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $rev = new contactus;
        $rev->name = $request->name;
        $rev->email = $request->email;
        $rev->subject = $request->subject;
        $rev->message = $request->message;
        if ($rev->save())
        {
            return redirect('contactus')->with('status', 'Feedback Accepted');
        } else {
            return redirect('contactus')->with('status', 'Feedback Denied');

        }
    }
}

