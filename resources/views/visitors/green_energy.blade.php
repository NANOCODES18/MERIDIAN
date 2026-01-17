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
<h1 class="text-white-stroke display-5">Green Energy</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Green Energy</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<div class="mb-5">
<section class="bg-fit overlay padding-top-140 padding-bottom-140 page-header-bg" data-jarallax='{"speed": 0.4}' style="background-image: url(assets/new-web/images/green.jpg);">
<div class="container">
<div class="row text-center justify-content-center">
<div class="col-lg-6">
<h1 class="text-white">Investing in <br/> <span class="text-primary">Green Energy</span></h1>
<p class="lead text-white">
            Discover Investing In Renewable Energy. Get Instant Quality Results at Meridian Trades Now!
          </p>
<h2 class="scroll-down"></h2>
</div>
</div>
</div>
</section>
<section class="padding-top-140 padding-bottom-140 section">
<div class="container">
<!--===== Start of row =====-->
<div class="row align-items-center">
<div class="col-lg-6 mb-4 mb-lg-0">
<img alt="" class="img-fluid" src="{{ asset('assets/new-web/images/green2.jpg') }}"/>
</div>
<div class="col-lg-5 offset-lg-1">
<h6 class="text-dark">Green Energy</h6>
<h2 class="alt-font font-weight-500 text-fast-blue">What is Green Energy?</h2>
<p class="text-muted mt-4">
          Green energy is any energy type that is generated from natural resources, such as sunlight, wind or water. It often comes from renewable energy sources although there are some differences between renewable and green energy, which we will explore, below. The key with these energy resources are that they don’t harm the environment through factors such as releasing greenhouse gases into the atmosphere.
        </p>
<h4 class="mt-4">How Does it Work?</h4>
<p class="text-muted mt-4">
          As a source of energy, green energy often comes from renewable energy technologies such as solar energy, wind power, geothermal energy, biomass and hydroelectric power. Each of these technologies works in different ways, whether that is by taking power from the sun, as with solar panels, or using wind turbines or the flow of water to generate energy.
        </p>
<h4 class="mt-2">Investing in Green Energy</h4>
<p class="text-muted mt-2">
          Renewable energy drew more than $2.6 trillion in investment from 2010 to 2019. Building new wind or solar capacity now costs less than adding the equivalent in coal or gas plants in two-thirds of the world. Investment has pushed solar energy to more than 8% of global generating capacity, and wind to almost 9%.
        </p>
<div class="cta-content__button" style="margin-top: 50px;">
<a class="btn btn-primary hvr-fill-black" href="{{ route('investments') }}">Start Investing With Us
              <i class="fa-solid fa-arrow-right icon-arrow-corner"></i>
</a>
</div>
</div>
</div>
<!--===== End of row =====-->
</div>
</section>
@endsection('body')