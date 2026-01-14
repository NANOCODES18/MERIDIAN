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
<h1 class="text-white-stroke display-5">Precious Metals</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Precious Metals</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<div class="mb-5">
<section class="about-section padding-top-140 overlay padding-bottom-140 bg-fit overlay-black-60 page-header-bg" data-jarallax='{"speed": 0.4}' style="background-image: url(assets/new-web/images/gol-bg.jpg); background-size: cover; ">
<div class="container">
<div class="row text-center justify-content-center">
<div class="col-lg-6">
<h1 class="text-white">Want to invest in Gold &amp; Silver!</h1>
<p class="lead text-white"> As we edge toward a post-pandemic world, many investors are looking for ways to prepare for future uncertainties. A solution for some may include investing in precious metals, such as gold and silver.</p>
<h2 class="scroll-down"></h2>
</div>
</div>
</div>
</section>
<!-- Solutions that work-->
<section class="about-section padding-top-140 bg-default">
<div class="container">
<div class="row row-30">
<div class="col-md-6 text-center">
<img alt="" class="mt-5" src="{{ asset('assets/new-web/images/gold.jpg') }}" style="width: 100%; border-radius: 8px; margin-bottom: 100px;"/>
<img alt="" class="mt-5" src="{{ asset('assets/new-web/images/gold2.jpg') }}" style="width: 100%; border-radius: 8px; margin-bottom: 100px;"/>
</div>
<div class="col-md-6 pt-xl-3">
<h2 class="alt-font text-dark font-weight-500 text-fast-blue">How You Can Invest in Gold and Silver</h2>
<p class="text-muted mt-4">
          One of the attractions of gold and silver is that both can be purchased in a variety of investment forms:
        </p>
<p class="mt-4">
<b>Physical Metals:</b> Unlike stocks and bonds, gold and silver can be purchased as physical assets, as either bars and coins held as part of a Copy Vox brokerage account or as American Eagle coins held in a retirement account. The metals would be held by a third-party depository, not Copy Vox, though investors can take physical delivery if they want to store it themselves.
        </p>
<p class="mt-4">
<b>Exchange-Traded Funds:</b>
          ETFs have become a popular way for investors to gain exposure to gold and silver, without having the responsibility of storing a physical asset. You can buy shares and keep them in a traditional brokerage account. The fund’s operator is responsible for handling the costs of holding a physical supply of gold or silver and charging an expense ratio. But investing in an ETF doesn’t give investors access to the underlying metals. Also, some precious-metal ETFs are taxed as collectibles and don’t benefit from lower longterm capital gains rates.
        </p>
<p class="mt-4">
<b>Mining Stocks and Funds:</b>
          Some investors see opportunity in owning shares of companies that mine for gold and silver, or mutual funds that hold portfolios of these miners.
        </p>
<p class="mt-4">
          Connect with your Copy Vox Financial Advisor to determine how adding gold or silver to your portfolio might help you achieve your long-term financial goals.
        </p>
<div class="cta-content__button" style="margin-top: 50px;">
<a class="btn btn-primary hvr-fill-black" href="{{ route('investments') }}">Start Investing With Us
              <i class="fa-solid fa-arrow-right icon-arrow-corner"></i>
</a>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="container">
<!-- TradingView Widget BEGIN -->
<!-- TradingView Widget END -->
</div>
</section>
</div>
@endsection('body')