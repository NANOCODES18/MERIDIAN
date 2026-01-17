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
<h1 class="text-white-stroke display-5">Stock Options</h1>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-dark">
<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="#">Trading</a></li>
<li class="breadcrumb-item active">Stock Options</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<div class="mb-5">
<section class="bg-fit overlay section padding-top-140 padding-bottom-140 page-header-bg" data-jarallax='{"speed": 0.4}' style="background-image: url(assets/new-web/images/stock.jpg);">
<div class="container">
<div class="row text-center justify-content-center">
<div class="col-lg-6">
<h1 class="text-white">The Better Place for Traders!</h1>
<p class="lead text-white">Meridian Trades aspires to leverage its expertise and strong capital position to own and operate a selection of retail, consumer products and wholesale businesses.</p>
<h2 class="scroll-down"></h2>
</div>
</div>
</div>
</section>
<!-- Solutions that work-->
<section class="section padding-top-140 padding-bottom-140 mt-8 section-md bg-default">
<div class="container">
<div class="row row-30">
<div class="col-md-6 text-center" style="overflow: hidden;">
<!-- <img class="mt-5" src="https://meridian-trades.com/assets/new-web/images/bg/stocks2.png" alt="" style="width: 100%; border-radius: 8px; margin-bottom: 100px;"/> -->
<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a></div>
<script async="" src="{{ asset('s3.tradingview.com/external-embedding/embed-widget-hotlists.js') }}" type="text/javascript">
            {
            "colorTheme": "light",
            "dateRange": "12M",
            "exchange": "US",
            "showChart": true,
            "locale": "en",
            "width": "700px",
            "height": "400px",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": false,
            "showFloatingTooltip": false,
            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(240, 243, 250, 0)",
            "scaleFontColor": "rgba(120, 123, 134, 1)",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
          }
            </script>
</div>
</div>
<div class="col-md-6 pt-xl-3">
<h6 class="text-white">Stocks</h6>
<h2 class="alt-font text-dark font-weight-500 text-fast-blue">How does it work?</h2>
<p class="mt-4">
            Find, research, and make trades with Meridian Trades's innovative tools and features. Enjoy the convenience of trading via web, tablet and app, or take advantage of our advanced desktop platform.
            We support full extended trading hours, which includes pre-market (4:00 AM - 9:30 AM ET) and after hours (4:00 PM - 8:00 PM ET) sessions.
          </p>
<p class="mt-4">
<b>Fractional shares: Invest in the stocks you want regardless of share price. </b>

            Fractional shares are pieces, or fractions, of whole shares of a company or ETF. You can buy fractions of stocks and ETFs at a $5 minimum on Meridian Trades.
          </p>
<h4 class="mt-4 text-white" style="margin-top: 100px;">Reasons to consider investing in stocks</h4>
<ul>
<li class="mt-4">
<i class="fas fa-check me-3 bg-orange-soft-01 text-orange"></i>You can own a part of your favourite company and have a say in issues you care about
            </li>
<li class="mt-4">
<i class="fas fa-check me-3 bg-orange-soft-01 text-orange"></i>The Stock Market goes up over time and has potential for wealth
            </li>
<li class="mt-4">
<i class="fas fa-check me-3 bg-orange-soft-01 text-orange"></i>There is the option of diversity to help mitigate risk
            </li>
<li class="mt-4">
<i class="fas fa-check me-3 bg-orange-soft-01 text-orange"></i>You do not need to be a financial guru to invest in stocks and its Tax Free profits
            </li>
</ul>
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
</div>@endsection('body')