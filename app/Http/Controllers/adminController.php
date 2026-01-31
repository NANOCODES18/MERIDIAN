<?php

namespace App\Http\Controllers;

use App\Models\Companydetail;
use App\Models\Faq;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Investment;
use App\Models\Investmentplan;
use App\Models\Referral;
use App\Models\Topearner;
use App\Models\Fund;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Newspost;
use App\Models\Sitesetting;
use App\Models\Card;
use App\Mail\Adminmail;
use App\Models\Feature;
use App\Models\Testimonial;
use Carbon\Carbon;
use App\Models\referralpercent;
use Hash;
use App\Models\Trade;
use App\Models\Trader;
use App\Models\TradeSubscription;
use App\Models\KycSubmission;
use App\Models\Voucher;
use App\Models\ProofOfPayment;
use App\Models\MarketTrade;

use PhpParser\Node\Stmt\Foreach_;

class adminController extends Controller
{


    public  $website = "info@wf-financial.com";

    public function __construct()
    {
        $this->middleware('isadmin');
    }




    // model-wheredataisstored
    // rowid-tabletostore
    // dataArray-datatobestored-colum,value
    public function savedata($mymodel, $rowid, $dataArray)
    {
        $model = $mymodel;
        if ($rowid == null) {
            # code...
            $rowselected = $model::where("id", 1)->first();
            if ($rowselected == null) {
                # code...
                $newrow = new $model;
                foreach ($dataArray as $key => $value) {
                    $newrow->$key = $value;
                }
                if ($newrow->save()) {
                    # code...
                    return true;
                } else {
                    return false;
                }
            } else {
                # code...
                foreach ($dataArray as $key => $value) {
                    $rowselected->$key = $value;
                }
                if ($rowselected->save()) {
                    # code...
                    return true;
                } else {
                    return false;
                }
            }
        } elseif (gettype($rowid) == "integer") {
            # code...
            $rowselected = $model::where("id", $rowid)->first();
            if ($rowselected == null) {
                # code...
                return false;
            } else {
                # code...
                foreach ($dataArray as $key => $value) {
                    $rowselected->$key = $value;
                }
                if ($rowselected->save()) {
                    # code...
                    return true;
                } else {
                    # code...
                    return false;
                }
            }
        } else {
            # code...
            $newentry =  new $model;
            foreach ($dataArray as $key => $value) {
                $newentry->$key = $value;
            }
            if ($newentry->save()) {
                # code...
                return true;
            } else {
                # code...
                return false;
            }
        }
    }

    //deletefn
    public function deleteRow($model, $rowid)
    {
        $row = $model::where("id", $rowid)->first();
        if ($row == null) {
            return "row to delete not found";
        } else {
            if ($row->delete) {
                return true;
            } else {
                return false;
            }
        }
    }


    //
    public function adminindex()
    {


        $users_all = User::all();
        $users_active = User::where("blocked", 0)->get();
        $deposit_all = Deposit::all();
        $deposit_completed = Deposit::where("status", 1)->get();
        $deposit_pending = Deposit::where("status", 0)->get();
        $withdrawal_all = Withdrawal::all();
        $withdrawal_pending = Withdrawal::where("status", 0)->get();
        $withdrawal_completed = Withdrawal::where("status", 1)->get();
        $funds_all = Fund::all();

        $payments = Sitesetting::where('id', 1)->first();


        $data = [];
        $data['payments'] = $payments;

        $data["users_all"] = $users_all;
        $data["users_active"] = $users_active;
        $data["deposit_all"] = $deposit_all;
        $data["deposit_completed"] = $deposit_completed;
        $data["deposit_pending"] = $deposit_pending;
        $data["withdrawal_all"] = $withdrawal_all;
        $data["withdrawal_pending"] = $withdrawal_pending;
        $data["withdrawal_completed"] = $withdrawal_completed;
        $data["funds_all"] = $funds_all;

        return view("admin.adminindex", $data);
    }



    public function password_reset_save(Request $req)
    {

        $password = $req->oldpassword;
        $newpassword = $req->newpassword;
        $cnewpassword = $req->cnewpassword;
        if (Hash::check($password, auth()->user()->password)) {

            if ($newpassword == $cnewpassword) {
                # code...

                auth()->user()->password = Hash::make($req->newpassword);
                $au = auth()->user()->save();
                if ($au) {
                    # code...
                    return redirect()->route('adminindex')->with('success', 'password changed succesfuly');
                } else {
                    # code...
                    return redirect()->route('adminindex')->with('error', 'password not changed succesfuly');
                }
            } else {
                # code...
                return redirect()->route('adminindex')->with('error', 'new password and confirm password do not match');
            }
        } else {
            return redirect()->route('adminindex')->with('danger', 'Wrong password please enter correct current password ');
        }
    }



    public function post_company_settings(Request $request)
    {
        $payments = Sitesetting::where('id', 1)->first();
        if (isset($payments)) {
            # code...
            $payments->btc_address = $request->btc_address;
            $payments->paypal = $request->paypal;
            $payments->eth = $request->eth;
            $payments->usdt = $request->usdt;
            $payments->xrp = $request->xrp;
            $payments->sol = $request->sol;
            $payments->xlm = $request->xlm;
            $payments->usdttrc20 = $request->usdttrc20;

            $payments->withdrawal_minimum = $request->withdrawal_minimum;
            $payments->withdrawal_maximum = $request->withdrawal_maximum;
            $payments->companyabouttitle = $request->companyabouttitle;
            $payments->companyabouttext = $request->companyabouttext;
            $payments->companyname = $request->companyname;
            $payments->companyrunningdays = $request->companyrunningdays;
            $payments->companyemail= $request->companyemail;
            $payments->companylocation = $request->companylocation;
            $payments->companyphone = $request->companyphone;

            if ($payments->save()) {
                # code...
                return redirect()->route('adminindex')->with('success', 'Settings updated succesfuly');
            } else {
                # code...
                return redirect()->route('adminindex')->with('error', 'Settings update failed');
            }
        } else {
            # code...
            $payments = new Sitesetting();
            $payments->btc_address = $request->btc_address;
            $payments->paypal = $request->paypal;
            $payments->eth = $request->eth;
            $payments->usdt = $request->usdt;
            $payments->xrp = $request->xrp;
            $payments->sol = $request->sol;
            $payments->xlm = $request->xlm;
            $payments->usdttrc20 = $request->usdttrc20;

            $payments->withdrawal_minimum = $request->withdrawal_minimum;
            $payments->withdrawal_maximum = $request->withdrawal_maximum;
            $payments->companyabouttitle = $request->companyabouttitle;
            $payments->companyabouttext = $request->companyabouttext;
            $payments->companyname = $request->companyname;
            $payments->companyrunningdays = $request->companyrunningdays;
            $payments->companyemail= $request->companyemail;
            $payments->companylocation = $request->companylocation;
            $payments->companyphone = $request->companyphone;

            if ($payments->save()) {
                # code...
                return redirect()->route('adminindex')->with('success', 'Settings updated succesfuly');
            } else {
                # code...
                return redirect()->route('payments_settings')->with('error', 'payments settings update failed');
            }
        }
    }

    public function pages()
    {
        $aboutCompany = Companydetail::where("id", 1)->first();
        $faqs = Faq::all();
        $data = ["companyDetail" => $aboutCompany, "faqs" => $faqs];
        return view("admin.pages", $data);
    }

    public function account_all()
    {
        $users = User::join('funds', 'users.id', '=', 'funds.userid')->select('users.*', 'funds.id as fid', 'funds.balance',  'funds.balance', 'funds.currentinvestment', 'funds.totalbalance', 'funds.currentprofit', 'funds.totalprofit', 'funds.bonus')->get();
        $data = ["users" => $users];
        return view("admin.account_all", $data);
    }


    public function account_active()
    {
        $users = User::where('blocked', 0)->join('funds', 'users.id', '=', 'funds.userid')->select('users.*', 'funds.id as fid', 'funds.balance',  'funds.balance', 'funds.currentinvestment', 'funds.totalbalance', 'funds.currentprofit', 'funds.totalprofit', 'funds.bonus')->get();
        $data = ["users" => $users];
        return view("admin.account_active ", $data);
    }

    function account_all_email_verified()
    {

        $users = User::where('email_verified_at', '!=', null)->join('funds', 'users.id', '=', 'funds.userid')->select('users.*', 'funds.id as fid', 'funds.balance',  'funds.balance', 'funds.currentinvestment', 'funds.totalbalance', 'funds.currentprofit', 'funds.totalprofit', 'funds.bonus')->get();
        $data = ["users" => $users];
        return view("admin.account_all_email_verified ", $data);
    }

    function account_all_email_unverified()
    {

        $users = User::where('email_verified_at', null)->join('funds', 'users.id', '=', 'funds.userid')->select('users.*', 'funds.id as fid', 'funds.balance',  'funds.balance', 'funds.currentinvestment', 'funds.totalbalance', 'funds.currentprofit', 'funds.totalprofit', 'funds.bonus')->get();
        $data = ["users" => $users];
        return view("admin.account_all_email_unverified ", $data);
    }

    function account_inactive()
    {

        $users = User::where('blocked', 1)->join('funds', 'users.id', '=', 'funds.userid')->select('users.*', 'funds.id as fid', 'funds.balance',  'funds.balance', 'funds.currentinvestment', 'funds.totalbalance', 'funds.currentprofit', 'funds.totalprofit', 'funds.bonus')->get();
        $data = ["users" => $users];
        return view("admin.account_inactive ", $data);
    }

    function deposits_active()
    {

        $deposits = Deposit::where('status', 1)->join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["deposits" => $deposits];
        return view("admin.deposits_active ", $data);
    }

    function deposits_all()
    {

        $deposits_all = Deposit::join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["deposits" => $deposits_all];
        return view("admin.deposits_all ", $data);
    }

    function deposits_pending()
    {

        $deposits_pending = Deposit::where('status', 0)->join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["deposits" => $deposits_pending];
        return view("admin.deposits_pending ", $data);
    }

    function withdrawals_all()
    {

        $withdrawals_all = Withdrawal::join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["withdrawals" => $withdrawals_all];
        return view("admin.withdrawals_all ", $data);
    }

    function withdrawals_completed()
    {

        $withdrawals_completed = Withdrawal::where('status', 1)->join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["withdrawals" => $withdrawals_completed];
        return view("admin.withdrawals_completed ", $data);
    }

    function withdrawals_pending()
    {

        $withdrawals_pending = Withdrawal::where('status', 0)->join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["withdrawals" => $withdrawals_pending];
        return view("admin.withdrawals_pending ", $data);
    }



    public function transactions_all()
    {

        $transactions_withdrawalss_all = Withdrawal::join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();

        $transactions_depositss_all = Deposit::join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["transactions_deposits" => $transactions_depositss_all, "transactions_withdrawals" => $transactions_withdrawalss_all];
        return view("admin.transactions_all ", $data);
    }


    public function transactions_pending()
    {

        $transactions_withdrawals = Withdrawal::where('status', 0)->join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();

        $transactions_deposits = Deposit::where('status', 0)->join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["transactions_deposits" => $transactions_deposits, "transactions_withdrawals" => $transactions_withdrawals];
        return view("admin.transactions_pending ", $data);
    }

    public function transactions_completed()
    {

        $transactions_withdrawals = Withdrawal::where('status', 1)->join('users', 'withdrawals.userid', '=', 'users.id')->select('withdrawals.*', 'users.id as uid', 'users.name',  'users.email')->get();

        $transactions_deposits = Deposit::where('status', 1)->join('users', 'deposits.userid', '=', 'users.id')->select('deposits.*', 'users.id as uid', 'users.name',  'users.email')->get();
        $data = ["transactions_deposits" => $transactions_deposits, "transactions_withdrawals" => $transactions_withdrawals];
        return view("admin.transactions_completed ", $data);
    }


    public function investmentplans()
    {
        $allplan = Investmentplan::all();
        $data = ["allplans" => $allplan];

        return view("admin.investmentplans", $data);
    }

    public function createinvestmentplan(Request $request)
    {
        $name = $request->name;
        $minimum = $request->minimum;
        $maximum = $request->maximum;
        $refpercent = $request->refpercent;
        $percentage = $request->percentage;
        $duration = $request->duration;
        $repeat = 1;
        $noofrepeat = $request->noofrepeat;
        $durationunit = $request->durationunit;
        $type = $request->type;
        // $duration = $durationunit *  $duration;

        $saveArray = [
            "name" => $name,
            "minimum" => $minimum,
            "maximum" => $maximum,
            "refpercent" => $refpercent,
            "percentage" => $percentage,
            "duration" => $duration,
            "repeat" => $repeat,
            "noofrepeat" => $noofrepeat,
            "durationunit" => $durationunit,
            "type" => $type,

        ];
        $result = $this->savedata(Investmentplan::class, "new", $saveArray);
        if ($result) {
            # code...
            return redirect()->route("investmentplans")->with("success", "Investment $name created succesfuly");
        } else {
            # code...
            return redirect()->route("investmentplans")->with("error", "failed to create $name investment");
        }
    }


    public function editinvestmentplan(Request $request)
    {
        $id = $request->id;
        $id  = (int)$id;
        $name = $request->name;
        $type = $request->type;
        $minimum = $request->minimum;
        $maximum = $request->maximum;
        $refpercent = $request->refpercent;
        $percentage = $request->percentage;
        $duration = $request->duration;
        $repeat = $request->repeat;
        $noofrepeat = $request->noofrepeat;

        $saveArray = [
            "name" => $name,
            "minimum" => $minimum,
            "maximum" => $maximum,
            "refpercent" => $refpercent,
            "percentage" => $percentage,
            "duration" => $duration,
            "type" => $type,
            "repeat" => 1,
            "noofrepeat" => $noofrepeat,

        ];
        $result = $this->savedata(Investmentplan::class, $id, $saveArray);
        if ($result) {
            # code...
            return back()->with("success", "Investment plan $name of type  $type edited succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to edit investment");
        }
    }




    public function faqs_view()
    {
        $allFaqs = Faq::all();
        $data = ["faqs" => $allFaqs];
        return view("admin.faqs_view", $data);
    }



    /**save faqs */
    public function faqs_save(Request $request)
    {
        $question = $request->question;
        $answer = $request->answer;
        $saveArray = [
            "question" => $question,
            "answer" => $answer
        ];

        $result = $this->savedata(Faq::class, "new", $saveArray);
        if ($result) {
            # code...
            return redirect()->route("faqs_view")->with("success", "Action was succesful! Faq created");
        } else {
            # code...
            return redirect()->route("faqs_view")->with("error", "Failed to create Faqs");
        }
    }






    function bonus_view(Request $req)
    {

        return view('admin.bonus_view');
    }

    function bonus_view_id(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        $data = [];
        $data['user'] = $user;

        return view('admin.bonus_view',$data);
    }






    function bonus_send(Request $req)
    {
        $email = $req->email;
        $amount = $req->amount;
        $sendmailbonus = $req->mail;
        $user = User::where('email', $email)->first();
        if ($user == null || $user->count() < 1) {
            # code...
            return redirect()->route('bonus_view')->with('error', 'Email does not exist uuuuuuuuuuuuuuuuuuuuuuuikdjdjdjjjjutututuuuu');
        }

        $user_funds = Fund::where('userid', $user->id)->first();
        $user_funds->balance = $user_funds->balance + $amount;
        $user_funds->bonus = $amount;
        if ($user_funds->save()) {
            # code...
            if ($sendmailbonus > 0) {

                $email = $user->email;
                $mail = "This is to notify you that you recieved a bonus on your account";
                $mailtitle = "Bonus Notification";
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

                Mail::to($email)->send(new Adminmail($emaildata));
            } else {
                # code...
                return redirect()->route('bonus_view')->with('success', 'Bonus addedd succesfuly');
            }
        } else {
            # code...
            return redirect()->route('bonus_view')->with('error', 'Error adding bonus');
        }
    }


    public function penalty_view()
    {

        return view("admin.penalty_view");
    }




    public function penalty_view_id(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        $data = [];
        $data['user'] = $user;

        return view("admin.penalty_view",$data);
    }



    public function penalty_send(Request $req)
    {

        $email = $req->email;
        $amount = $req->amount;
        $sendmailbonus = $req->mail;
        $user = User::where('email', $email)->first();
        if ($user == null || $user->count() < 1) {
            # code...
            return redirect()->route('penalty_view')->with('error', 'Email does not exist');
        }

        $user_funds = Fund::where('userid', $user->id)->first();
        $user_funds->balance = $user_funds->balance - $amount;
        if ($user_funds->save()) {
            # code...
            if ($sendmailbonus > 0) {

                $email = $user->email;
                $mail = "This is to notify you that you recieved a Penalty on your account and $amount have been applied as penalty";
                $mailtitle = "Penalty Notification";
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

                Mail::to('harrigold.18@gmail.com')->send(new Adminmail($emaildata));
                return back()->with('success', 'Bonus addedd succesfuly and email sent too notify user');
            } else {
                # code...
                return back()->with('success', 'Bonus addedd succesfuly');
            }
        } else {
            # code...
            return redirect()->route('penalty_view')->with('error', 'Error adding bonus');
        }
        return view("admin.penalty_view");
    }



    function emails_read()
    {
        // $mailbox - It consists of the mailbox path of the server.
        // $username - It contains the username of the mail account.
        // $password - It contains password of the mail account.
        // imap_open('{imap.mail.yahoo.com:993/imap/ssl}INBOX','username','password');
        // imap_open('{imap.gmail.com:993/imap/ssl}INBOX','username','password');
        //         imap_open('{localhost:993/imap/ssl}INBOX','username','password');
        //         imap_search() - This function returns messages in an array matching the given search criteria.
        //         imap_search($stream, $criteria)
        //         $stream- It is the IMAP connection object returned by the imap_open() function.
        // $criteria- They are the search criteria delimited by the spaces. It has some pre-defined constants, like - ALL, ANSWERED, BODY, BCC, CC, etc.

        // $header = imap_headerinfo($stream, $particular_email_in_email_loop);
        // $header->date
        // $header->subject
        // $header->toaddress

        //     if (!function_exists('imap_open')) {
        //         echo "IMAP is not configured.";
        //         exit();
        //     }
        //     $mailbox = "{imap.mail.yahoo.com:993/imap/ssl}INBOX";
        //     $username = "mail username" ;
        //     $password = "mail password" ;
        //     $criteria= "ALL";
        $data = [];
        //     $stream = imap_open($mailbox, $username, $password) or die('Cannot connect to email: ' . imap_last_error());
        //    $mails =  imap_search($stream, $criteria);
        // $message = imap_body($stream, $particular_email_in_email_loop);
        //    $data['mails']= $mails;
        // $data['stream']= $stream;



        return view('admin.emails_read', $data);
    }


    function account_view_user(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        $userfund = Fund::where('userid', $req->id)->first();
        $deposit = Deposit::where('userid', $req->id)->get();
        $withdrawal = Withdrawal::where('userid', $req->id)->get();
        $referrals = Referral::where('olduseruserid', $req->id)->get();
        $investments = Investment::where('userid', $req->id)->get();
        $userid = $req->id;
        $userrefs = Referral::where("olduseruserid", $userid)->join('users', 'referrals.newuserid', '=', 'users.id')->select('users.*', 'referrals.id as refid', 'referrals.*')->get();



        $investmentplans = Investmentplan::all();
        $data = [];
        $data['investments'] = $investments;
        $data['userrefs'] = $userrefs;
        $data['investmentplans'] = $investmentplans;
        $data['user'] = $user;
        $data['referrals'] = $referrals;
        $data['fund'] = $userfund;
        $data['deposits'] = $deposit;
        $data['withdrawals'] = $withdrawal;

        return view('admin.account_view_user', $data);
    }


    public function deactivate_fund_tranfer(Request $req)
    {
        $userid = $req->id;
        $user_transfer = Fund::where('id', $userid)->first();
        $user_transfer->transfer = 0;
        if ($user_transfer->save()) {
            # code...
            return back()->with('success', 'Deactivation Succesful');
        } else {
            # code...
            return back()->with('error', 'Deactivation Failed');
        }
    }

    function activate_fund_tranfer(Request $req)
    {
        $userid = $req->id;
        $user_transfer = Fund::where('id', $userid)->first();
        $user_transfer->transfer = 1;
        if ($user_transfer->save()) {
            # code...
            return back()->with('success', 'Activation Succesful');
        } else {
            # code...
            return back()->with('error', 'Activation Failed');
        }
    }






    public function userdelete(Request $request)
    {
        $id = $request->id;
        $deuse = User::where("id", $id)->first();
        if ($deuse->delete()) {
            # code...
            return redirect()->route('account_all')->with("warning", "user deleted succesfuly");
        } else {
            # code...
            return redirect()->route('account_view_user',$deuse->id)->with("error", "deleting user failed");
        }
    }


    public function adminunblockuser(Request $request)
    {
        $id = $request->id;
        $deuse = User::where("id", $id)->first();
        $deuse->blocked = 0;
        if ($deuse->save()) {
            # code...
            return back()->with("success", "user unblocked successfuly");
        } else {
            # code...
            return back()->with("error", "failed to unblock user");
        }
    }
    public function adminblockuser(Request $request)
    {
        $id = $request->id;
        $deuse = User::where("id", $id)->first();
        $deuse->blocked = 1;
        if ($deuse->save()) {
            # code...
            return back()->with("success", "user blocked successfuly");
        } else {
            # code...
            return back()->with("error", "failed to block user");
        }
    }

    public function deletewithdrawal(Request $request)
    {
        $id = $request->id;
        $with= Withdrawal::where("id",$id)->first();
        $result = $with->delete();
        if ($result) {
            # code...
            return redirect()->route('account_all')->with("success", "withdrawal deleted succesfuly");
        } else {
            # code...
            return redirect()->route("account_all")->with("error", "failed to delete withdrawal");
        }
    }


    public function editwithdrawal(Request $request)
    {
        $id = $request->id;
        $id = (int)$id;
        $name = $request->name;
        $withdrawaldate = $request->withdrawaldate;
        $amount = $request->amount;
        $method = $request->method;
        $methodaccount = $request->methodaccount;
        $userid = $request->userid;

        $saveArray = [
            "withdrawaltdate" => $withdrawaldate,
            "amount" => $amount,
            "methodAccount" => $methodaccount,
            "method" => $method,
            "name" => $name
        ];
        $result = $this->savedata(Withdrawal::class, $id, $saveArray);
        if ($result) {
            # code...
            return back()->with("success", "withdrawal edited succesful");
        } else {
            # code...
            return back()->with("error", "failed to edit withdrawal");
        }
    }

    public function depositupdate(Request $request)
    {
        $id = $request->id;
        $id = intval($id);
        $userid = $request->userid;
        $depositdate = $request->depositdate;
        $amount = $request->amount;
        $saveArray = ["amount" => $amount, "depositdate" => $depositdate];
        $result = $this->savedata(Deposit::class, $id, $saveArray);
        if ($result) {
            # code...
            return back()->with("success", "deposit update was succesful");
        } else {
            # code...
            return back()->with("error", "failed to update deposit");
        }
    }

    public function deletedeposit(Request $request)
    {
        $id = $request->id;
        $id = intval($id);
        $userid = $request->userid;
        $result = Deposit::where('id', $id)->first();
        if ($result->delete()) {
            # code...
            return back()->with("success", "deposit deleted succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to delete deposit");
        }
    }

    public function user_password_reset_by_admin(Request $req)
    {


        $newpassword = $req->newpassword;
        $cnewpassword = $req->cnewpassword;
        $id = $req->id;

            if ($newpassword == $cnewpassword) {
                # code...
                $user = User::where('id',$id )->first();

                $user->password = Hash::make($req->newpassword);
                $au = $user->save();
                if ($au) {
                    # code...
                    return redirect()->route('account_view_user',$id)->with('success', 'password changed succesfuly');
                } else {
                    # code...
                    return redirect()->route('account_view_user',$id)->with('error', 'password not changed succesfuly');
                }
            } else {
                # code...
                return redirect()->route('account_view_user',$id)->with('error', 'new password and confirm password do not match');
            }

    }

    public function user_profile_update_by_admin(Request $req)
    {

        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $maximum = $req->maximum;
        $minimum = $req->minimum;
        $adminmessage = $req->adminmessage;



                $user = User::where('id',$id )->first();
                $fund = Fund::where('userid',$id )->first();

                $user->name = $name;
                $user->email = $email;
                $fund->maximum = $maximum;
                $fund->minimum = $minimum;
                $user->adminmessage = $adminmessage;
                $au = $user->save();
                $fs = $ufundser->save();
                if ($au && $fs) {
                    # code...
                    return redirect()->route('account_view_user',$id)->with('success', 'Update changed succesfuly');
                } else {
                    # code...
                    return redirect()->route('account_view_user',$id)->with('error', 'Failed to Update');
                }

    }


    public function admin_adddeposit(Request $request)
    {
        $depositamount = $request->depositamount;
        $email = $request->email;
        $name = $request->name;
        $depositdate = $request->depositdate;
        $method = $request->method;
        $methodaddress = $request->methodaddress;
        $id = $request->id;
        $userid = $request->userid;

        $saveArray = ["email" => $email, "name" => $name, 'methodAccount' => $methodaddress, "amount" => $depositamount, "depositdate" => $depositdate, "method" => $method, "userId" => $userid];
        $result = $this->savedata(Deposit::class, "new", $saveArray);
        if ($result) {
            # code...
            return redirect()->route("account_view_user", $userid)->with("success", "deposit added succesful");
        } else {
            # code...
            return redirect()->route("account_view_user", $userid)->with("error", "failed to add deposit");
        }
    }


    public function admin_addwithdrawal(Request $request)
    {
        $id = $request->id;
        $withdrawalamount = $request->amount;
        $method = $request->method;
        $account = $request->account;
        $withdrawaldate = $request->withdrawaldate;
        $name = $request->name;
        $userId = $request->userid;

        $saveArray = [
            "withdrawaltdate" => $withdrawaldate,
            "amount" => $withdrawalamount,
            "methodaccount" => $account,
            "method" => $method,
            "name" => $name,
            "userid" => $userId,
        ];
        $result = $this->savedata(Withdrawal::class, "new", $saveArray);
        if ($result) {
            # code...
            return redirect()->route("account_view_user", $userId)->with("success", "withdrawal added succesful");
        } else {
            # code...
            return redirect()->route("account_view_user", $userId)->with("error", "failed to add withdrawal");
        }
    }


    public function runninginvestments()
    {

        $runninginvestments = Investment::where("investmentStatus", 0)->get();
        $data = ["runninginvestments" => $runninginvestments];
        return view("admin.runninginvestments", $data);
    }








    public function editinvestment(Request $request)
    {
        $id = $request->id;
        $id = (int)$id;
        $investmentplan = $request->investmentplan;
        $investmentpercent = $request->investmentpercent;
        $investmentdate = $request->investmentdate;
        $investmentduration = $request->investmentduration;
        $investmentprofit = $request->investmentprofit;
        $investmenttotalprofit = $request->investmenttotalprofit;
        $investmentmaturitydate = $request->investmentmaturitydate;

        $investmentamount = $request->investmentamount;
        $type = $request->type;
        $gotteninvestmentprofit = $request->gotteninvestmentprofit;


        $saveArray = [
            "investmentplan" => $investmentplan,
            "investmentpercent" => $investmentpercent,
            "investmentdate" => $investmentdate,
            "investmentduration" => $investmentduration,
            "investmentprofit" => $investmentprofit,
            "investmenttotalprofit" => $investmenttotalprofit,
            "investmentmaturitydate" => $investmentmaturitydate,

            "investmentamount" => $investmentamount,
            "type" => $type,
            "gotteninvestmentprofit" => $gotteninvestmentprofit,


        ];
        $result = $this->savedata(Investment::class, $id, $saveArray);
        if ($result) {
            # code...
            return back()->with("success", "Investment edited succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to edit investment");
        }
    }
    public function deleteinvestment(Request $request)
    {
        $id = $request->id;
        $result = $this->deleteRow(Investment::class, $id);
        if ($result) {
            # code...
            return back()->with("success", "Investment deleted succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to delete investment");
        }
    }


    public function allreferrals(Request $request)
    {

        $allrefs = Referral::join('users', 'referrals.olduseruserid', '=', 'users.id')->select('users.*', 'referrals.id as refid', 'referrals.status as refstatus', 'referrals.*')->get();

        $data = ["allrefs" => $allrefs];
        return view("admin.allreferrals", $data);
    }



    public function payreferral(Request $request)
    {
        $id = $request->id;
        $saveArray = [
            "status" => 1,
        ];

        $result = Referral::where("id", $id)->first();
        $result->status = 1;
        $result->save();
        
        if ($result) {
            # code...
            return back()->with("success", "Referral marked as paid");
        } else {
            # code...
            return back()->with("error", "Failed to mark reffera as paid");
        }
    }

    public function delreferral(Request $request)
    {
        $id = $request->id;
        $result = deleteRow(Referral::class, $id);
        if ($result) {
            # code...
            return back()->with("success", "Referral deleted succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to delete Referral");
        }
    }



    public function approve_deposit(Request $request)
    {
        $depo_id = $request->id;
        $depo_to_approve = Deposit::where('id', $depo_id)->first();
        $user_fund = Fund::where('userid', $depo_to_approve->userId)->first();
        $bal = $user_fund->balance;
        $totaldepost = $user_fund->totaldepost;
        $deposit_pending = $user_fund->deposit_pending;
        $user_fund->balance =  $bal  +  $depo_to_approve->amount;
        $user_fund->totaldepost = $totaldepost  +  $depo_to_approve->amount;
        $user_fund->deposit_pending = $deposit_pending - $depo_to_approve->amount;
        $fu = $user_fund->save();
        $depo_to_approve->status = 1;
        $dep = $depo_to_approve->save();
        if ($fu && $dep) {
            # code...
            $mail = "Your deposit request of $$depo_to_approve->amount have been received in your account and your account credited ";
            $mailtitle = "Deposit Approval Notification";
            $email = User::where('id', $depo_to_approve->userId)->first()->email;
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
            Mail::to($email)->send(new Adminmail($emaildata));
            return back()->with('success', 'Deposit aaproved succesfuly');
        } else {
            # code...
            return back()->with('error', 'Deposit aaproval failed');
        }
    }




    public function markwithdrawalpaid(Request $request)
    {
        $id = $request->id;

        $userwithdrawal = Withdrawal::where('id', $id)->first();

        $userwithdrawal->status = 1;
        $result = $userwithdrawal->save();
        if ($result) {
            # code...
$userfund =Fund::where('userid',$userwithdrawal->userid)->first();
$userfund->balance = $userfund->balance-$userwithdrawal->amount;
$userfund->save();


            $userdetail = User::where('id', $userwithdrawal->userid)->first();
            $email = $userdetail->email;
            $mail = "Good day $userdetail->name \r\n Your withdrawal of $$userwithdrawal->amount is successful,
             you can check your transaction status at https://www.blockchain.com/btc/address/$userwithdrawal->methodaccount. \r\n
             Log into your account to check your statistics: $this->website";
            $mailtitle = "Withdrawal successful";
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];
            Mail::to($email)->send(new Adminmail($emaildata));
            //             $siteemail = "info@topfidelitytrade.com";
            //             $headers= 'From: '.$siteemail.' '. "\r\n";
            // $headers.= "MIME-Version: 1.0" . "\r\n";
            //             mail($email, $mailtitle,$mail, $headers);



            return back()->with("success", "withdrawal paid succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to mark withdrawal as paid");
        }
    }


    public function deleteinvestmentplan(Request $request)
    {
        $id = $request->id;
        $result = Investmentplan::where('id', $id)->first()->delete();
        if ($result) {
            # code...
            return back()->with("success", "Investment plan deleted succesfuly");
        } else {
            # code...
            return back()->with("error", "failed to delete Investment plan");
        }
    }



public function faqs_edit(Request $request)
{
    $id =  $request->id;
    $id = (int)$id;
    $question =  $request->question;
    $answer =  $request->answer;

    $saveArray = [
        'question' => $question,
        'answer' => $answer,
    ];

    $result = $this->savedata(Faq::class, $id, $saveArray);

    if ($result) {
        # code...
        return back()->with("success", "Faq Update was succesful");
    } else {
        # code...
        return back()->with("error", "Failed to update  Faq try again!");
    }
}


// delet faqs
public function faqs_delete(Request $request)
{
    $id = intval($request->id);
    $result = Faq::where('id',$id)->first()->delete();
    if ($result) {
        # code...
        return back()->with("warning", "Faq deleted successfuly");
    } else {
        # code...
        return back()->with("error", "Failed to delete Faqs");
    }
}


function charges_set_save (Request $request ) {

$payments = Sitesetting::where('id', 1)->first();
if (isset($payments)) {
    # code...
    $payments->depositcharge = $request->depositcharge;
    $payments->withdrawlcharges = $request->withdrawlcharges;

    if ($payments->save()) {
        # code...
        return back()->with('success', 'payments charges updated succesfuly');
    } else {
        # code...
        return back()->with('error', 'payments charges update failed, set up deposit methods before setting up charges');
    }
}
return back()->with('error', 'payments charges update failed, set up deposit methods before setting up charges');

}

function charges_set ( ) {

    $paymentscharges = Sitesetting::where('id', 1)->first();
    $data=[];
    $data['paymentscharges']=$paymentscharges;
    return view('admin.charges',$data);
    }




public function statistics_set()
{
    $company_features = Feature::where('id', 1)->first();
    $data = [];
    $data['feature'] = $company_features;
    return view('admin.setfeatures', $data);
}


function statistics_set_post(Request $req)
{
    $totalusers  = $req->totalusers;
    $totaldeposit =  $req->totaldeposit;
    $totalwithdrawn = $req->totalwithdrawn;
    $started = $req->started;
    $onlinevisitors = $req->onlinevisitors;
    $features = Feature::where('id', 1)->first();
    if ($features != null) {
        # code...
        $features->totalusers = $totalusers;
        $features->totaldeposit = $totaldeposit;
        $features->totalwithdrawn = $totalwithdrawn;
        $features->started = $started;
        $features->onlinevisitors = $onlinevisitors;
        if ($features->save()) {
            # code...
            return back()->with('success', 'saved succesfully');
        } else {
            # code...
            return back()->with('error', 'error updating');
        }
    } else {
        # code...
        $features = new Feature();
        $features->totalusers = $totalusers;
        $features->totaldeposit = $totaldeposit;
        $features->totalwithdrawn = $totalwithdrawn;
        $features->started = $started;
        $features->onlinevisitors = $onlinevisitors;
        if ($features->save()) {
            # code...
            return back()->with('success', 'saved succesfully');
        } else {
            # code...
            return back()->with('error', 'error updating');
        }
    }
}




public function cards()
{

    $users = Card::all();
    $data = ["cards" => $users];
    return view("admin.cards", $data);
}




   // FrankS functions here

    public function testimonials()
    {

        // return the testimonials from the database here
        $testimonials = Testimonial::all();
        // dd($testimonials);

        $data = ["testimonials" => $testimonials];


        return view('admin.testimonial', $data);
    }

    public function storeTestimonials(Request $request)
    {

        $name = $request->name;
        $message = $request->message;

        // dd($request);

        $saveArray = [
            'name' => $name,
            'message' => $message,

        ];

        $result = $this->savedata(Testimonial::class, "new", $saveArray);
        if ($result) {
            # code...
            return redirect()->route("testimonials")->with("success", "Added Successfully");
        } else {
            # code...
            return redirect()->route("testimonials")->with("error", "Failed to add try again!");
        }
    }



    
    function editbalance(Request $req)
    {

        $balance = $req->balance;
        $currentinvestment = $req->currentinvestment;
        $totalprofit = $req->totalprofit;
        $currentprofit = $req->currentprofit;
        $userId = $req->userid;


        $user_funds = Fund::where('userid', $userId)->first();

        $user_funds->balance = $balance;
        $user_funds->currentinvestment = $currentinvestment;
        $user_funds->totalprofit = $totalprofit;
        $user_funds->currentprofit = $currentprofit;


        if ($user_funds->save()) {
            # code...
            return back()->with('success', 'Account balance edited succesfuly');
        } else {
            # code...
            return back()->with('error', 'Error editing account balance');
        }
    }









































































    // public function emailmgt()
    // {

    //     $users = User::all();
    //     $data = ["allsuer" => $users];
    //     return view("admin.emailmgt", $data);
    // }

    // public function sendemail(Request $request)
    // {
    //     $id = $request->id;
    //     return view("admin.sendemail", ["id" => $id]);
    // }

    public function emails_send_bulk(request $request)
    {
        if ($request->id > 0) {
            # code...
            $deuser = User::where("id", $request->id)->first();
            $data = [];
            $data['id'] = $request->id;
            $data['useremail'] = $deuser->email;
            return view("admin.emails_send_bulk", $data);
        }
        return view("admin.emails_send_bulk");
    }

    public function sendmail(Request $request)
    {
        $mailtitle = $request->mailtitle;
        $mail = $request->mail;
        $userid =  $request->userid;
        if (isset($userid)) {
            # code...
            $user = User::where("id", $userid)->first();
            $email = $user->email;
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            Mail::to($email)->send(new Adminmail($emaildata));

            return back()->with("success", "Email sent to $email succesfuly");
        } else {
            # code...
            $users = User::all();
            foreach ($users as $user) {
                # code...
                $email = $user->email;
                $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

                Mail::to($email)->send(new Adminmail($emaildata));
            }

            return redirect()->route("emailmgt")->with("success", "Email sent to all users succesfuly");
        }



        return view("admin.sendemail");
    }






    //admin trades
     // 1. TRADER MANAGEMENT
     public function indexTraders() {
        $traders = Trader::all();
        return view('admin.traders.index', compact('traders'));
    }

    public function createTrader() {
        return view('admin.traders.create');
    }

    public function storeTrader(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:traders',
            'tradersprofilepic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
        ]);
    
        // Handle file upload for profile pic if exists
        if ($request->hasFile('tradersprofilepic')) {
            $fileName = time().'.'.$request->tradersprofilepic->extension();
            $request->tradersprofilepic->move(public_path('uploads/traders'), $fileName);
            $validatedData['tradersprofilepic'] = 'uploads/traders/' . $fileName;
        }
    
        Trader::create($validatedData);
    
        return redirect()->route('admin.traders.index')->with('success', 'Trader created successfully!');
    }
    

    public function editTrader(Trader $trader) {
        return view('admin.traders.edit', compact('trader'));
    }

    public function updateTrader(Request $request, Trader $trader) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:traders,email,'.$trader->id,
            'tradersprofilepic' => 'nullable|string',
        ]);

        $trader->update($validatedData);
        return redirect()->route('admin.traders.index')->with('success', 'Trader updated successfully!');
    }

    public function destroyTrader(Trader $trader) {
        $trader->delete();
        return redirect()->route('admin.traders.index')->with('success', 'Trader deleted successfully!');
    }

    // 2. TRADE MANAGEMENT
    public function indexTrades(Trader $trader) {
        $trades = $trader->trades;
        return view('admin.trades.index', compact('trader', 'trades'));
    }

    public function createTrade(Trader $trader) {
        return view('admin.trades.create', compact('trader'));
    } 

    public function storeTrade(Request $request, Trader $trader)
    {
        $validatedData = $request->validate([
            'minimum' => 'required|integer',
            'maximum' => 'required|integer',
            'average_percentage' => 'required|integer',
            'fees' => 'required|numeric',
            'investors' => 'required|integer',
            'nickname' => 'nullable|string'
        ]);
    
        $trader->trades()->create($validatedData);
    
        return redirect()->route('admin.trades.index', $trader->id)->with('success', 'Trade created successfully!');
    }
    
    

    public function editTrade(Trade $trade) {
        return view('admin.trades.edit', compact('trade'));
    }

    public function updateTrade(Request $request, Trade $trade)
    {
        $validatedData = $request->validate([
            'minimum' => 'required|integer',
            'maximum' => 'required|integer',
            'average_percentage' => 'required|integer',
            'fees' => 'required|numeric',
            'investors' => 'required|integer',
            'nickname' => 'nullable|string'
        ]);
    
        $trade->update($validatedData);
    
        return redirect()->route('admin.trades.index', $trade->trader->id)->with('success', 'Trade updated successfully!');
    }
    

    public function destroyTrade(Trade $trade) {
        $traderId = $trade->trader_id;
        $trade->delete();
        return redirect()->route('admin.trades.index', $traderId)->with('success', 'Trade deleted successfully!');
    }

    // 3. SUBSCRIPTION MANAGEMENT
    public function indexSubscriptions() {
        $subscriptions = TradeSubscription::with('trader', 'user')->get();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }



//kyc
// Function to display a list of all submitted KYC for admin
public function showAllSubmissions()
{
    // Fetch all KYC submissions
    
    $kycSubmissions = KycSubmission::with('user')->get(); // Including user details for reference

    return view('admin.kyc', compact('kycSubmissions'));
}

    // Admin: Show a specific KYC submission details
    public function showKycDetails($id)
    {
        // Fetch the specific KYC submission
        $kycSubmission = KycSubmission::findOrFail($id);

        // Show the KYC details to the admin
        return view('admin.kyc_detail', compact('kycSubmission'));
    }



public function verifyKYC($submissionId, Request $request)
{
    $kycSubmission = KycSubmission::findOrFail($submissionId);

    // Admin chooses to verify or reject
    $kycSubmission->update([
        'status' => $request->input('status') // 'verified' or 'rejected'
    ]);
    $user = User::where("id", $kycSubmission->user_id)->first();
            $email = $user->email;
            $mail = "Your Kyc has been approved and your profile is verified";
            $mailtitle = "KYC verification";
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            Mail::to($email)->send(new Adminmail($emaildata));

    return back()->with('success', 'KYC status updated.');
}


// Admin: Approve a KYC submission
public function approveKyc($id)
{
    // Find the KYC submission
    $kycSubmission = KycSubmission::findOrFail($id);

    // Update the status to verified
    $kycSubmission->status = 'verified';
    $kycSubmission->save();
    $kycid = $kycSubmission->user_id;


    $user = User::where("id", $kycid)->first();
            $email = $user->email;
            $mail = "Your Kyc has been approved and your profile is verified";
            $mailtitle = "KYC verification";
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            Mail::to($email)->send(new Adminmail($emaildata));


    return back()->with('success', 'KYC approved successfully.');
}

// Admin: Reject a KYC submission
public function rejectKyc(Request $request, $id)
{
    // Find the KYC submission
    $kycSubmission = KycSubmission::findOrFail($id);

    // Update the status to rejected
    $kycSubmission->status = 'rejected';
    $kycSubmission->save();

    $kycid = $kycSubmission->user_id;


    $user = User::where("id", $kycid)->first();
            $email = $user->email;
            $mail = "Your Kyc has been rejected please upload the exact required document, make sure the ocument are clear enough";
            $mailtitle = "KYC verification";
            $emaildata = ['data' => $email, 'email_body' => $mail, 'email_header' => $mailtitle];

            Mail::to($email)->send(new Adminmail($emaildata));

    return back()->with('success', 'KYC rejected.');
}

//VOUCHERS

  // Display a list of vouchers
  public function indexVouchers()
  {
      $vouchers = Voucher::all();
      return view('admin.vouchers.index', compact('vouchers'));
  }

  // Show form to create a voucher
  public function createVoucher()
  {
      return view('admin.vouchers.create');
  }

  // Store a new voucher in the database
  public function storeVoucher(Request $request)
  {
      $request->validate([
          'amount' => 'required|numeric',
          'voucher_code' => 'required|unique:vouchers,voucher_code',
          'expiry_date' => 'required|date',
          'status' => 'required'
      ]);

      Voucher::create($request->all());

      return redirect()->route('vouchers.index')->with('success', 'Voucher created successfully.');
  }

  // Show form to edit a voucher
  public function editVoucher($id)
  {
      $voucher = Voucher::findOrFail($id);
      return view('admin.vouchers.edit', compact('voucher'));
  }

  // Update a voucher in the database
  public function updateVoucher(Request $request, $id)
  {
      $request->validate([
          'amount' => 'required|numeric',
          'voucher_code' => 'required|unique:vouchers,voucher_code,' . $id,
          'expiry_date' => 'required|date',
          'status' => 'required'
      ]);

      $voucher = Voucher::findOrFail($id);
      $voucher->update($request->all());

      return redirect()->route('vouchers.index')->with('success', 'Voucher updated successfully.');
  }

  // Delete a voucher from the database
  public function deleteVoucher($id)
  {
      $voucher = Voucher::findOrFail($id);
      $voucher->delete();

      return redirect()->route('vouchers.index')->with('success', 'Voucher deleted successfully.');
  }


  public function proofindex()
  {
    
      $proofs = ProofOfPayment::all();
      return view('admin.proofs.index', compact('proofs'));
  }



  public function createinvestmentplanfrmtrade(Request $request)
  {
      // Fetch the last added Investmentplan
      $lastInvestmentPlan = Investmentplan::latest()->first();
      $lastTradeId = $lastInvestmentPlan ? $lastInvestmentPlan->name : 0; // Get the last trade_id or default to 0 if none exists
      
      // Fetch all trades with id greater than the lastTradeId
      $trades = Trade::where('id', '>', $lastTradeId)->get();
  
      // Check if there are any new trades to add
      if ($trades->isEmpty()) {
          return redirect()->route("investmentplans")->with("error", "No new trades found to add to Investmentplan");
      }
  
      // Loop through each trade and create new Investmentplan entries
      foreach ($trades as $trade) {
          // Prepare data for each investment plan based on the trade data
          $saveArray = [
              "name" => $trade->id, // Trade ID becomes the 'name' for the Investmentplan
              "minimum" => $trade->minimum, // Minimum from trade
              "maximum" => $trade->maximum, // Maximum from trade
              "refpercent" => 0, // Reference percentage set to 0
              "percentage" => $trade->average_percentage / 14, // Calculating percentage from average_percentage
              "duration" => 1, // Fixed duration
              "repeat" => 1, // Fixed repeat
              "noofrepeat" => 14, // Fixed number of repeats
              "durationunit" => 24, // Fixed duration unit (24 hours)
              "type" => 'stock plans', // Static type 'stock plans'
          ];
  
          // Save each trade as a new investment plan
          $result = $this->savedata(Investmentplan::class, "new", $saveArray);
  
          if (!$result) {
              // If saving fails for any trade, handle the error and continue
              return redirect()->route("investmentplans")->with("error", "Failed to create investment plan for Trade ID {$trade->id}");
          }
      }
  
      // After processing all trades, return success message
      return redirect()->route("investmentplans")->with("success", "All new trades have been added as investment plans successfully.");
  }



  public function marketindex()
    {
        $marketTrades = MarketTrade::with('subscription')->latest()->paginate(10);
        return view('admin.market-trades.index', compact('marketTrades'));
    } 

    /**
     * Show the form for creating a new market trade.
     */
    public function marketcreate()
    {
        // Eager load the related 'trade' and 'user' models for each subscription
        $subscriptions = TradeSubscription::with(['trade', 'user'])->get();
    
        return view('admin.market-trades.create', compact('subscriptions'));
    }
    

    /**
     * Store a newly created market trade in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subscription_id' => 'required|exists:trade_subscriptions,id',
            'symbol' => 'required|string|max:255',
            'type' => 'required|in:Perp,Cross',
            'tradetype' => 'required|in:long,short',
            'closing_pnl' => 'required|numeric',
            'entry_price' => 'required|numeric',
            'avg_close_price' => 'required|numeric',
            'closed_volume' => 'required|string',
            'opened_at' => 'required|date',
            'closed_at' => 'required|date',
        ], [
            'subscription_id.required' => 'The subscription ID is required.',
            'subscription_id.exists' => 'The selected subscription ID is invalid.',
            'symbol.required' => 'The symbol is required.',
            'symbol.string' => 'The symbol must be a valid string.',
            'symbol.max' => 'The symbol may not be greater than 255 characters.',
            'type.required' => 'The type is required.',
            'type.in' => 'The type must be either Perp or Cross.',
            'tradetype.required' => 'The trade type is required.',
            'tradetype.in' => 'The trade type must be either long or short.',
            'closing_pnl.required' => 'The closing PNL is required.',
            'closing_pnl.numeric' => 'The closing PNL must be a numeric value.',
            'entry_price.required' => 'The entry price is required.',
            'entry_price.numeric' => 'The entry price must be a numeric value.',
            'avg_close_price.required' => 'The average close price is required.',
            'avg_close_price.numeric' => 'The average close price must be a numeric value.',
            'closed_volume.required' => 'The closed volume is required.',
            'closed_volume.string' => 'The closed volume must be a valid string.',
            'opened_at.required' => 'The opening date is required.',
            'opened_at.date' => 'The opening date must be a valid date.',
            'closed_at.required' => 'The closing date is required.',
            'closed_at.date' => 'The closing date must be a valid date.',
        ]);
    
        MarketTrade::create($request->all());
    
        return redirect()->route('market-trades.index')->with('success', 'Market trade created successfully.');
    }
    
  






    // //user admin control




    // public function updateuser(Request $request)
    // {
    //     $id = $request->id;
    //     $name = $request->name;
    //     $email = $request->email;
    //     $phone = $request->phone;
    //     $balance = $request->balance;
    //     $saveArray = ["name" => $name, "email" => $email, "phone" => $phone, "balance" => $balance];
    //     $result = $this->savedata(User::class, $id, $saveArray);
    //     if ($result) {
    //         # code...
    //         return redirect()->route("viewuser", $id)->with("success", "update was succesful");
    //     } else {
    //         # code...
    //         return redirect()->route("viewuser", $id)->with("error", "failed to update");
    //     }
    // }















    // /**save news */

    // public function news()
    // {
    //     $news = Newspost::all();
    //     $data = ["newsposts" => $news];

    //     return view("admin.news", $data);
    // }


    // public function savenews(Request $request)
    // {
    //     $newstitle = $request->newstitle;
    //     $newscontent = $request->newscontent;

    //     $saveNewsArray = [
    //         "newstitle" => $newstitle,
    //         "newscontent" => $newscontent
    //     ];
    //     $result = $this->savedata(Newspost::class, "new", $saveNewsArray);
    //     if ($result) {
    //         return redirect()->route("news")->with("success", "Newsposted-successfully");
    //     } else {
    //         # code...
    //         return redirect()->route("news")->with("success", "Newsposting Not succesful try again");
    //     }
    // }

    // public function editnews(Request $request)
    // {
    //     $newstitle = $request->newstitle;
    //     $newscontent = $request->newscontent;
    //     $id = $request->id;
    //     $id = (int)$id;
    //     $saveNewsArray = [
    //         "newstitle" => $newstitle,
    //         "newscontent" => $newscontent
    //     ];
    //     $result = $this->savedata(Newspost::class, $id, $saveNewsArray);
    //     if ($result) {
    //         return redirect()->route("news")->with("success", "News edited-successfully");
    //     } else {
    //         # code...
    //         return redirect()->route("news")->with("success", "News editing Not succesful try again");
    //     }
    // }


    // public function deletenews(Request $request)
    // {
    //     $id = $request->id;

    //     $result = $this->deleteRow(Newspost::class, $id);
    //     if ($result) {
    //         # code...
    //         return redirect()->route("news", $id)->with("success", "news deleted succesfuly");
    //     } else {
    //         # code...
    //         return redirect()->route("news", $id)->with("error", "failed to delete news");
    //     }
    // }



    // public function topearners()
    // {

    //     $topEarners = Topearner::join('users', 'users.id', '=', 'Topearners.userid')->get();
    //     $data = ["topearners" => $topEarners];
    //     return view("admin.topearners", $data);
    // }

    // public function deltopearners(Request $request)
    // {
    //     $userid = $request->id;
    //     $result = $this->deleteRow(Topearner::class, $userid);
    //     if ($result) {
    //         # code...
    //         return redirect()->route("pages")->with("warning", "top user deleted successfuly");
    //     } else {
    //         # code...
    //         return redirect()->route("pages")->with("error", "Failed to delete top user");
    //     }
    // }


    // public function addtopearners(Request $request)
    // {
    //     $id = $request->id;
    //     $saveNewsArray = [
    //         "userid" => $id,
    //     ];
    //     $result = $this->savedata(Topearner::class, "new", $saveNewsArray);
    //     if ($result) {
    //         return redirect()->route("users")->with("success", "New top earner addedsuccessfully");
    //     } else {
    //         # code...
    //         return redirect()->route("users")->with("success", "adding Not succesful try again");
    //     }
    // }

    // public function payments_settings()
    // {
    //     $payments = Sitesetting::where('id', 1)->first();
    //     $data = [];
    //     $data['payment'] = $payments;
    //     return view('admin.paymentsettings', $data);
    // }

    // public function post_payments_settings(Request $request)
    // {
    //     $payments = Sitesetting::where('id', 1)->first();
    //     if (isset($payments)) {
    //         # code...
    //         $payments->btc_address = $request->btc_address;
    //         $payments->paypal = $request->paypal;
    //         $payments->eth = $request->eth;
    //         $payments->usdt = $request->usdt;
    //         $payments->xrp = $request->xrp;
    //         if ($payments->save()) {
    //             # code...
    //             return redirect()->route('payments_settings')->with('success', 'payments settings updated succesfuly');
    //         } else {
    //             # code...
    //             return redirect()->route('payments_settings')->with('error', 'payments settings update failed');
    //         }
    //     } else {
    //         # code...
    //         $payments = new Sitesetting();
    //         $payments->btc_address = $request->btc_address;
    //         $payments->paypal = $request->paypal;
    //         $payments->eth = $request->eth;
    //         $payments->usdt = $request->usdt;
    //         $payments->xrp = $request->xrp;
    //         if ($payments->save()) {
    //             # code...
    //             return redirect()->route('payments_settings')->with('success', 'payments settings updated succesfuly');
    //         } else {
    //             # code...
    //             return redirect()->route('payments_settings')->with('error', 'payments settings update failed');
    //         }
    //     }
    // }









    // public function setwithdrawal_limit(Request $req)
    // {
    //     $userid = $req->userid;
    //     $amount = $req->amount;

    //     $user_funds = Fund::where('userid', $userid)->first();
    //     $user_funds->withdrawal_limit =  $amount;
    //     if ($user_funds->save()) {
    //         # code...
    //         return redirect()->route('viewuser', $userid)->with('success', 'withdrawal Limit set succesfuly');
    //     } else {
    //         # code...
    //         return redirect()->route('viewuser', $userid)->with('error', 'Error setting withdrawal limit');
    //     }
    // }






    // //added new functionality

    // public function refsetting()
    // {
    //     $referral = referralpercent::where('id', 1)->first();
    //     $data = [];
    //     $data['referral'] = $referral;
    //     $feature =
    //         $data['feature'] = Feature::where('id', 1)->first();

    //     return view('admin.refsetting', $data);
    // }

    // public function post_referral_setting(Request $request)
    // {
    //     $referral = referralpercent::where('id', 1)->first();
    //     if (isset($referral)) {
    //         # code...
    //         $referral->firstref = $request->firstref;
    //         $referral->secondref = $request->secondref;
    //         $referral->thirdref = $request->thirdref;
    //         if ($referral->save()) {
    //             # code...
    //             return redirect()->route('refsetting')->with('success', 'referral settings updated succesfuly');
    //         } else {
    //             # code...
    //             return redirect()->route('refsetting')->with('error', 'referral settings update failed');
    //         }
    //     } else {
    //         # code...
    //         $referral = new referralpercent();
    //         $referral->firstref = $request->firstref;
    //         $referral->secondref = $request->secondref;
    //         $referral->thirdref = $request->thirdref;
    //         if ($referral->save()) {
    //             # code...
    //             return redirect()->route('refsetting')->with('success', 'referral settings updated succesfuly');
    //         } else {
    //             # code...
    //             return redirect()->route('refsetting')->with('error', 'referral settings update failed');
    //         }
    //     }
    // }





  


    // /**save faqs */
    // public function savecompanyfaq(Request $request)
    // {
    //     $question = $request->question;
    //     $answer = $request->answer;
    //     $saveArray = [
    //         "question" => $question,
    //         "answer" => $answer
    //     ];

    //     $result = $this->savedata(Faq::class, "new", $saveArray);
    //     if ($result) {
    //         # code...
    //         return redirect()->route("pages")->with("success", "Action was succesful! Faq created");
    //     } else {
    //         # code...
    //         return redirect()->route("pages")->with("error", "Failed to create Faqs");
    //     }
    // }




    // public function savecompanydetails(Request $request)
    // {

    //     $companyname =  $request->companyname;
    //     $runningDays =  $request->runningdays;
    //     $companyemail =  $request->companyemail;
    //     $companylocation =  $request->companylocation;
    //     $companyContact =  $request->companycontact;

    //     $saveArray = [
    //         'companyname' => $companyname,
    //         'runningDays' => $runningDays,
    //         'companyemail' => $companyemail,
    //         'companylocation' => $companylocation,
    //         'companyphone' => $companyContact
    //     ];

    //     $result = $this->savedata(Companydetail::class, null, $saveArray);

    //     if ($result) {
    //         # code...
    //         return redirect()->route("pages")->with("success", "Update was succesful");
    //     } else {
    //         # code...
    //         return redirect()->route("pages")->with("error", "Failed to update try again!");
    //     }
    // }
    // /** Save company about **/

    // public function savecompanyabout(Request $request)
    // {
    //     $aboutTitle = $request->about_title;
    //     $aboutText = $request->about_text;

    //     $saveArray = [
    //         'aboutTitle' => $aboutTitle,
    //         'aboutText' => $aboutText,

    //     ];


    //     $result = $this->savedata(Companydetail::class, null, $saveArray);
    //     if ($result) {
    //         # code...
    //         return redirect()->route("pages")->with("success", "Update was succesful! About company updated");
    //     } else {
    //         # code...
    //         return redirect()->route("pages")->with("error", "Failed to update try About company again!");
    //     }
    // }










}
