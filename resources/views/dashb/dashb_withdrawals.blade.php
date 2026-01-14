@extends('dashblayout.dashlayout')
@section('body')
<div class="card-header text-center"><h4>Use the form to make withdrawal</h4></div>

<div class="card" style="width:100%;margin:auto;">
    <div class="card-body">


<form action="{{ route('userdashb_withdrawal_post') }}" method="post">
    @csrf

    <p class="card-text fw-extrabold text-left">Minimum Withdrawal - {{ $user_fund->withdrawal_minimum }}</p>
    <p class="card-text fw-extrabold text-left">Maximum Withdrawal - {{ $user_fund->withdrawal_maximum }}</p>

    <!-- Amount -->
    <div class="mb-4">
        <label for="amount">Enter Withdrawal Amount</label>
        <input 
            type="text" 
            class="form-control" 
            id="amount" 
            name="amount" 
            placeholder="Enter Withdrawal Amount"
        >
    </div>

    <!-- Coin Type -->
    <div class="mb-4">
        <label for="method">Choose Coin Type</label>
        <select class="form-control" name="method" id="method">
            <option value="Btc">BITCOIN</option>
            <option value="Eth">ETH</option>
            <option value="USDT">USDT</option>
            <option value="PAYPAL">PAYPAL</option>
            <option value="XRP">XRP</option>
        </select>
    </div>

    <!-- Wallet Address -->
    <div class="mb-4">
        <label for="address">Enter Wallet Address</label>
        <input 
            type="text" 
            class="form-control" 
            id="address" 
            name="address" 
            placeholder="Enter Wallet Address"
        >
    </div>

    <button type="submit" class="btn btn-primary" style="background-color: #8C7E52;">
        Withdraw
    </button>
</form>


      
</div>
  </div>


@endsection
