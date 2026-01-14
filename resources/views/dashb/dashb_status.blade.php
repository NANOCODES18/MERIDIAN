@extends('dashblayout.dashlayout')
@section('body')






@if($kyc)
    @if($kyc->status == 'pending')
        <div class="alert alert-warning">Your KYC verification is pending.</div>
    @elseif($kyc->status == 'verified')
        <div class="alert alert-success">Your KYC is verified!</div>
    @elseif($kyc->status == 'rejected')
        <div class="alert alert-danger">Your KYC verification was rejected. Please resubmit.</div>
    @endif
@else
    <div class="alert alert-info">You have not submitted your KYC yet. Please complete the form.</div>
@endif











@endsection
