<?php

namespace App\Http\Controllers\frontend;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User;
// use App\Models\Contact;
// use App\Models\Course;
// use Illuminate\Support\Facades\Response;
// use Dompdf\Dompdf;
// use Mail;
// use PDF;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\LandingPage;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function send(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'phone'    => 'required|digits_between:7,15',
            'course'   => 'required|string|max:150',
            'country'  => 'required|string|max:100',
            'message'  => 'required|string|max:1000',
        ], [
            'name.required'    => 'Please enter your name.',
            'email.required'   => 'Please enter your email address.',
            'email.email'      => 'Please enter a valid email address.',
            'phone.required'   => 'Please enter your phone number.',
            'phone.digits_between' => 'Phone number must be between 7 and 15 digits.',
            'course.required'  => 'Please enter your course name.',
            'country.required' => 'Please select your country.',
            'message.required' => 'Please enter your message.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact')->withFragment('contact-form-section')->withErrors($validator)->withInput();
        }
        $contact = new Contact(); 
        
        $contact->name       = $request->name;
        $contact->email      = $request->email;
        $contact->phone      = $request->phone;
        $contact->course_id  = $request->course;
        $contact->message    = $request->message;
        $contact->country    = $request->country;
        $contact->save();
        
        $logo = url('public/frontend/assets/images/logo.png');
        
        // $course = Course::where('id', $contact->course_id)->first();
        
        Mail::send('frontend.emails.contact', ['contact' => $contact, 'logo' => $logo], function ($message) use ($contact) {
            $message->from($contact->email, 'ARA EDUCATION')
                    ->to('araeducationcoimbatore@gmail.com')
                    ->subject('ARA EDUCATION - ENQUIRY');
        });
        
        // Redirect back with success message
        return redirect()->route('contact')->withFragment('contact-form-section')->with('success', 'Thank you! Your message has been sent successfully. We’ll get back to you soon.');
    }
    public function landing($slug)
    {
        $categories = Category::where('status','Active')->get();
        // $pages = ['landing_1', 'landing_2', 'landing_3'];

        // if (!in_array($slug, $pages)) {
        //     abort(404);
        // }

        $pageData = LandingPage::where('slug', $slug)->first();

        if (!$pageData) {
            return abort(404);
        }

        return view("frontend.landing-pages.$pageData->page_name", compact('pageData','categories'));
    }

    public function category($slug){
        $category = Category::where('slug',$slug)->where('status','Active')->first();
        if (!$category) {
            return abort(404);
        }
        $pages = LandingPage::where('category_id',$category->id)->where('status','Active')->get();
        return view('frontend.landing-pages.category',compact('category','pages'));
    }

    public function enquiryForm(Request $request){
        dd(123);
        $contact = new Enquiry(); 
        
        $contact->name       = $request->name;
        $contact->email      = $request->email;
        $contact->phone      = $request->phone;
        $contact->message    = $request->message;
        $contact->save();
        
        $logo = url('public/frontend/assets/images/logo.png');
        try{
            Mail::send('frontend.emails.enquiry', ['contact' => $contact, 'logo' => $logo], function ($message) use ($contact) {
                $message->from('araeducationcoimbatore@gmail.com', 'ARA EDUCATION')
                        ->to($contact->email)
                        ->subject('ARA EDUCATION - ENQUIRY');
            });
        } catch (Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
        }
        
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
