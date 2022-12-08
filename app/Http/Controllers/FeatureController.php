<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contactus;
use App\Models\Upload;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\DB;

class FeatureController extends Controller
{   

    public function index(){
        return view('home');
    }

    public function tam(){
        $tam=Upload::all();
        $userid = User::all();
        return view('feature.toolsAndMachine', compact('tam', 'userid'));
    }

    public function upload(){
        $userid = User::all();
        return view('feature.upload', compact('userid'));
    }

    public function expoint(){
        return view('feature.exchangePoint');
    }

    public function prohibited(){
        return view('feature.prohibited');
    }

    public function contact(){
        return view('feature.contactus');
    }

    protected function storeContact(Request $request){
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
        $rev->user_id = Auth::id();
        if ($rev->save())
        {
            return redirect('contact')->with('status', 'Feedback Accepted');
        } else {
            return redirect('contact')->with('status', 'Feedback Denied');

        }
    }

    protected function storeUpload(Request $request){
        $request->validate([
            'code'=>'required',
            'link'=>'required',
            'file'=>'required',
        ]);

        $upld = new upload;
        $upld->code = $request->code;
        $upld->link = $request->link;
        $upld->file = $request->file;
        $upld->user_id = Auth::id();
        if ($upld->save())
        {
            return redirect('upload')->with('status', 'Upload Succeded');
        } else {
            return redirect('upload')->with('status', 'Upload Succeded');

        }
    }

    public function myprofile($id)
    {
        $user = User::findorfail($id);
        return view ('feature.myprofile', compact('user'));
    }

    //Edit Profile
    public function editProfile($id)
        {
            $edit = User::findorfail($id);
            return view('feature.editProfile', compact('edit'));
        }

        public function updateProfile (Request $request, $id)
        {
            $edit = User::findorfail($id);
            $edit->update($request->all());
            if ($edit->save())
            {
                return redirect('index')->with('status', 'Update Success');
            } else {
                return redirect('index')->with('status', 'Update Denied');
            }
        }
}


