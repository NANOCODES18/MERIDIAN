<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Investmentplan;
use App\Models\Faq;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;
use App\Models\Feature;


class VisitorController extends Controller
{

   public $owneremail ="raphogochukwu@gmail.com";
    // //
    // public function index()
    // {
    //     # code...
    //     $inv_plans = Investmentplan::all();
    //     $faqs = Faq::all();
    //     $company_detail = Sitesetting::where('id', 1)->first();
    //     $company_features = Feature::where('id', 1)->first();
    //     $data=[];
    //     $data['company_features'] = $company_detail;
    //     $data['company_detail'] = $company_features;
    //     $data['compd'] = $company_detail;
    //     $data['investmentplans'] = $inv_plans;
    //     $data['faqs'] = $faqs;
    //     $data['title']="Home";
    //     return view ("visitors.index", $data);
    // }

    public function postcontact(Request $request)
{   # code...
    $name = $request->name;
    $email = $request->email;
    $message = $request->message;
    $domain = request()->getHost();
    $email = $this->owneremail;
    $mailtitle = "contact message from $name";
$emaildata=['data'=> $email,'email_body'=>$message,'email_header'=>$mailtitle];

Mail::to($email)->send(new Adminmail($emaildata));

    $company_detail = Sitesetting::where('id', 1)->first();

$data=[];
$data['company_detail'] = $company_detail;
$data['title']="About Us";
    return redirect()->route("contact")->with("success","message sent, we will respond to you as soon as we can");
}


public function func10()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "10";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.10", $data);
}


public function func2()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "2";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.2", $data);
}


public function func7()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "7";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.7", $data);
}


public function func9()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "9";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.9", $data);
}


public function about()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "about";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.about", $data);
}


public function contact()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "contact";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.contact", $data);
}


public function copy_trading()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "copy_trading";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.copy_trading", $data);
}


public function crypto()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "crypto";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.crypto", $data);
}


public function forgot_password()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "forgot_password";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.forgot_password", $data);
}


public function gold()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "gold";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.gold", $data);
}


public function green_energy()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "green_energy";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.green_energy", $data);
}


public function hiw()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "hiw";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.hiw", $data);
}


public function index()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "index";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.index", $data);
}


public function investments()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "investments";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.investments", $data);
}


public function login()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "login";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.login", $data);
}


public function privacy()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "privacy";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.privacy", $data);
}


public function register()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "register";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.register", $data);
}


public function stocks()
{
    $data = []; // An associative array to pass data to the view
    $data['title'] = "stocks";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.stocks", $data);
}
}