<?php

use App\Mail\Adminmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('testemail', function () {
    return new Adminmail ;
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);


//ADMIN
//admin index
Route::get('/nanoadmin', [App\Http\Controllers\adminController::class, 'adminindex'])->name('adminindex');
Route::post('/post_company_settings', [App\Http\Controllers\adminController::class, 'post_company_settings'])->name('post_company_settings');
Route::post('/password_reset_save', [App\Http\Controllers\adminController::class, 'password_reset_save'])->name('password_reset_save');


//admin and account management
Route::get('/account_all', [App\Http\Controllers\adminController::class, 'account_all'])->name('account_all');
Route::get('/account_active', [App\Http\Controllers\adminController::class, 'account_active'])->name('account_active');

Route::get('/account_all_email_unverified', [App\Http\Controllers\adminController::class, 'account_all_email_unverified'])->name('account_all_email_unverified');

Route::get('/account_all_email_verified', [App\Http\Controllers\adminController::class, 'account_all_email_verified'])->name('account_all_email_verified');

Route::get('/account_inactive', [App\Http\Controllers\adminController::class, 'account_inactive'])->name('account_inactive');


//admin and deposit managemant
Route::get('/deposits_active', [App\Http\Controllers\adminController::class, 'deposits_active'])->name('deposits_active');
Route::get('/deposits_pending', [App\Http\Controllers\adminController::class, 'deposits_pending'])->name('deposits_pending');
Route::get('/deposits_all', [App\Http\Controllers\adminController::class, 'deposits_all'])->name('deposits_all');

Route::get('/viewdeposit/{id}', [App\Http\Controllers\adminController::class, 'viewdeposit'])->name('viewdeposit');



//admin and withdrawal managemant

Route::get('/withdrawals_all', [App\Http\Controllers\adminController::class, 'withdrawals_all'])->name('withdrawals_all');
Route::get('/withdrawals_completed', [App\Http\Controllers\adminController::class, 'withdrawals_completed'])->name('withdrawals_completed');
Route::get('/withdrawals_pending', [App\Http\Controllers\adminController::class, 'withdrawals_pending'])->name('withdrawals_pending');


//admin Transactions

Route::get('/transactions_all', [App\Http\Controllers\adminController::class, 'transactions_all'])->name('transactions_all');

Route::get('/transactions_completed', [App\Http\Controllers\adminController::class, 'transactions_completed'])->name('transactions_completed');

Route::get('/transactions_pending', [App\Http\Controllers\adminController::class, 'transactions_pending'])->name('transactions_pending');

//admin create and manage investment plans
Route::post('/createinvestmentplan', [App\Http\Controllers\adminController::class, 'createinvestmentplan'])->name('createinvestmentplan');
Route::get('/investmentplans', [App\Http\Controllers\adminController::class, 'investmentplans'])->name('investmentplans');

Route::post('/editinvestment', [App\Http\Controllers\adminController::class, 'editinvestment'])->name('editinvestment');
Route::get('/deleteinvestment/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestment'])->name('deleteinvestment');
Route::post('/admin_make_investment_for_user', [App\Http\Controllers\adminController::class, 'admin_make_investment_for_user'])->name('admin_make_investment_for_user');


Route::get('/deleteinvestmentplan/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestmentplan'])->name('deleteinvestmentplan');
Route::post('/editinvestmentplan', [App\Http\Controllers\adminController::class, 'editinvestmentplan'])->name('editinvestmentplan');

//faqs delete and edit
// Route::get('/viewnews', [App\Http\Controllers\adminController::class, 'viewnews'])->name('viewnews');
Route::get('/faqs_view', [App\Http\Controllers\adminController::class, 'faqs_view'])->name('faqs_view');
Route::post('/faqs_edit', [App\Http\Controllers\adminController::class, 'faqs_edit'])->name('faqs_edit');
Route::get('/faqs_delete/{id}', [App\Http\Controllers\adminController::class, 'faqs_delete'])->name('faqs_delete');
Route::post('/faqs_save', [App\Http\Controllers\adminController::class, 'faqs_save'])->name('faqs_save');


//bonus
Route::post('/bonus_send', [App\Http\Controllers\adminController::class, 'bonus_send'])->name('bonus_send');
Route::get('/bonus_view_id/{id}', [App\Http\Controllers\adminController::class, 'bonus_view_id'])->name('bonus_view_id');

Route::get('/bonus_view', [App\Http\Controllers\adminController::class, 'bonus_view'])->name('bonus_view');


Route::get('/bonus_send', [App\Http\Controllers\adminController::class, 'bonus_send'])->name('bonus_send');

//penalty send
//penalty
Route::get('/penalty_view_id/{id}', [App\Http\Controllers\adminController::class, 'penalty_view_id'])->name('penalty_view_id');

Route::get('/penalty_view', [App\Http\Controllers\adminController::class, 'penalty_view'])->name('penalty_view');


Route::post('/penalty_send', [App\Http\Controllers\adminController::class, 'penalty_send'])->name('penalty_send');

//read emails

Route::get('/emails_read', [App\Http\Controllers\adminController::class, 'emails_read'])->name('emails_read');
Route::get('/emails_send_bulk', [App\Http\Controllers\adminController::class, 'emails_send_bulk'])->name('emails_send_bulk');

Route::get('/sendemail/{id}', [App\Http\Controllers\adminController::class, 'emails_send_bulk'])->name('sendemailid');

Route::post('/sendmail', [App\Http\Controllers\adminController::class, 'sendmail'])->name('sendmail');

//Charges Set
Route::get('/charges_set', [App\Http\Controllers\adminController::class, 'charges_set'])->name('charges_set');
Route::post('/charges_set_save', [App\Http\Controllers\adminController::class, 'charges_set_save'])->name('charges_set_save');



//statistics set
Route::get('/statistics_set', [App\Http\Controllers\adminController::class, 'statistics_set'])->name('statistics_set');

//statistics set
Route::post('/statistics_set_post', [App\Http\Controllers\adminController::class, 'statistics_set_post'])->name('statistics_set_post');


//messages
Route::get('/message_read', [App\Http\Controllers\adminController::class, 'message_read'])->name('message_read');


Route::get('/message_send', [App\Http\Controllers\adminController::class, 'message_send'])->name('message_send');


Route::get('/account_view_user/{id}', [App\Http\Controllers\adminController::class, 'account_view_user'])->name('account_view_user');



// //activate and deactivate funds tranfer

Route::get('/activate_fund_tranfer/{id}', [App\Http\Controllers\adminController::class, 'activate_fund_tranfer'])->name('activate_fund_tranfer');
Route::get('/deactivate_fund_tranfer/{id}', [App\Http\Controllers\adminController::class, 'deactivate_fund_tranfer'])->name('deactivate_fund_tranfer');


Route::get('/userdelete/{id}', [App\Http\Controllers\adminController::class, 'userdelete'])->name('userdelete');
Route::get('/adminunblockuser/{id}', [App\Http\Controllers\adminController::class, 'adminunblockuser'])->name('adminunblockuser');
Route::get('/adminblockuser/{id}', [App\Http\Controllers\adminController::class, 'adminblockuser'])->name('adminblockuser');


Route::post('/depositupdate', [App\Http\Controllers\adminController::class, 'depositupdate'])->name('depositupdate');
Route::get('/deletedeposit/{id}', [App\Http\Controllers\adminController::class, 'deletedeposit'])->name('deletedeposit');
Route::post('/admin_adddeposit', [App\Http\Controllers\adminController::class, 'admin_adddeposit'])->name('admin_adddeposit');
Route::post('/editwithdrawal', [App\Http\Controllers\adminController::class, 'editwithdrawal'])->name('editwithdrawal');
Route::get('/deletewithdrawal/{id}', [App\Http\Controllers\adminController::class, 'deletewithdrawal'])->name('deletewithdrawal');
Route::post('/admin_addwithdrawal', [App\Http\Controllers\adminController::class, 'admin_addwithdrawal'])->name('admin_addwithdrawal');
Route::get('/markwithdrawalpaid/{id}', [App\Http\Controllers\adminController::class, 'markwithdrawalpaid'])->name('markwithdrawalpaid');

Route::post('/user_password_reset_by_admin', [App\Http\Controllers\adminController::class, 'user_password_reset_by_admin'])->name('user_password_reset_by_admin');
Route::post('/user_profile_update_by_admin', [App\Http\Controllers\adminController::class, 'user_profile_update_by_admin'])->name('user_profile_update_by_admin');

// //referals
Route::get('/viewuserreferrals{id}', [App\Http\Controllers\adminController::class, 'viewuserreferrals'])->name('viewuserreferrals');

Route::get('/referrals', [App\Http\Controllers\adminController::class, 'referrals'])->name('referrals');
Route::get('/payreferral/{id}', [App\Http\Controllers\adminController::class, 'payreferral'])->name('payreferral');

Route::get('/delreferral/{id}', [App\Http\Controllers\adminController::class, 'delreferral'])->name('delreferral');
Route::get('/refsetting', [App\Http\Controllers\adminController::class, 'refsetting'])->name('refsetting');

Route::get('/allreferrals', [App\Http\Controllers\adminController::class, 'allreferrals'])->name('allreferrals');

Route::get('/approve_deposit/{id}', [App\Http\Controllers\adminController::class, 'approve_deposit'])->name('approve_deposit');

Route::get('/cards', [App\Http\Controllers\adminController::class, 'cards'])->name('cards');


//manipulate user balances
Route::post('/editbalance', [App\Http\Controllers\adminController::class, 'editbalance'])->name('editbalance');
Route::get('/testimonials', [App\Http\Controllers\adminController::class, 'testimonials'])->name('testimonials');

Route::post('/storeTestimonials', [App\Http\Controllers\adminController::class, 'storeTestimonials'])->name('storeTestimonials');

//admin trades
// Admin Dashboard Routes
Route::prefix('admin')->group(function () {

    // Trader Management Routes
    Route::get('/traders', [App\Http\Controllers\adminController::class, 'indexTraders'])->name('admin.traders.index');
    Route::get('/traders/create', [App\Http\Controllers\adminController::class, 'createTrader'])->name('admin.traders.create');
    Route::post('/traders', [App\Http\Controllers\adminController::class, 'storeTrader'])->name('admin.traders.store');
    Route::get('/traders/{trader}/edit', [App\Http\Controllers\adminController::class, 'editTrader'])->name('admin.traders.edit');
    Route::put('/traders/{trader}', [App\Http\Controllers\adminController::class, 'updateTrader'])->name('admin.traders.update');
    Route::delete('/traders/{trader}', [App\Http\Controllers\adminController::class, 'destroyTrader'])->name('admin.traders.destroy');

    // Trade Management Routes
    Route::get('/traders/{trader}/trades', [App\Http\Controllers\adminController::class, 'indexTrades'])->name('admin.trades.index');
    Route::get('/traders/{trader}/trades/create', [App\Http\Controllers\adminController::class, 'createTrade'])->name('admin.trades.create');
    Route::post('/traders/{trader}/trades', [App\Http\Controllers\adminController::class, 'storeTrade'])->name('admin.trades.store');
    Route::get('/trades/{trade}/edit', [App\Http\Controllers\adminController::class, 'editTrade'])->name('admin.trades.edit');
    Route::put('/trades/{trade}', [App\Http\Controllers\adminController::class, 'updateTrade'])->name('admin.trades.update');
    Route::delete('/trades/{trade}', [App\Http\Controllers\adminController::class, 'destroyTrade'])->name('admin.trades.destroy');

    // Subscription Management Route
    Route::get('/subscriptions', [App\Http\Controllers\adminController::class, 'indexSubscriptions'])->name('admin.subscriptions.index');
});
// Admin routes (requires admin authentication middleware)
Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('/admin/kyc', [App\Http\Controllers\adminController::class, 'showAllSubmissions'])->name('admin.kyc.index'); // List of all KYC submissions
    Route::get('/admin/kyc/{id}', [App\Http\Controllers\adminController::class, 'showKycDetails'])->name('admin.kyc.show'); // View specific KYC submission
    Route::post('/admin/kyc/{id}/approve', [App\Http\Controllers\adminController::class, 'approveKyc'])->name('admin.kyc.approve'); // Approve KYC
    Route::post('/admin/kyc/{id}/reject', [App\Http\Controllers\adminController::class, 'rejectKyc'])->name('admin.kyc.reject'); // Reject KYC
    Route::post('/admin/kyc/{id}/reject', [App\Http\Controllers\adminController::class, 'verifyKYC'])->name('kyc.verify'); // Reject KYC



    //voucher
    Route::get('/vouchers',[App\Http\Controllers\adminController::class, 'indexVouchers'])->name('vouchers.index');
    Route::get('/vouchers/create',[App\Http\Controllers\adminController::class, 'createVoucher'])->name('vouchers.create');
    Route::post('/vouchers/store',[App\Http\Controllers\adminController::class, 'storeVoucher'])->name('vouchers.store');
    Route::get('/vouchers/{id}/edit',[App\Http\Controllers\adminController::class, 'editVoucher'])->name('vouchers.edit');
    Route::post('/vouchers/{id}/update',[App\Http\Controllers\adminController::class, 'updateVoucher'])->name('vouchers.update');
    Route::delete('/vouchers/{id}',[App\Http\Controllers\adminController::class, 'deleteVoucher'])->name('vouchers.delete');


        // Route to view proofs (admin side)
    Route::get('/view/proofs', [App\Http\Controllers\adminController::class,'proofindex'])->name('viewproofs');
    Route::get('/seedinvestmentandtrades', [App\Http\Controllers\adminController::class,'createinvestmentplanfrmtrade'])->name('itseed');

//create fake markets trades


// List all market trades
Route::get('/market-trades', [App\Http\Controllers\adminController::class, 'marketindex'])->name('market-trades.index');

// Show the form to create a new market trade
Route::get('/market-trades/create', [App\Http\Controllers\adminController::class, 'marketcreate'])->name('market-trades.create');

// Store a new market trade
Route::post('/market-trades', [App\Http\Controllers\adminController::class, 'store'])->name('market-trades.store');








});

























//





















































//new user dashboard

Route::get('/dash_index', [App\Http\Controllers\Userdashcontroller::class, 'dash_index'])->name('dash_index');

Route::get('/dash_copytrades', [App\Http\Controllers\Userdashcontroller::class, 'dash_copytrades'])->name('dash_copytrades');

Route::get('/dashb_debit_apply', [App\Http\Controllers\Userdashcontroller::class, 'dashb_debit_apply'])->name('dashb_debit_apply');

Route::post('/dashb_debit_apply_post', [App\Http\Controllers\Userdashcontroller::class, 'dashb_debit_apply_post'])->name('dashb_debit_apply_post');


Route::get('/dashb_deposits_completed', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits_completed'])->name('dashb_deposits_completed');

Route::get('/dashb_deposits_history', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits_history'])->name('dashb_deposits_history');

Route::get('/dashb_deposits_pending', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits_pending'])->name('dashb_deposits_pending');

Route::get('/dashb_deposits', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits'])->name('dashb_deposits');

Route::get('/dashb_funds_tranfer', [App\Http\Controllers\Userdashcontroller::class, 'dashb_funds_tranfer'])->name('dashb_funds_tranfer');

Route::post('/dashb_funds_tranfer_save', [App\Http\Controllers\Userdashcontroller::class, 'dashb_funds_tranfer_save'])->name('dashb_funds_tranfer_save');


Route::get('/dashb_package_get_list', [App\Http\Controllers\Userdashcontroller::class, 'dashb_package_get_list'])->name('dashb_package_get_list');

Route::get('/plan_specific/{plan}', [App\Http\Controllers\Userdashcontroller::class, 'plan_specific'])->name('plan_specific');

Route::get('/dashb_plans_history', [App\Http\Controllers\Userdashcontroller::class, 'dashb_plans_history'])->name('dashb_plans_history');

Route::get('/dashb_plans_profit_expected', [App\Http\Controllers\Userdashcontroller::class, 'dashb_plans_profit_expected'])->name('dashb_plans_profit_expected');

Route::get('/dashb_plans_running', [App\Http\Controllers\Userdashcontroller::class, 'dashb_plans_running'])->name('dashb_plans_running');

Route::post('/dashb_plans', [App\Http\Controllers\Userdashcontroller::class, 'dashb_plans'])->name('dashb_plans');


Route::get('/dashb_profile', [App\Http\Controllers\Userdashcontroller::class, 'dashb_profile'])->name('dashb_profile');

Route::post('/dashb_profile_save', [App\Http\Controllers\Userdashcontroller::class, 'dashb_profile_save'])->name('dashb_profile_save');

Route::get('/dashb_referrals_active', [App\Http\Controllers\Userdashcontroller::class, 'dashb_referrals_active'])->name('dashb_referrals_active');

Route::get('/dashb_referrals_inactive', [App\Http\Controllers\Userdashcontroller::class, 'dashb_referrals_inactive'])->name('dashb_referrals_inactive');

Route::get('/dashb_referrals_view', [App\Http\Controllers\Userdashcontroller::class, 'dashb_referrals_view'])->name('dashb_referrals_view');

Route::get('/dashb_withdrawals_completed', [App\Http\Controllers\Userdashcontroller::class, 'dashb_withdrawals_completed'])->name('dashb_withdrawals_completed');

Route::get('/dashb_withdrawals_history', [App\Http\Controllers\Userdashcontroller::class, 'dashb_withdrawals_history'])->name('dashb_withdrawals_history');

Route::get('/dashb_withdrawals_pending', [App\Http\Controllers\Userdashcontroller::class, 'dashb_withdrawals_pending'])->name('dashb_withdrawals_pending');

Route::get('/dashb_withdrawals', [App\Http\Controllers\Userdashcontroller::class, 'dashb_withdrawals'])->name('dashb_withdrawals');


// franks routes

// depositsubmit

Route::post('/dashb_depositsubmit', [App\Http\Controllers\Userdashcontroller::class, 'dashb_depositsubmit'])->name('dashb_depositsubmit');


Route::post('/userdashb_deposit_request', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_deposit_request'])->name('userdashb_deposit_request');



Route::get('/dashb_deposits_pending', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits_pending'])->name('dashb_deposits_pending');

Route::get('/dashb_deposits_completed', [App\Http\Controllers\Userdashcontroller::class, 'dashb_deposits_completed'])->name('dashb_deposits_completed');

//user dashboard starts
Route::get('/userdashb', [App\Http\Controllers\Userdashcontroller::class, 'userdashb'])->name('userdashb');
Route::get('/userdash_pending_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdash_pending_deposit'])->name('userdash_pending_deposit');
Route::get('/userdash_approved_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdash_approved_deposit'])->name('userdash_approved_deposit');
Route::get('/userdash_pedinging_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdash_pedinging_withdrawal'])->name('userdash_pedinging_withdrawal');
Route::get('/userdashb_approved_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_approved_withdrawal'])->name('userdashb_approved_withdrawal');

Route::get('/userdashb_investment_plans', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_investment_plans'])->name('userdashb_investment_plans');
Route::get('/userdashb_current_investment', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_current_investment'])->name('userdashb_current_investment');
Route::get('/userdashb_expected_profit', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_expected_profit'])->name('userdashb_expected_profit');
Route::get('/userdashb_investment_history', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_investment_history'])->name('userdashb_investment_history');


Route::get('/userdashb_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_referrals'])->name('userdashb_referrals');
Route::get('/userdashb_active_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_active_referrals'])->name('userdashb_active_referrals');
Route::get('/userdashb_inactive_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_inactive_referrals'])->name('userdashb_inactive_referrals');



Route::get('/userdashb_account_summary', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_account_summary'])->name('userdashb_account_summary');


Route::get('/userdashb_top_earners', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_top_earners'])->name('userdashb_top_earners');



Route::get('/userdashb_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_deposit'])->name('userdashb_deposit');
Route::get('/userdashb_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_withdrawal'])->name('userdashb_withdrawal');


Route::get('/userdashb_profile', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_profile'])->name('userdashb_profile');
Route::get('/userdashb_wallet_address', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_wallet_address'])->name('userdashb_wallet_address');
Route::get('/userdashb_message', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_message'])->name('userdashb_message');
Route::get('/userdashb_notification', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification'])->name('userdashb_notification');

//plan processing
Route::post('/userdashb_plan', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_plan'])->name('userdashb_plan');

Route::post('/userdashb_withdrawal_post', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_withdrawal_post'])->name('userdashb_withdrawal_post');

//profile
Route::post('/userdashb_personal_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_personal_detail'])->name('userdashb_personal_detail');

Route::post('/userdashb_personal_address', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_personal_address'])->name('userdashb_personal_address');

Route::post('/userdashb_social_media', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_social_media'])->name('userdashb_social_media');

Route::get ('/userdashb_message_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_message_detail'])->name('userdashb_message_detail');

Route::get ('/userdashb_notification', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification'])->name('userdashb_notification');

Route::get ('/userdashb_notification_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification_detail'])->name('userdashb_notification_detail');

Route::get ('/userdashb_password_reset', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_password_reset'])->name('userdashb_password_reset');

Route::get ('/userdashb_password_reset_save', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_password_reset_save'])->name('userdashb_password_reset_save');

Route::post ('/userdashb_deposit_request', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_deposit_request'])->name('userdashb_deposit_request');

//profile pic upload
Route::post ('/userdashb_profile_pic', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_profile_pic'])->name('userdashb_profile_pic');

Route::get ('/userdashb_charts', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_charts'])->name('userdashb_charts');

Route::get ('/userdashb_map', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_map'])->name('userdashb_map');

//funds transfer
Route::get ('/userdashb_tranfer', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_tranfer'])->name('userdashb_tranfer');
Route::post ('/userdashb_tranfer', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_tranfer_post'])->name('userdashb_tranfer_post');

//specific investment packages
Route::get ('/stockplan', [App\Http\Controllers\Userdashcontroller::class, 'stockplan'])->name('stockplan');
Route::get ('/forexplan', [App\Http\Controllers\Userdashcontroller::class, 'forexplan'])->name('forexplan');

Route::get ('/realestateinvplan', [App\Http\Controllers\Userdashcontroller::class, 'realestateinvplan'])->name('realestateinvplan');
Route::get ('/cryptoplan', [App\Http\Controllers\Userdashcontroller::class, 'cryptoplan'])->name('cryptoplan');









//trades route

 
Route::get('/traders', [App\Http\Controllers\Userdashcontroller::class, 'showTraders'])->name('traders.list');
Route::get('/trader/{traderId}/trades', [App\Http\Controllers\Userdashcontroller::class, 'showTrades'])->name('trader.trades');
Route::post('/trade/copy/{tradeId}', [App\Http\Controllers\Userdashcontroller::class, 'copyTrade'])->name('trade.copy');
Route::get('/user/trades', [App\Http\Controllers\Userdashcontroller::class, 'getSubscribedTrades'])->name('user.trades');


Route::middleware('auth')->group(function () {
    Route::get('/kyc', [App\Http\Controllers\Userdashcontroller::class, 'showKycForm'])->name('kyc.form'); // Display KYC form
    Route::post('/kyc', [App\Http\Controllers\Userdashcontroller::class, 'submitKyc'])->name('kyc.submit'); // Submit KYC form
    Route::get('/kyc/status', [App\Http\Controllers\Userdashcontroller::class, 'showKycStatus'])->name('kyc.status'); // Show user KYC status
});
  

 // Route to upload proof of payment (user side)
 Route::get('upload-proof-of-payment', [App\Http\Controllers\Userdashcontroller::class, 'showUploadForm'])->name('proof_of_payment.form');

 Route::post('/upload-proof', [App\Http\Controllers\Userdashcontroller::class, 'store'])->name('proof.store');


 //fake trades i guess
 Route::get('/market-trades/traded', [App\Http\Controllers\Userdashcontroller::class, 'Tradesinsub'])->name('market-trades.user.index');

 Route::get('/subscriptions/{subscription}/trades', [App\Http\Controllers\Userdashcontroller::class, 'viewTrades'])
 ->name('subscriptions.trades');








//visitors routes

Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('/');
Route::get('/10', [App\Http\Controllers\VisitorController::class, 'func10'])->name('10');
Route::get('/2', [App\Http\Controllers\VisitorController::class, 'func2'])->name('2');
Route::get('/7', [App\Http\Controllers\VisitorController::class, 'func7'])->name('7');
Route::get('/9', [App\Http\Controllers\VisitorController::class, 'func9'])->name('9');
Route::get('/about', [App\Http\Controllers\VisitorController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\VisitorController::class, 'contact'])->name('contact');
Route::get('/copy_trading', [App\Http\Controllers\VisitorController::class, 'copy_trading'])->name('copy_trading');
Route::get('/crypto', [App\Http\Controllers\VisitorController::class, 'crypto'])->name('crypto');

Route::get('/gold', [App\Http\Controllers\VisitorController::class, 'gold'])->name('gold');
Route::get('/green_energy', [App\Http\Controllers\VisitorController::class, 'green_energy'])->name('green_energy');
Route::get('/hiw', [App\Http\Controllers\VisitorController::class, 'hiw'])->name('hiw');
Route::get('/index', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');
Route::get('/investments', [App\Http\Controllers\VisitorController::class, 'investments'])->name('investments');
Route::get('/privacy', [App\Http\Controllers\VisitorController::class, 'privacy'])->name('privacy');
Route::get('/stocks', [App\Http\Controllers\VisitorController::class, 'stocks'])->name('stocks');