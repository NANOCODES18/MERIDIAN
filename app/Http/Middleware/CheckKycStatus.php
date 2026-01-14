<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\KycSubmission;
use Illuminate\Support\Facades\Auth; // Add this import

class CheckKycStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Fetch the KYC submission for the user
            $kyc = KycSubmission::where('user_id', $user->id)->first();

            // If KYC doesn't exist or is not verified, redirect to the KYC form page
            if (!$kyc || $kyc->status != 'verified') {
                return redirect()->route('kyc.form')->with('warning', 'Your KYC needs to be verified before proceeding.');
            }
        }

        return $next($request);
    }
}
