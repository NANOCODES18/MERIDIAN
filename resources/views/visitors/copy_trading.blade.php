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
<h1 class="text-white-stroke display-5">Copy Trading</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Home</li>
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
<h2 class="mb-4 pt-xxl-5">Trade Like an Expert in No Time At All</h2>
<h3 class="mb-4 pt-xxl-5">Or Earn Up to 50% Profit Share from Your Strategies </h3>
<p class="lead">You don’t need to be an expert to earn like one. Or spend hours in front of the charts. At least, not anymore! Just follow the experts and copy their trades or get up to 50% profit share* by sharing your own strategies for others to follow!</p>
<a class="btn btn-primary btn-rounded mt-4" href="{{ route('login') }}">Start Copy Trading</a>
<div class="list-style mt-5">
<ul class="list-unstyled">
<!-- <li class="d-flex align-items-center h6 mb-2"><i class="fas fa-check-circle me-3 text-primary"></i>Creative business work.</li> -->
<!-- <li class="d-flex align-items-center h6 mb-2"><i class="fas fa-check-circle me-3 text-primary"></i>A day with Sunshine.</li> -->
</ul>
</div>
</div>
<div class="col-lg-6 p-4 p-sm-5 p-xl-8 bg-fit text-center">
<img alt="" class="img-fluid" src="{{ asset('assets/copy-g.png') }}" style="max-width: 75%; margin: 10px auto;"/>
</div>
</div>
<!--===== End of row =====-->
</div>
</section>
<!-- =======================
  Work Process START -->
<section class="bg-light pattern-overlay-7 pb-2">
<div class="container">
<div class="row">
<!-- Step item -->
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">01</h2>
<div>
<h3 class="process-widget__title heading-sm text-sand mb-16">Join the Community</h3>
<p>Share your ideas and connect with a large community of enthusiastic investors.</p>
</div>
</div>
</div>
<!-- Step item -->
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">02</h2>
<div>
<h3 class="process-widget__title heading-sm text-sand mb-16">Copy Strategies</h3>
<p>Follow successful strategies, copy their trades, and profit when they do.</p>
</div>
</div>
</div>
<!-- Step item -->
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">03</h2>
<div>
<h3 class="process-widget__title heading-sm text-sand mb-16">Share Your Own</h3>
<p>Share your own strategies and earn up to 50% profit share on follower profits.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- =======================
  Work Process END -->
<!-- =======================
Portfolio START -->
<section class="py-5">
<div class="container">
<!-- Title -->
<div class="row d-flex justify-content-between align-items-center">
<div class="col-sm-8 mb-3">
<h2 class="display-6 mb-0 mb-sm-5 text-dark-stroke">Copy Trading</h2>
</div>
<div class="col-sm-4 mb-5 text-start text-sm-end">
<a class="btn btn-line text-dark mt-3" href="#">With over 10M+ clients, our community is huge, meaning there’s no shortage of strategies to follow as an Investor. It only takes a few minutes to start copying trades, whether you’re on Web, iOS, or Android.</a>
</div>
</div>
<!-- Portfolio -->
<div class="row">
<div class="col-lg-12">
<div class="tiny-slider dots-bordered">
<div class="tiny-slider-inner" data-arrow="false" data-autoplay="false" data-dots="true" data-items-lg="4" data-items-md="3" data-items-sm="2" data-items-xl="4" data-items-xs="1">
<!-- Card item START -->
<div class="item">
<a class="card card-metro" href="#">
<!-- Card Image -->
<div class="card-image">
<img alt="card image" src="{{ asset('assets/app/img/marketing/forex-cv.jpg') }}"/>
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<img alt="" class="w-40" src="assets/images/clients/light/01.html"/>
<div class="mt-auto card-text">
<h5 class="text-white">Forex</h5>
<!-- <p class="small text-white mb-0 text-truncate">What hasn’t been a great fit in e-mobility until now.</p> -->
</div>
</div>
</a>
</div>
<!-- Card item END -->
<!-- Card item START -->
<div class="item">
<a class="card card-metro" href="#">
<!-- Card Image -->
<div class="card-image" style="he">
<img alt="card image" src="{{ asset('assets/app/img/marketing/indecies-cv.svg') }}"/>
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<img alt="" class="w-40" src="assets/images/clients/light/02.html"/>
<div class="mt-auto card-text">
<h5 class="text-white">Indices</h5>
<!-- <p class="small text-white mb-0 text-truncate">Private brewery for excellent beer</p> -->
</div>
</div>
</a>
</div>
<!-- Card item END -->
<!-- Card item START -->
<div class="item">
<a class="card card-metro" href="#">
<!-- Card Image -->
<div class="card-image">
<img alt="card image" src="{{ asset('assets/app/img/marketing/crypto-cv.jpg') }}"/>
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<img alt="" class="w-40" src="assets/images/clients/light/03.html"/>
<div class="mt-auto card-text">
<h5 class="text-white">Crypto</h5>
<!-- <p class="small text-white mb-0 text-truncate">Viktoria Louise is the blossoming fashion label of Vicky Heiler</p> -->
</div>
</div>
</a>
</div>
<!-- Card item END -->
<!-- Card item START -->
<div class="item">
<a class="card card-metro" href="#">
<!-- Card Image -->
<div class="card-image">
<img alt="card image" src="{{ asset('assets/app/img/marketing/gold-cv.jpg') }}"/>
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<img alt="" class="w-40" src="assets/images/clients/light/04.html"/>
<div class="mt-auto card-text">
<h5 class="text-white">Commodities</h5>
<!-- <p class="small text-white mb-0 text-truncate">Art collector and architect Axel</p> -->
</div>
</div>
</a>
</div>
<!-- Card item END -->
</div>
</div>
</div>
</div><!-- row END -->
</div>
</section>
<!-- =======================
Portfolio END -->
<div class="faq-section-02 mt-5 section-padding-140" id="faq-section-02">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-7 col-md-8 col-xs-9">
<div class="cta-content-04 text-center">
<div class="cta-content-04__text-block">
<span class="subtitle">
             Have any question?
            </span>
<h2 class="cta-content-04__title heading-md text-black mb-res-60">
                  Frequently Asked Questions
                </h2>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-xl-10">
<div class="accordion accordion-icon" id="accordiongeneralfaq">
<div class="accordion-item">
<h5 class="accordion-header" id="heading-1">
<button aria-controls="collapse-1" aria-expanded="true" class="accordion-button fw-bold" data-bs-target="#collapse-1" data-bs-toggle="collapse" type="button">
    				        How does Copy Trading work?
    				      </button>
</h5>
<div aria-labelledby="heading-1" class="accordion-collapse collapse show" data-bs-parent="#accordiongeneralfaq" id="collapse-1">
<div class="accordion-body">
    				        As an Investor, you choose the strategies you want to follow and decide how much to invest in each. Any trades that are made or closed within the strategies will be replicated in your portfolio. As a Strategy Manager, you create your own strategies and share them with the community. You then earn profit share on any profits they make from following you.
    				      </div>
</div>
</div>
<div class="accordion-item">
<h5 class="accordion-header" id="heading-2">
<button aria-controls="collapse-2" aria-expanded="true" class="accordion-button fw-bold" data-bs-target="#collapse-2" data-bs-toggle="collapse" type="button">
    				        Can I be a Strategy Manager and a Copy Vox Partner?
    				      </button>
</h5>
<div aria-labelledby="heading-2" class="accordion-collapse collapse" data-bs-parent="#accordiongeneralfaq" id="collapse-2">
<div class="accordion-body">
    				        Of course! If you’re a Copy Vox Partner, you can become an Investor or Strategy Manager, with no trouble.
    				      </div>
</div>
</div>
<div class="accordion-item">
<h5 class="accordion-header" id="heading-3">
<button aria-controls="collapse-3" aria-expanded="true" class="accordion-button fw-bold" data-bs-target="#collapse-3" data-bs-toggle="collapse" type="button">
    				        Is Copy Trading good for new traders?
    				      </button>
</h5>
<div aria-labelledby="heading-3" class="accordion-collapse collapse" data-bs-parent="#accordiongeneralfaq" id="collapse-3">
<div class="accordion-body">
    				        Yes! Not only is our Copy Trading platform user-friendly and intuitive, but it also allows new traders to follow those more experienced. This allows you to participate in the markets, while continuing your trading education, and developing your own strategies.
    				      </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection('body')