<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Section;
use App\Models\Contact;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use App\Models\BannerImages;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Response;
use Dompdf\Dompdf;
use Mail;
use PDF;

class AdminController extends Controller
{
    
    public function index(Request $request)
    { 
        // print_r(Auth::user()->user_type); exit();
        if (Auth::user() != null && (Auth::user()->user_type == 'admin')) {
            return view("admin.dashboard");
        } else {
           return redirect()->route('admin');
        }
    }
    
    
    public function admin_login(Request $request)
    { 
        $email    = $request->email;
        $password = $request->password;
        
        $admin          = User::where('email',$email)->where('user_type','admin')->first();

        if($admin)
        {
            $hashedPassword = $admin->password;
            if (Hash::check($password, $hashedPassword)) {
                Auth::login($admin);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin')->with('error', 'Invalid password.');
            }
        }
        else
        {
           return redirect()->route('admin')->with('error', 'User not Found');
        }
  
    }
    
    
    public function adminPopup(Request $request)
    {
        $popup = User::where('user_type','admin')->where('id','1')->first();
        return view('admin.adminpopup',compact('popup'));
    }
    

    public function adminPopupUpdate(Request $request)
    {
        $popup = User::where('user_type','admin')->where('id','1')->first();
        if ($popup->image_name) {
            $imagePath = public_path('images/' . $popup->image_name);

            if (file_exists($imagePath)) {
                unlink($imagePath); // delete file
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileName);
            $popup->image_name = $fileName;
        }
    
        $popup->save();
        if($popup)
        {
            return redirect()->route('admin.popup')->with('success', 'Image has been updated successfully')->with('refresh', true);
        }

    }

    
    public function adminPopupDelete(Request $request)
    {
        $popup = User::where('user_type','admin')->where('id','1')->first();
    
        if ($popup->image_name) {
            $imagePath = public_path('images/' . $popup->image_name);

            if (file_exists($imagePath)) {
                unlink($imagePath); // delete file
            }
            $popup->image_name = null;
            $popup->save();
        }    
    
        if($popup)
        {
            return redirect()->route('admin.popup')->with('success', 'Image has been deleted successfully')->with('refresh', true);
        }

    }
    

    public function admin_logout(Request $request)
    {
        Auth::logout(); 

        return redirect()->route('admin')->with('success', 'You have been logged out.');
    }
    

    public function message_destroy($id)
    {
        $contact = Contact::findOrFail($id);
        
        if (Contact::destroy($id)) {
            return redirect()->route('contact.queries')->with('danger', 'Message has been deleted successfully');
        } else {
            return back();
        }
    }
    public function enquiryDestroy($id)
    {
        $Enquiry = Enquiry::findOrFail($id);
        
        if (Enquiry::destroy($id)) {
            return redirect()->route('enquiries')->with('danger', 'Message has been deleted successfully');
        } else {
            return back();
        }
    }
}
