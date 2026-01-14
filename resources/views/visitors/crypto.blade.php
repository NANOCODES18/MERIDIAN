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
<h1 class="text-white-stroke display-5">Cryptocurrency</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Cryptocurrency</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<div class="mb-5">
<!--==========
	Start of banner section ==========-->
<section class="banner-mobile-app bg-fit position-relative p-0">
<div class="container-fluid">
<!--===== Start of row =====-->
<div class="row g-0">
<div class="col-lg-6 bg-light p-4 p-sm-5 p-xl-6 p-xxl-8">
<h1 class="mb-4 pt-xxl-5">Your gateway to Cryptocurrency &amp; beyond </h1>
<p class="lead">We are your access to digital asset investment services - ​Active management, algorithmically enabled. Advanced. Secure. Transparent​!</p>
<a class="btn btn-primary btn-rounded mt-4" href="{{ route('investments') }}">Discover more</a>
<div class="list-style mt-5">
<ul class="list-unstyled">
<!-- <li class="d-flex align-items-center h6 mb-2"><i class="fas fa-check-circle me-3 text-primary"></i>Creative business work.</li> -->
<!-- <li class="d-flex align-items-center h6 mb-2"><i class="fas fa-check-circle me-3 text-primary"></i>A day with Sunshine.</li> -->
</ul>
</div>
</div>
<div class="col-lg-6 p-4 p-sm-5 p-xl-8 bg-fit">
<img alt="" class="img-fluid" src="{{ asset('assets/new-web/images/bitcoin.jpg') }}" style="border-radius: 10px;"/>
</div>
</div>
<!--===== End of row =====-->
</div>
</section>
<!--==========
	End of banner section ==========-->
<!-- Page Content -->
<section class="about-section padding-top-140">
<div class="container">
<!--===== Start of row =====-->
<div class="row align-items-center">
<div class="col-lg-6 mb-5 mb-lg-0">
<img alt="" class="img-fluid" src="{{ asset('assets/new-web/images/bitcoin2.jpg') }}" style="border-radius: 10px;"/>
</div>
<div class="col-lg-5 offset-lg-1">
<div class="mb-5">
<span class="text-black">Cryptocurrency Trading</span>
<h2 class="mt-3">How Do Cryptocurrency Markets Work?</h2>
</div>
<p class="mt-4">
            Growing incredibly in popularity in recent years, cryptocurrencies have become the go-to investment option for many.
            With an ever-growing selection of cryptocurrencies added to the platform, offering balanced exposure and managed by Copy Vox's expert investment committee, We present many options for those who wish to trade and invest in the crypto market.
          </p>
<p class="mt-4">
            Cryptocurrency markets are decentralised, which means they are not issued or backed by a central authority such as a government. Instead, they run across a network of computers. However, cryptocurrencies can be bought and sold via exchanges and stored in ‘wallets’ . Unlike traditional currencies, cryptocurrencies exist only as a shared digital record of ownership, stored on a blockchain. When a user wants to send cryptocurrency units to another user, they send it to that user’s digital wallet. The transaction isn’t considered final until it has been verified and added to the blockchain through a process called mining. This is also how new cryptocurrency tokens are usually created.
          </p>
<p class="text-height">See our inestment plans and choose the one that suites you</p>
<div class="cta-content__button" style="margin-top: 50px;">
<a class="btn btn-primary hvr-fill-black" href="{{ route('investments') }}">Start Investing With Us
              <i class="fa-solid fa-arrow-right icon-arrow-corner"></i>
</a>
</div>
<!-- <a href="https://copyvox.com/welcome/investments" class="text-center text-underline link text-primary">View our Investment Scheme<i class="text-primary uil uil-arrow-right align-middle"></i></a> -->
</div>
</div>
<!--===== End of row =====-->
</div>
</section>
<div class="container about-section padding-top-140">
<script src="{{ asset('../../files.coinmarketcap.com/static/widget/coinMarquee.js') }}" type="text/javascript"></script><div coins="1,1027,825,3408,1839" currency="USD" id="coinmarketcap-widget-marquee" show-symbol-logo="true" theme="light" transparent="false"></div>
</div>
<section style="padding: 50px 0;">
<div class="container">
<div class="row justify-content-center">
<div class="col-8">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
<script async="" src="{{ asset('../../s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js') }}" type="text/javascript">
            {
            "width": '100%',
            "height": 400,
            "currencies": [
              "EUR",
              "USD",
              "JPY",
              "GBP",
              "CHF",
              "AUD",
              "CAD",
              "NZD",
              "CNY"
            ],
            "isTransparent": false,
            "colorTheme": "light",
            "locale": "en"
          }
            </script>
</div>
<!-- TradingView Widget END -->
</div>
</div>
</div>
</section>
</div>

@endsection('body')