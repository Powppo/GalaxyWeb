<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contactus;
use App\Models\Upload;
use App\Models\Exchange;
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
            return redirect('home/contact')->with('status', 'Feedback Accepted');
        } else {
            return redirect('home/contact')->with('status', 'Feedback Denied');

        }
    }

    protected function storeUpload(Request $request){
        $request->validate([
            'code'=>'required',
            'link'=>'required',
        ]);

        $upld = new upload;
        $val = 100;
        $upld->code = $request->code;
        $upld->link = $request->link;
        $upld->get_points = $request->get_points+$val;
        $upld->user_id = Auth::id();
        if ($upld->save())
        {
            return redirect('home/upload')->with('status', 'Upload Succeded');
        } else {
            return redirect('home/upload')->with('status', 'Upload Failed');
        }
    }
    protected function storeExchange(Request $request){
        $request->validate([
            'item'=>'required',
        ]);

        $exc = new exchange;
        $exc->item = $request->item;
        $exc->user_id = Auth::id();
        if ($exc->save())
        {
            return redirect('home/expoint')->with('status', 'Select Succeded');
        } else {
            return redirect('home/expoint')->with('status', 'Select Failed');
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
            if ($edit->save() && $request->hasFile('image'))
            {
                $request->image->storeAs('uploads/images',$filename,'public');
                Auth()->user()->update(['image'=>$filename]);
                return redirect('index')->with('status', 'Update Success');
            } else {
                return redirect('index')->with('status', 'Update Denied');
            }
        }
}


