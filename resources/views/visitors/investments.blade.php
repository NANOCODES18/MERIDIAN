@extends('layouts.spacedcustomlayout')
@section('body')

<!-- =======================
Header END -->
<!-- **************** MAIN CONTENT START **************** -->
<main>
<section class="bg-dark pattern-overlay-3 position-relative">
<div class="container">
<div class="row">
<div class="col-12">
<!-- Title -->
<h1 class="text-white-stroke display-5">Investments</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Investments</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<section class="bg-fit overlay padding-bottom-140 padding-top-140 page-header-bg" style="background-image: url(assets/new-web/images/inv.jpg);">
<div class="container">
<div class="row text-center justify-content-center">
<div class="col-lg-8">
<h1 class="text-white">Select a Scheme Now To Get More Profit</h1>
<p class="lead text-white">Simple, capability-rich packages to help elevate investor's portfolio and drive demand!</p>
<h2 class="scroll-down"></h2>
</div>
</div>
</div>
</section>
<section class="position-relative">
<div class="container">
<!-- Title -->
<div class="row">
<div class="col-12 text-center mb-5">
<span class="subtitle">Investment Options</span>
<h2 class="section-heading__title">Simple, capability-rich packages to help <span class="hedding-svg">elevate</span> investor's portfolio and drive demand.</h2>
</div>
</div>
<!-- Pricing -->
<div class="row">
<div class="col-lg-10 mx-auto">
<div class="row">
<!-- Pricing plan START -->
<div class="col-md-4">
<div class="card text-center mb-5">
<!-- Card Header -->
<div class="card-header">
<h4 class="mb-3">Crypto Currency</h4>
<h4 class="display-6 mb-2 text-dark-stroke text-light-shadow">2%</h4>
<span class="d-block">/ Day</span>
</div>
<!-- Card Body -->
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">$5,000 - $500,000</li>
<li class="mb-3">
<span class="">Affiliate Commission 8% </span>
</li>
<li class="mb-3">Unlimited updates</li>
<li class="mb-3">Dedicated Porfofolio Manager</li>
<li class="mb-3">24/7 dedicated Support </li>
</ul>
</div>
<!-- Card Footer -->
<div class="card-footer text-center">
<a class="btn btn-dark" href="{{ route('login') }}" type="button">Get Started</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-center mb-5">
<!-- Card Header -->
<div class="card-header">
<h4 class="mb-3">Stocks &amp; Options</h4>
<h4 class="display-6 mb-2 text-dark-stroke text-light-shadow">1.65%</h4>
<span class="d-block">/ Day</span>
</div>
<!-- Card Body -->
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">$10,000 - $500,000</li>
<li class="mb-3">
<span class="">Affiliate Commission 8% </span>
</li>
<li class="mb-3">Unlimited updates</li>
<li class="mb-3">Dedicated Porfofolio Manager</li>
<li class="mb-3">24/7 dedicated Support </li>
</ul>
</div>
<!-- Card Footer -->
<div class="card-footer text-center">
<a class="btn btn-dark" href="{{ route('login') }}" type="button">Get Started</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-center mb-5">
<!-- Card Header -->
<div class="card-header">
<h4 class="mb-3">Green Energy</h4>
<h4 class="display-6 mb-2 text-dark-stroke text-light-shadow">1.2%</h4>
<span class="d-block">/ Day</span>
</div>
<!-- Card Body -->
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">$20,000 - $750,000</li>
<li class="mb-3">
<span class="">Affiliate Commission 10% </span>
</li>
<li class="mb-3">Unlimited updates</li>
<li class="mb-3">Dedicated Porfofolio Manager</li>
<li class="mb-3">24/7 dedicated Support </li>
</ul>
</div>
<!-- Card Footer -->
<div class="card-footer text-center">
<a class="btn btn-dark" href="{{ route('login') }}" type="button">Get Started</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-center mb-5">
<!-- Card Header -->
<div class="card-header">
<h4 class="mb-3">Precious Metals</h4>
<h4 class="display-6 mb-2 text-dark-stroke text-light-shadow">1.2%</h4>
<span class="d-block">/ Day</span>
</div>
<!-- Card Body -->
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">$25,000 - $1,000,000</li>
<li class="mb-3">
<span class="">Affiliate Commission 15% </span>
</li>
<li class="mb-3">Unlimited updates</li>
<li class="mb-3">Dedicated Porfofolio Manager</li>
<li class="mb-3">24/7 dedicated Support </li>
</ul>
</div>
<!-- Card Footer -->
<div class="card-footer text-center">
<a class="btn btn-dark" href="{{ route('login') }}" type="button">Get Started</a>
</div>
</div>
</div>
<!-- Pricing plan END -->
</div>
</div>
</div><!--  Row END -->
<!-- Enterprise plan -->
<div class="row">
<div class="col-sm-12 mt-0 mt-md-4">
<div class="text-center">
<h4>Looking for enterprise plan? We offer discounts for large Trades! </h4>
<p class="m-0">If you have a larger-scale investment Option - Contact Us: <a href="mailto:{{ $company_features ? $company_features->companyemail : 'No company email set' }}">{{ $company_features ? $company_features->companyemail : 'No company email set' }}</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="section padding-bottom-140 padding-top-140 py-8" id="faqs">
<div class="container">
<div class="row align-items-center">
<div class="col-12">
<div class="section-title text-center mb-4 pb-2">
<h6 class="text-primary">FAQs</h6>
<!-- <h4 class="title fw-semibold mt-2 mb-3">Frequently Asked Questions</h4> -->
<h2 class="text-dark fw-semibold mt-2 mb-3">Frequently <span class="hedding-svg">Asked</span> Questions</h2>
</div>
</div><!--end col-->
</div><!--end row-->
<div class="row justify-content-center">
<div class="col-md-8">
<div class="accordion mt-4 pt-2" id="buyingquestion">
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOned93zj8wa6qy2frpkv7gh">
<button aria-controls="collapseOned93zj8wa6qy2frpkv7gh" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOned93zj8wa6qy2frpkv7gh" data-bs-toggle="collapse" type="button">
                            What happens to my data once the account is closed?                        </button>
</h2>
<div aria-labelledby="headingOned93zj8wa6qy2frpkv7gh" class="bg-dark accordion-collapse border-0 collapse show" data-bs-parent="#buyingquestion" id="collapseOned93zj8wa6qy2frpkv7gh">
<div class="accordion-body text-muted bg-white">
<p>Please be assured that we maintain this information with the same level of security as an active account and are not permitted to use it for any purpose other than meeting our legal record-keeping obligations. After the 5-year retention period, your data will be automatically deleted from our systems</p> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOne0coq6ml6j53tvr1g7pdx">
<button aria-controls="collapseOne0coq6ml6j53tvr1g7pdx" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOne0coq6ml6j53tvr1g7pdx" data-bs-toggle="collapse" type="button">
                            Who are you? And how are you backed?                        </button>
</h2>
<div aria-labelledby="headingOne0coq6ml6j53tvr1g7pdx" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOne0coq6ml6j53tvr1g7pdx">
<div class="accordion-body text-muted bg-white">
<p>We’re a global crypto finance company on a mission to make it possible for anyone, anywhere to help change the global economy. Our company was founded because we believed money should work like the internet — open, secure, free, everywhere. Today, we offer four products. We make it easy to invest in crypto even if you’ve never invested in crypto. With Us, you can print your own money like a paper — across the table or the ocean. Our OTC crypto desk moves over $0.99B each month. And our addition team players in poloniex welcomes one of the world’s largest exchanges.</p> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOne0f63810yj672sxrbo9q6">
<button aria-controls="collapseOne0f63810yj672sxrbo9q6" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOne0f63810yj672sxrbo9q6" data-bs-toggle="collapse" type="button">
                            What are the Payment Methods for investments/withdrawal?                        </button>
</h2>
<div aria-labelledby="headingOne0f63810yj672sxrbo9q6" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOne0f63810yj672sxrbo9q6">
<div class="accordion-body text-muted bg-white">
<p>We offer a variety of payment methods using cryptocurrencies (Bitcoin, Ethereum and USDT)</p> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOne22c45h164t5sume1qno8">
<button aria-controls="collapseOne22c45h164t5sume1qno8" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOne22c45h164t5sume1qno8" data-bs-toggle="collapse" type="button">
                            How long does it take for my deposit to be added to my account?                        </button>
</h2>
<div aria-labelledby="headingOne22c45h164t5sume1qno8" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOne22c45h164t5sume1qno8">
<div class="accordion-body text-muted bg-white">
<p>Your account will be updated as fast, as you deposit.</p> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOneyal7omv05s2f6pk86110">
<button aria-controls="collapseOneyal7omv05s2f6pk86110" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOneyal7omv05s2f6pk86110" data-bs-toggle="collapse" type="button">
                            Where can i find the status of my investments/withdrawal?                        </button>
</h2>
<div aria-labelledby="headingOneyal7omv05s2f6pk86110" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOneyal7omv05s2f6pk86110">
<div class="accordion-body text-muted bg-white">
<p>You can find full details on your transactions by following the steps below.<br/>
Go to ‘Dashboard’.<br/>
Click on the Investments.<br/>
Click on the Investment summary.<br/>
Find the relevant transaction.</p> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOneo1ng750w8vpk9j4f5dre">
<button aria-controls="collapseOneo1ng750w8vpk9j4f5dre" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOneo1ng750w8vpk9j4f5dre" data-bs-toggle="collapse" type="button">
                            How do i Fund my Trading Wallet                        </button>
</h2>
<div aria-labelledby="headingOneo1ng750w8vpk9j4f5dre" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOneo1ng750w8vpk9j4f5dre">
<div class="accordion-body text-muted bg-white">
<ol>
<li>Click on the Top Up on the sidebar</li>
<li>Click on add deposit</li>
<li>Enter the amount you wish to fund</li>
<li>Choose your mode of payment</li>
<li>Click on Process Deposit</li>
<li>On the next page you will see the payment address of your selected payment method</li>
<li>You can copy the address or scan the QR code to get the address</li>
<li>After successful payment click on the Upload Payment Proof</li>
<li>Upload a copy of your payment receipt for confirmation</li>
<li>After confirmation your account will be funded</li>
</ol> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOnetybf7g11j6x25o0u3r5z">
<button aria-controls="collapseOnetybf7g11j6x25o0u3r5z" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOnetybf7g11j6x25o0u3r5z" data-bs-toggle="collapse" type="button">
                            How do i place an Investment                        </button>
</h2>
<div aria-labelledby="headingOnetybf7g11j6x25o0u3r5z" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOnetybf7g11j6x25o0u3r5z">
<div class="accordion-body text-muted bg-white">
<ol>
<li>To invest click on “Investments” on the sidebar</li>
<li>Click on New Investments</li>
<li>All our plans will be displayed on the screen</li>
<li>Choose you preferred plan by clicking on “choose plan” button of the respective plan</li>
<li>Enter your investment amount</li>
<li>Choose your investment contract</li>
<li>Enter your investment description and click on Invest Now</li>
<li>And that’s all you need to do to invest. Your profits will now begin to accumulate based on your selected plan.</li>
</ol> </div>
</div>
</div>
<div class="accordion-item rounded border-0 shadow">
<h2 class="accordion-header bg-dark" id="headingOneb7y7zx1c5n5tuv5062i0">
<button aria-controls="collapseOneb7y7zx1c5n5tuv5062i0" aria-expanded="true" class="accordion-button border-0 bg-white" data-bs-target="#collapseOneb7y7zx1c5n5tuv5062i0" data-bs-toggle="collapse" type="button">
                            How do i request for Withdrawal                        </button>
</h2>
<div aria-labelledby="headingOneb7y7zx1c5n5tuv5062i0" class="bg-dark accordion-collapse border-0 collapse" data-bs-parent="#buyingquestion" id="collapseOneb7y7zx1c5n5tuv5062i0">
<div class="accordion-body text-muted bg-white">
<p>To withdraw your profits, please follow the steps below:</p>
<ol>
<li>Click on Withdraw from the sidebar</li>
<li>On the form provided, enter your wallet address</li>
<li>Choose your payment method, either BTC, USDT or ETH</li>
<li>Enter the amount you wish to withdraw</li>
<li>The last step is to enter a withdrawal description</li>
<li>Click on Request withdrawal</li>
</ol>
<p>Your withdrawal will be reviewed and approved after 3 confirmations from the blockchain network.</p> </div>
</div>
</div>
</div>
</div>
</div><!--end row-->
</div><!--end container-->
</section><!--end section-->@endsection('body')