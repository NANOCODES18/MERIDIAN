@extends('layouts.spacedcustomlayout')
@section('body')


<style>
/* ===== HOW IT WORKS SECTION ===== */
.td-how-it-works-section {
    background: #05070d;
    padding: 120px 0;
    position: relative;
    overflow: hidden;
    color: #fff;
}

/* Grid background */
.works-grid-bg-shape {
    position: absolute;
    inset: 0;
    opacity: 0.08;
    z-index: 0;
}

.works-grid-bg-shape img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Section heading */
.section-title-wrapper {
    position: relative;
    z-index: 2;
}

.section-subtitle {
    display: inline-block;
    padding: 6px 18px;
    border-radius: 30px;
    background: rgba(255,255,255,0.08);
    font-size: 14px;
    margin-bottom: 18px;
    letter-spacing: 0.5px;
}

.section-title {
    font-size: 42px;
    font-weight: 700;
    line-height: 1.3;
    color: #cfe0ff;
}

/* Cards wrapper */
.how-it-works-items {
    margin-top: 80px;
    position: relative;
    z-index: 2;
}

/* Card */
.how-it-works-item {
    height: 100%;
}

.how-it-works-item .inner {
    height: 100%;
    padding: 40px 30px;
    border-radius: 18px;
    background: linear-gradient(
        180deg,
        rgba(255,255,255,0.08),
        rgba(255,255,255,0.02)
    );
    border: 1px solid rgba(255,255,255,0.15);
    backdrop-filter: blur(14px);
    text-align: center;
    transition: all 0.3s ease;
}

/* Hover glow */
.how-it-works-item .inner:hover {
    transform: translateY(-6px);
    border-color: rgba(96,165,250,0.6);
    box-shadow: 0 0 40px rgba(96,165,250,0.15);
}

/* Icon */
.how-it-works-item .icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 24px;
}

.how-it-works-item .icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* Title */
.how-it-works-item .title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #ffffff;
}

/* Description */
.how-it-works-item .description {
    font-size: 14px;
    line-height: 1.6;
    color: #b6c2e1;
}

/* Responsive tweaks */
@media (max-width: 991px) {
    .section-title {
        font-size: 32px;
    }
    .how-it-works-item .inner {
        padding: 32px 24px;
    }
}
</style>





<style>
/* ================= ROOT ================= */
.gaming-defi-section {
    position: relative;
    background: radial-gradient(circle at top right, #1a1440, #05070d 60%);
    color: #e6e9ff;
    overflow: hidden;
    padding: 80px 0 120px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
}

/* Grid background */
.background-grid {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 40px 40px;
    opacity: 0.15;
    z-index: 0;
}

/* Glow orbs */
.glow-orb {
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    filter: blur(120px);
    opacity: 0.35;
    z-index: 0;
}

.glow-orb-1 {
    background: #6d5cff;
    top: -120px;
    right: -120px;
}

.glow-orb-2 {
    background: #22d3ee;
    bottom: -120px;
    left: -120px;
}

/* Container */
.section-container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ================= WORKFLOW ================= */
.workflow-section {
    text-align: center;
    margin: 80px 0;
}

.workflow-title {
    font-size: 42px;
    font-weight: 800;
    color: #cfd6ff;
    max-width: 900px;
    margin: 0 auto 60px;
    line-height: 1.3;
}

/* Cards grid */
.workflow-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

/* Workflow card */
.workflow-card {
    background: linear-gradient(
        180deg,
        rgba(255,255,255,0.10),
        rgba(255,255,255,0.03)
    );
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 22px;
    padding: 40px 28px;
    transition: all 0.3s ease;
    backdrop-filter: blur(14px);
}

.workflow-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 40px rgba(109,92,255,0.35);
    border-color: rgba(109,92,255,0.7);
}

/* Icon */
.workflow-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 24px;
    border-radius: 18px;
    background: linear-gradient(135deg, #6d5cff, #8b5cf6);
    display: flex;
    align-items: center;
    justify-content: center;
}

.workflow-icon svg {
    width: 32px;
    height: 32px;
    color: #fff;
}

/* Text */
.workflow-card h3 {
    font-size: 20px;
    margin-bottom: 12px;
    font-weight: 700;
    color: #ffffff;
}

.workflow-card p {
    font-size: 14px;
    color: #b8c0ff;
    line-height: 1.6;
}

/* ================= SECTION HEADER ================= */
.section-header {
    text-align: center;
    margin: 120px 0 70px;
}

.section-label {
    display: inline-block;
    padding: 6px 18px;
    border-radius: 30px;
    background: rgba(109,92,255,0.18);
    border: 1px solid rgba(109,92,255,0.5);
    color: #cfd6ff;
    font-size: 13px;
    margin-bottom: 18px;
}

.section-title {
    font-size: 44px;
    font-weight: 900;
    color: #cfd6ff;
    margin-bottom: 16px;
}

.section-description {
    max-width: 760px;
    margin: 0 auto;
    color: #aab0ff;
    font-size: 15px;
    line-height: 1.7;
}

/* ================= SERVICES ================= */
.services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
    margin-top: 60px;
}

.service-card {
    background: linear-gradient(
        180deg,
        rgba(255,255,255,0.10),
        rgba(255,255,255,0.02)
    );
    border-radius: 22px;
    border: 1px solid rgba(255,255,255,0.15);
    padding: 40px 30px;
    backdrop-filter: blur(14px);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 40px rgba(139,92,246,0.35);
}

.service-icon {
    width: 64px;
    height: 64px;
    border-radius: 18px;
    background: linear-gradient(135deg, #7c7cff, #8b5cf6);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
}

.service-icon svg {
    width: 32px;
    height: 32px;
    color: #fff;
}

.service-card h3 {
    font-size: 20px;
    margin-bottom: 12px;
    font-weight: 700;
}

.service-card p {
    font-size: 14px;
    color: #b8c0ff;
    line-height: 1.6;
}

/* ================= STATS ================= */
.stats-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 100px;
    padding: 36px;
    background: rgba(255,255,255,0.04);
    border-radius: 22px;
    border: 1px solid rgba(255,255,255,0.12);
    backdrop-filter: blur(12px);
}

.stat-item {
    text-align: center;
}

.stat-value {
    font-size: 32px;
    font-weight: 900;
    color: #ffffff;
}

.stat-label {
    font-size: 13px;
    color: #aab0ff;
    margin-top: 6px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    .workflow-grid,
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .section-title,
    .workflow-title {
        font-size: 34px;
    }
}

@media (max-width: 600px) {
    .workflow-grid,
    .services-grid,
    .stats-bar {
        grid-template-columns: 1fr;
    }

    .workflow-title {
        font-size: 26px;
    }

    .section-title {
        font-size: 28px;
    }

    .stats-bar {
        padding: 24px;
    }
}
</style>




<style>
/* ===== Scoped Section Only ===== */
.why-choose-section {
    position: relative;
    background: radial-gradient(circle at top left, #15162b, #05050b 70%);
    overflow: hidden;
}

/* Background grid effect */
.why-choose-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        repeating-linear-gradient(
            0deg,
            rgba(255,255,255,0.02),
            rgba(255,255,255,0.02) 1px,
            transparent 1px,
            transparent 6px
        );
    opacity: 0.3;
    pointer-events: none;
}

/* Only affect container INSIDE this section */
.why-choose-section .container {
    max-width: 1400px;
    padding: 120px 20px;
    color: #d1d5ff;
    font-family: "Inter", sans-serif;
}

/* ===== Titles ===== */
.why-choose-section .section-subtitle {
    display: inline-block;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
    color: #c4b5fd;
    background: rgba(139, 92, 246, 0.15);
    margin-bottom: 18px;
}

.why-choose-section .section-title {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.2;
    color: #e5e7ff;
}

/* ===== Cards ===== */
.why-choose-section .why-choose-item {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 18px;
    padding: 32px;
    height: 100%;
    transition: all 0.4s ease;
    backdrop-filter: blur(6px);
}

.why-choose-section .why-choose-item:hover {
    transform: translateY(-8px);
    border-color: rgba(139,92,246,0.6);
    box-shadow: 0 0 40px rgba(139,92,246,0.15);
}

/* ===== Icons ===== */
.why-choose-section .icon span {
    width: 56px;
    height: 56px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: linear-gradient(145deg, #3b82f6, #8b5cf6);
    color: #fff;
    font-size: 22px;
    margin-bottom: 22px;
}

/* ===== Card Content ===== */
.why-choose-section .title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #f1f5ff;
}

.why-choose-section .description {
    font-size: 15px;
    line-height: 1.7;
    color: #a5b4fc;
}

/* ===== Image ===== */
.why-choose-section .why-choose-thumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.why-choose-section .why-choose-thumb img {
    max-width: 100%;
    filter: drop-shadow(0 0 50px rgba(0,0,0,0.8));
}

/* ===== Spacing ===== */
.why-choose-section .row > div {
    margin-bottom: 30px;
}

/* ===== Responsive ===== */
@media (max-width: 991px) {
    .why-choose-section .section-title {
        font-size: 36px;
    }
}

@media (max-width: 575px) {
    .why-choose-section .section-title {
        font-size: 30px;
    }
}
</style>



<!-- =======================
Header END -->
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Main Banner START-->
<section class="position-relative bg-dark p-0">
<!-- Email link left -->
<div class="position-absolute bottom-0 start-0 m-6 z-index-9 d-none d-xxl-block">
<a class="text-white lead" href="mailto:{{ $company_features ? $company_features->companyemail : 'No company email set' }}">
      {{ $company_features ? $company_features->companyemail : 'No company email set' }}    </a>
</div>
<!-- Social sites link right -->
<!-- <div class="position-absolute bottom-0 end-0 m-6 z-index-9 d-none d-xxl-block">
		<div class="d-flex">
			<h6 class="text-white mt-2 me-4">Follow us:</h6>
			<div class="list-group-inline list-unstyled text-primary-hover">
				<a href="#" class="list-group-item text-white bg-transparent">Fb</a>
				<a href="#" class="list-group-item text-white bg-transparent">Tw</a>
				<a href="#" class="list-group-item text-white bg-transparent me-0">In</a>
			</div>
		</div>
	</div> -->
<!-- Banner START -->
<div class="tiny-slider dots-white dots-bordered dots-end">
<div class="tiny-slider-inner h-500 h-sm-600 h-lg-800" data-arrow="false" data-autoplay="true" data-autoplaytime="7000" data-dots="true" data-gutter="0" data-items="1">
<!-- Slide 1 START -->
<div class="h-500 h-sm-600 h-lg-800 bg-dark-overlay-4 bg-dark" style="background-image:url(assets/web/fx1.jpg); background-position: center center; background-size: cover;">
<div class="container h-100">
<div class="row d-flex h-100">
<div class="col-md-8 col-xl-7 justify-content-center align-self-center align-items-start">
<div class="slider-content text-start">
<h2 class="animate__animated animate__fadeInUp text-white display-3 d-block"><span class="text-white-stroke"> meridian trades </span> </h2>
<p class="animate__animated animate__fadeInUp animate__delay-1s lead text-white mt-0 mt-md-4">Your Gateway to Global Forex Success, unleashing the Power of Forex Trading!</p>
<div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s"><a class="btn btn-white btn-lg btn-line" href="{{ route('register') }}">Get Started</a></div>
</div>
</div>
</div>
</div>
</div>
<!-- Slide 1 END -->
<!-- Slide 2 START -->
<div class="h-100 bg-dark-overlay-4 bg-dark" style="background-image:url(assets/web/fx2.jpg); background-position: center center; background-size: cover;">
<div class="container h-100">
<div class="row d-flex h-100">
<div class="col-md-8 col-xl-7 justify-content-center align-self-center align-items-start">
<div class="slider-content text-start">
<h2 class="animate__animated animate__fadeInUp text-white display-4 d-block"><span class="text-white bg-primary px-2 pt-3">Empowering Traders, </span> One Trade at a Time</h2>
<p class="animate__animated animate__fadeInUp animate__delay-1s lead text-white mt-0 mt-md-4">Unlocking Your Potential with Cutting-Edge Tools and Expert Insights</p>
<div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s">
<a class="btn btn-primary btn-lg btn-line" href="{{ route('hiw') }}">How it works</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Slide 2 END -->
</div>
</div>
</section>
<!-- =======================
Main banner END-->



































<section class="gaming-defi-section">
    <!-- Animated Background -->
    <div class="background-grid"></div>
    <div class="glow-orb glow-orb-1" style="transform: translate(-0.22px, -0.78px);"></div>
    <div class="glow-orb glow-orb-2" style="transform: translate(0.22px, 0.78px);"></div>

    <div class="section-container">
        <!-- Ticker Tape at the Top -->
        <div class="ticker-tape-section">
            <div class="ticker-tape-container">
                <div class="tradingview-widget-container" style="width: 100%; height: 44px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22BINANCE%3ABTCUSDT%22%2C%22title%22%3A%22Bitcoin%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AETHUSDT%22%2C%22title%22%3A%22Ethereum%22%7D%2C%7B%22proName%22%3A%22BINANCE%3ABNBUSDT%22%2C%22title%22%3A%22BNB%22%7D%2C%7B%22proName%22%3A%22BINANCE%3ASOLUSDT%22%2C%22title%22%3A%22Solana%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AADAUSDT%22%2C%22title%22%3A%22Cardano%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AXRPUSDT%22%2C%22title%22%3A%22XRP%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A44%2C%22utm_source%22%3A%22nexascapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22nexascapital.com%2F%22%7D" title="ticker tape TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 44px; width: 100%;"></iframe>
                </div>
            </div>
        </div>

        <!-- How It Works Section -->
        <div class="workflow-section">
            <h2 class="workflow-title">It is a very simple process to start with us and earn money randomly</h2>
            
            <div class="workflow-grid">
                <div class="workflow-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                    <div class="workflow-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3>Register Account</h3>
                    <p>By Registering the website you will able to start your operation</p>
                </div>

                <div class="workflow-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                    <div class="workflow-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3>Verify Email</h3>
                    <p>After creating the account user need to verify the email for account purpose</p>
                </div>

                <div class="workflow-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                    <div class="workflow-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.7088 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3>Verify KYC</h3>
                    <p>Users KYC needs to verify to before making any withdrawals</p>
                </div>

                <div class="workflow-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                    <div class="workflow-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9 22V12H15V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3>Deposit Money</h3>
                    <p>Users can deposit using any automatic or manual gateways</p>
                </div>
            </div>
        </div>

        <!-- TradingView Widget Section -->
        <div class="trading-widget-section">
            <div class="widget-header">
                <span class="section-label">Live Market Data</span>
                <h2 class="widget-title">Real-Time Crypto Markets</h2>
                <p class="widget-subtitle">Track the performance of top cryptocurrencies in real-time with live market data.</p>
            </div>
            
            <!-- Main Market Overview Widget -->
            <div class="tradingview-widget-container" style="width: 100%; height: 600px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%2212M%22%2C%22showChart%22%3Atrue%2C%22width%22%3A%22100%25%22%2C%22height%22%3A600%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba(99%2C%20102%2C%20241%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(236%2C%2072%2C%20153%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(148%2C%20163%2C%20184%2C%200.1)%22%2C%22scaleFontColor%22%3A%22rgba(148%2C%20163%2C%20184%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(99%2C%20102%2C%20241%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(236%2C%2072%2C%20153%2C%200.12)%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba(99%2C%20102%2C%20241%2C%200)%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba(236%2C%2072%2C%20153%2C%200)%22%2C%22symbolActiveColor%22%3A%22rgba(99%2C%20102%2C%20241%2C%200.12)%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Crypto%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22BINANCE%3ABTCUSDT%22%2C%22d%22%3A%22Bitcoin%22%7D%2C%7B%22s%22%3A%22BINANCE%3AETHUSDT%22%2C%22d%22%3A%22Ethereum%22%7D%2C%7B%22s%22%3A%22BINANCE%3ABNBUSDT%22%2C%22d%22%3A%22BNB%22%7D%2C%7B%22s%22%3A%22BINANCE%3ASOLUSDT%22%2C%22d%22%3A%22Solana%22%7D%2C%7B%22s%22%3A%22BINANCE%3AADAUSDT%22%2C%22d%22%3A%22Cardano%22%7D%2C%7B%22s%22%3A%22BINANCE%3AXRPUSDT%22%2C%22d%22%3A%22Ripple%22%7D%5D%2C%22originalTitle%22%3A%22Crypto%22%7D%5D%2C%22utm_source%22%3A%22nexascapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22nexascapital.com%2F%22%7D" title="market overview TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
            </div>

            <!-- Mini Ticker Tape Widget -->
            <div class="tradingview-ticker-tape">
                <div class="tradingview-widget-container" style="width: 100%; height: 44px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22BINANCE%3ABTCUSDT%22%2C%22title%22%3A%22Bitcoin%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AETHUSDT%22%2C%22title%22%3A%22Ethereum%22%7D%2C%7B%22proName%22%3A%22BINANCE%3ABNBUSDT%22%2C%22title%22%3A%22BNB%22%7D%2C%7B%22proName%22%3A%22BINANCE%3ASOLUSDT%22%2C%22title%22%3A%22Solana%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AADAUSDT%22%2C%22title%22%3A%22Cardano%22%7D%2C%7B%22proName%22%3A%22BINANCE%3AXRPUSDT%22%2C%22title%22%3A%22XRP%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A44%2C%22utm_source%22%3A%22nexascapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22nexascapital.com%2F%22%7D" title="ticker tape TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 44px; width: 100%;"></iframe>
                </div>
            </div>
        </div>

        <!-- Section Header -->
        <div class="section-header">
            <span class="section-label">Why use </span>
            <h2 class="section-title">A Meridian Trades System</h2>
            <p class="section-description">The DeFi space is gradually catching up with the traditional financial system. Despite some of the obstacles that come with operating on the bleeding edge of innovation, the world of decentralized finance is on the path to prosperity.</p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <div class="service-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3>Yield Farming</h3>
                <p>Lock tokens on yield farm protocols and earn interest based on transaction costs when your funds provide liquidity and loan interest.</p>
            </div>
            
            <div class="service-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10 7V13M7 10H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </div>
                <h3>Algo Trading</h3>
                <p>Execute orders using automated pre-programmed trading instructions accounting for variables such as time, price, and volume.</p>
            </div>
            
            <div class="service-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 12V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3>Flexible &amp; Autonomous</h3>
                <p>The fastest way to get involved with decentralized finance. A few clicks are all it takes to earn, borrow or transact.</p>
            </div>
            
            <div class="service-card" style="opacity: 1; transform: translateY(0px); transition: opacity 0.6s, transform 0.6s;">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"></rect>
                        <path d="M3 9H21M9 21V9" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        <circle cx="15" cy="15" r="2" fill="currentColor"></circle>
                    </svg>
                </div>
                <h3>Real-Time Insights</h3>
                <p>Stay on top of everything with our intuitive dashboard. Notifications ensure you never miss any market move or opportunity.</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-value">$2.5B+</div>
                <div class="stat-label">Total Volume</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">150K+</div>
                <div class="stat-label">Active Users</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">50+</div>
                <div class="stat-label">Countries</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">24/7</div>
                <div class="stat-label">Support</div>
            </div>
        </div>
    </div>
</section>



























































































<section id="fifth">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 align-middle">
            <h2>Trade with confidence on the world's leading friendly Copy trading platform</h2>
            <h6>Join millions who have already discovered smarter, friendly and automated ways of managing multiple type of assets. Choose an investment product to start with.</h6>
          </div>
          <div class="col-md-4">
            <img src="images/4.png" class="img-fluid float-start" alt="Responsive image">
          </div>
        </div>
      </div>
    </section>

















	
	















<!-- =======================
About START -->
<section>
<div class="container">
<div class="row d-flex justify-content-lg-between">
<!-- About left -->
<div class="col-md-6 col-xl-5">
<!-- Since text -->
<span class="font-alt fw-normal display-8 bg-light text-primary float-start d-inline-block mb-n5 ms-lg-n2 px-3 rotate-10 z-index-9 position-relative">Your Partner in Forex Mastery 🤘</span>
<!-- Image -->
<div class="reveal-item bg-light rounded" data-aos="reveal-item">
<div class="reveal-animation reveal-end reveal-primary aos" data-aos="reveal-end"></div>
<img alt="Portfolio image" class="rounded w-100" src="{{ asset('assets/web/meridian trades cert.png') }}"/>
</div>
<!-- Text -->
<div class="mt-n6 ms-3 position-relative z-index-9">
<span class="bg-dark text-white p-2">Making clients happy since</span>
<h2 class="display-4 text-dark-stroke text-primary-shadow">2008</h2>
</div>
</div>
<!-- About Right -->
<div class="col-md-6">
<!-- Title -->
<span class="font-alt fw-normal display-8 d-block mb-3 mt-4">We are registered to be</span>
<h2 class="display-7">Charting Your Course to Financial Freedom</h2>
<!-- Tab START -->
<div class="mt-5 mt-md-0">
<ul class="nav nav-tabs nav-tabs-line">
<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-7-1"><i class="far fa-edit me-2"></i>Our Mission</a> </li>
<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-2"><i class="far fa-folder-open me-2"></i>Our Vision</a> </li>
<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-7-3"><i class="far fa-sun me-2"></i>Our Expertise</a> </li>
</ul>
<div class="tab-content mb-0">
<div class="tab-pane show active" id="tab-7-1">
<h5>Our Mission</h5>
<p> <p>At meridian trades, our mission is to empower traders with innovative tools, expert guidance, and comprehensive support, enabling them to navigate the forex market with confidence and achieve their financial goals. We are committed to providing a transparent, reliable, and enriching trading experience that fosters success and growth for all our clients.</p>
</p>
<!-- <blockquote class="blockquote mt-4">
							  <p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovation</p>
							  <footer class="blockquote-footer">Steve Jobs @ <cite title="Source Title">Apple Inc</cite></footer>
							</blockquote> -->
</div>
<div class="tab-pane" id="tab-7-2">
<h5>Our Vision</h5>
<p> <p>Our vision at meridian trades is to be the leading global forex trading platform, recognized for our commitment to innovation, education, and client success. We aim to create a dynamic and inclusive trading environment where traders of all levels can thrive, leveraging cutting-edge technology and unparalleled expertise to reach new heights in their trading journeys.</p>
</p>
<blockquote class="blockquote mt-4">
<p class="mb-0">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovation</p>
<footer class="blockquote-footer">Steve Jobs @ <cite title="Source Title">Apple Inc</cite></footer>
</blockquote>
</div>
<div class="tab-pane" id="tab-7-3">
<p><p>meridian trades brings together a team of seasoned forex professionals and state-of-the-art technology to deliver an unparalleled trading experience. Our expertise lies in providing in-depth market analysis, advanced trading tools, and personalized support, ensuring our clients have the knowledge and resources they need to make informed trading decisions. With a focus on continuous innovation and education, we strive to stay ahead of market trends and empower our traders with the skills and confidence to succeed</p>
</p>
<div class="d-flex">
<i class="display-5 text-primary bi bi-bullseye"></i>
<div class="mt-3 ms-4">
<p class="lead">"Transform your enterprise with resolutions tailored to your requirements &amp; goals."</p>
</div>
</div>
</div>
</div>
</div>
<!-- Tab END -->
</div>
</div>
</div>
</section>
<!-- =======================
About END -->








<section class="why-choose-section">

<div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="section-title-wrapper has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <span class="section-subtitle">Why Choose Us</span>
                    <h2 class="section-title">Explore Why You Will Choose Us.</h2>
                </div>
            </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="why-choose-item has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon">
                              <span>
                                                                         <i class="anticon anticon-credit-card	"></i>
                                                                </span>
                    </div>
                    <div class="contents">
                        <h5 class="title">Automatic and Manual Gateway</h5>
                        <p class="description">Etaque molestias enim quo harum ex, inventore eos corporis temporibus sint reiciendis nemo similique consequuntur eum.</p>
                    </div>
                </div>
            </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="why-choose-item has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon">
                              <span>
                                                                         <i class="anticon anticon-bank"></i>
                                                                </span>
                    </div>
                    <div class="contents">
                        <h5 class="title">Ranking Badge System</h5>
                        <p class="description">Etaque molestias enim quo harum ex, inventore eos corporis temporibus sint reiciendis nemo similique consequuntur eum.</p>
                    </div>
                </div>
            </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="why-choose-item has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon">
                              <span>
                                                                         <i class="anticon anticon-wallet"></i>
                                                                </span>
                    </div>
                    <div class="contents">
                        <h5 class="title">Referral Level System</h5>
                        <p class="description">Etaque molestias enim quo harum ex, inventore eos corporis temporibus sint reiciendis nemo similique consequuntur eum.</p>
                    </div>
                </div>
            </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="why-choose-item has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon">
                              <span>
                                                                         <i class="anticon anticon-lock"></i>
                                                                </span>
                    </div>
                    <div class="contents">
                        <h5 class="title">Secure Application</h5>
                        <p class="description">Etaque molestias enim quo harum ex, inventore eos corporis temporibus sint reiciendis nemo similique consequuntur eum.</p>
                    </div>
                </div>
            </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="why-choose-thumb has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <img src="https://stridesinvest.com/assets/frontend/theme_base/coin_orbit/images/why-choose/why-choose-thumb.png" alt="Why Choose">
                </div>
            </div>
        </div>
    </div>

</section>





















<section class="container my-5">
  <div class="row align-items-center">
    <!-- Image (hidden on mobile) -->
    <div class="col-md-6 d-none d-md-block">
      <img src="images/success.avif" alt="Image" class="img-fluid rounded-4" style="height: 100%;">
    </div>

    <!-- Text content -->
    <div class="col-12 col-md-6">
      <h1 class="fw-bold" style="font-family: Tahoma;">Your Success, Our Mission</h1>
      <p class="mt-3">
        At meridian trades, inclusivity is not just a vision; it’s the foundation of our philosophy.
        We believe that everyone deserves the opportunity to grow wealth, and our platform ensures
        accessibility, education, and support for investors of all backgrounds and experience levels.
      </p>

      <hr class="my-4" style="border-color: rgb(26, 0, 128);">

      <p class="text-primary" style="color: rgb(26, 0, 128);">
        Your dreams are within reach, and we’re here to make them a reality. Join us in reshaping the
        landscape of inclusive investments, one opportunity at a time.
      </p>

      <div class="text-center mt-5">
        <div class="mx-auto text-start" style="width: 60%;">
          <p class="fs-5 mb-1">Alex Hobbs,</p>
          <p class="mb-0">Founder, CEO of meridian trades</p>
        </div>
      </div>
    </div>
  </div>
</section>





















<section class="td-how-it-works-section section_space position-relative z-index-11 fix">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="section-title-wrapper text-center section_title_space">
                    <span class="section-subtitle">How It Works</span>
                    <h2 class="section-title has_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">It is a very simple process to start with us and earn money randomly</h2>
                </div>
            </div>
        </div>
        <div class="how-it-works-items">
            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/rgcX1UNOLmbtZ3FqaTRF.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Register Account</h5>
                                <p class="description">By Registering the website you will able to start your operation</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/XJpLT3lm67UdgIXF9evM.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Verify Email</h5>
                                <p class="description">After creating the account user need to verify the email for account purpose</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/AUYbTtNQ4xTXzOxovUfJ.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Verify KYC</h5>
                                <p class="description">Users' KYC needs to verify to before making any withdrawals</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/XcTp7W7bWhB8WuAqfhdD.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Deposit Money</h5>
                                <p class="description">Users can deposit using any automatic or manual gateways</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/MDUaupZdxAhfolZvx45O.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Investment a plan</h5>
                                <p class="description">Users can invest to any the plan or schema to enjoy the profit which will add on profit wallet</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/a67Vk3VpgntR38NRx6Lv.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Transfer Money</h5>
                                <p class="description">Users can transfer the fund to another user instantly</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/L1ECnG95L3DhstexQnnM.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Refer to Friends</h5>
                                <p class="description">For referring to any friends user can generate the bonus</p>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                    <div class="how-it-works-item has_fade_anim" data-delay="0.15" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                        <div class="inner">
                            <div class="icon">
                                <img src="https://stridesinvest.com/assets/global/images/n7DtYSCuWTvO5bYAmrYv.png" alt="how-it-works">
                            </div>
                            <div class="contents">
                                <h5 class="title">Retirer et profiter</h5>
                                <p class="description">Le retrait peut être effectué dans le portefeuille principal et cela prendra un peu de temps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
        </div>
    </div>
</section>












<section id="second">
  

	<div style="padding: 20px 50px; display: flex;">
	  {{-- <div style="flex: 1; padding-right: 70px;">
		  <img src="https://exquisitesoption.com/images/trust.avif" alt="Image" style="height: 100%; border-radius: 20px;">
	  </div> --}}
	  <div style="flex: 2;">
		  <h2 style="font-family: Tahoma;">Why People Trust Us</h2><br>
		  <p>
			  Our commitment to innovation echoes in every aspect of our home page. Immerse yourself in a sleek and intuitive interface designed to simplify your investment journey.
		  </p><br><br>
		  <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
			  <div style="flex: 1; margin-right: 20px;">
				  <h3 style="font-family: Tahoma;">Diverse Portfolio</h3><br>
				  <p>
					  Explore a wide range of investment options across mineral resources, renewable energy, forex, and cryptocurrency.
				  </p>
			  </div>
			  <div style="flex: 1;">
				  <h3 style="font-family: Tahoma;">Expert Guidance</h3><br>
				  <p>
					  Benefit from the expertise of our seasoned professionals, guiding you through informed investment decisions.
				  </p>
			  </div>
		  </div><br><br>
		  <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
			  <div style="flex: 1; margin-top: 20px;">
				  <h3 style="font-family: Tahoma;">Spotlight on Sector</h3>
				  <p>
					  Dive into dedicated sections spotlighting our expertise in mineral resources, renewable energy, forex, and cryptocurrency.
				  </p>
			  </div>
			  <div style="flex: 1; margin-top: 20px; padding-left: 15px;">
				  <h3 style="font-family: Tahoma;">Accessible Platform</h3>
				  <p>
					  Our user-friendly platform ensures that whether you're a seasoned investor or a newcomer, you can navigate the world of investments effortlessly.
				  </p>
			  </div>
		  </div>
	  </div>
	</div>
	
	</section>
<!-- =======================
Services START -->
<section class="pt-0">
<div class="container">
<div class="row">
<!-- Service item -->
<div class="col-md-4 mb-4">
<i class="display-6 text-primary bi bi-sliders"></i>
<h4 class="my-3">24/7 Auto Trading</h4>
<p>Automate the opening, management, and closing of trades around the clock, ensuring uninterrupted operation even during sleep hours. Rest assured, you'll never miss a trading opportunity with this hands-free system.</p>
</div>
<!-- Service item -->
<div class="col-md-4 mb-4">
<i class="display-6 text-primary bi bi-droplet-half"></i>
<h4 class="my-3">No Human Emotions</h4>
<p>Ninety percent of traders lose money due to human emotions. meridian trades operates strictly on its strategy, eliminating any interference from emotions.</p>
</div>
<!-- Service item -->
<div class="col-md-4 mb-4">
<i class="display-6 text-primary bi bi-graph-up"></i>
<h4 class="my-3">Passive Income</h4>
<p>Little attention or effort is required. Simply install meridian trades, and it will autonomously manage all trading activities using proven, time-tested systems.</p>
</div>
</div>
</div>
</section>
<!-- =======================
Services END -->
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
<h4>Forex Trading Platform</h4>
<p>meridian trades provides a state-of-the-art trading platform designed for ease of use and high performance. With real-time data, advanced charting tools, and seamless trade execution, our platform is tailored to meet the needs of both novice and experienced traders.</p>
</div>
</div>
</div>
<!-- Step item -->
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">02</h2>
<div>
<h4>Market Analysis and Research</h4>
<p>Our expert team offers comprehensive market analysis and research reports, covering the latest trends, news, and forecasts in the forex market. These insights help traders make informed decisions and stay ahead of market movements.</p>
</div>
</div>
</div>
<!-- Step item -->
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">03</h2>
<div>
<h4>Educational Resources</h4>
<p>meridian trades is committed to trader education, offering a wide range of resources including webinars, tutorials, articles, and eBooks. Our educational content is designed to enhance traders' knowledge and skills, from the basics of forex trading to advanced strategies. </p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">04</h2>
<div>
<h4>Personalized Trading Support</h4>
<p>We provide dedicated support to our clients, offering personalized assistance from our team of experienced trading professionals. Whether you need help with strategy development or technical issues, our support team is here to assist you. </p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">05</h2>
<div>
<h4>Risk Management Tools</h4>
<p>meridian trades offers robust risk management tools to help traders protect their investments. Features like stop-loss orders, take-profit orders, and trailing stops enable traders to manage their risk effectively and trade with confidence.</p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">06</h2>
<div>
<h4>Automated Trading Solutions</h4>
<p>For traders looking to automate their strategies, meridian trades provides sophisticated automated trading solutions, including Expert Advisors (EAs) and algorithmic trading capabilities. These tools allow for efficient and consistent trading execution based on predefined criteria. </p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">07</h2>
<div>
<h4>Account Management Services</h4>
<p>Our professional account management services cater to clients who prefer a hands-off approach to trading. Our experienced account managers handle the trading on behalf of clients, aiming to achieve optimal returns based on their risk tolerance and investment goals.</p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">08</h2>
<div>
<h4>Social Trading Network</h4>
<p>meridian trades features a social trading platform where traders can follow and copy the trades of successful traders. This allows less experienced traders to benefit from the expertise of seasoned professionals and learn from their strategies.</p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-4 mb-5">
<div class="d-flex">
<h2 class="display-3 mt-lg-n3 me-3 text-light-stroke text-light-shadow">09</h2>
<div>
<h4>Customer Support</h4>
<p>Our dedicated customer support team is available 24/7 to assist with any inquiries or issues. We strive to provide prompt and effective support to ensure a seamless trading experience for our clients.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- =======================
Work Process END -->



<div class="section s-small  pt-0">
	<div class="container">
		<div class="section-head section-head-s2 section-sm">
			<h2>Choose an investment product to get started <br><span style="font-weight: 100;">to find out why over
				10,000 users trust meridian trades Financial
					Management</span></h2>
		</div>
		<div class="row">
			<div class="col">
				<!-- filter menu-->
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs dragscroll horizontal">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tabA">CRYPTO</a>
						</li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabB">STOCKS &amp;
								ETFs</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabC">FOREX</a>
						</li>
					</ul>
				</div>

				<span class="nav-tabs-wrapper-border" role="presentation"></span>


				<!-- .filter menu-->
			</div>
		</div><!-- .row -->



		<div class="tab-content">
			<div class="tab-pane fade show active" id="tabA">
				<div class="row">
					<div class="col-md-6 pb-5">
						<div class="text-block">
							<h2>Deposit, invest, store &amp; sell cryptocurrencies</h2>
							<p class="lead">Deposit, invest, store &amp; sell Bitcoin and other leading cryptos
								with ease</p>
							<a href="https://igeniusfx.com/crypto" class="btn btn-outline">Learn More</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image-block">
							<img src="serv/crypto.png" alt="">
						</div>
					</div>


				</div>
			</div>
			<div class="tab-pane fade" id="tabB">
				<div class="row">
					<div class="col-md-6">
						<div class="text-block">
							<h2>Invest commission free </h2>
							<p class="lead">No markup on stocks &amp; ETFs from leading exchanges - no matter how
								much you invest</p>
							<a href="https://igeniusfx.com/stocks" class="btn btn-outline">Learn More</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image-block">
							<img src="serv/stock-2.png" style="height: 280px; width: auto;" alt="">
						</div>
					</div>

				</div>
			</div>
			<div class="tab-pane fade" id="tabC">
				<div class="row">

					<div class="col-md-6 pb-5">
						<div class="text-block">
							<h2>Advanced trading, more opportunities </h2>
							<p class="lead">
								Forex is a portmanteau of foreign currency and exchange. Foreign exchange is the process
								of
								changing one currency into another currency for a variety of reasons,
								usually for commerce, trading, or tourism.
							</p>
							<a href="https://igeniusfx.com/forextrading" class="btn btn-outline">Learn More</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image-block">
							<img src="serv/stock.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row ">
			<div class="col-md-4">
				<div class="card card-body">
					<h5 class="card-title">Stocks &amp; ETFs</h5>
					<p class="card-text">Invest in stocks with 0% commission. Buy in bulk or just a fraction.</p>
					<a href="https://igeniusfx.com/register" style="width: fit-content;">Invest in Stocks</a>
					<div style="padding: 0;margin: 0;">

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="290" height="180" viewBox="0 0 290 180">
							<defs>
								<rect id="prefix__a" width="290" height="180" x="0" y="0" rx="10"></rect>
								<rect id="prefix__c" width="86" height="86" x="0" y="0" rx="4"></rect>
								<rect id="prefix__i" width="305" height="180" x="12" y="31" rx="7"></rect>
								<rect id="prefix__n" width="48" height="48" x="0" y="0" rx="4"></rect>
								<linearGradient id="prefix__j" x1="50%" x2="50%" y1="0%" y2="100%">
									<stop offset="0%" stop-color="#FFF" stop-opacity=".75"></stop>
									<stop offset="100%" stop-color="#2C2C2C" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__k" x1="50%" x2="50%" y1="38.65%" y2="89.71%">
									<stop offset="0%" stop-color="#F6FCEE"></stop>
									<stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__l" x1="50%" x2="50%" y1="0%" y2="100%">
									<stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop>
									<stop offset="100%" stop-color="#FFF"></stop>
								</linearGradient>
								<filter id="prefix__d" width="193%" height="193%" x="-46.5%" y="-30.2%" filterUnits="objectBoundingBox">
									<feOffset dy="14" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="11"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0.562709821 0 0 0 0 0.639266309 0 0 0 0 0.728528912 0 0 0 0.235167572 0"></feColorMatrix>
								</filter>
								<filter id="prefix__h" width="119.7%" height="133.3%" x="-9.8%" y="-16.7%" filterUnits="objectBoundingBox">
									<feMorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1"></feMorphology>
									<feOffset in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"></feGaussianBlur>
									<feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"></feComposite>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
								</filter>
								<filter id="prefix__m" width="266.7%" height="266.7%" x="-83.3%" y="-54.2%" filterUnits="objectBoundingBox">
									<feOffset dy="14" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="11"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0.562709821 0 0 0 0 0.639266309 0 0 0 0 0.728528912 0 0 0 0.235167572 0"></feColorMatrix>
								</filter>
								<path id="prefix__f" d="M0 0.722L20.529 0.722 20.529 43 0 43z"></path>
							</defs>
							<g fill="none" fill-rule="evenodd">
								<mask id="prefix__b" fill="#fff">
									<use xlink:href="#prefix__a"></use>
								</mask>
								<use fill="#FFF" xlink:href="#prefix__a"></use>
								<g mask="url(#prefix__b)">
									<g transform="translate(9 119)">
										<mask id="prefix__e" fill="#fff">
											<use xlink:href="#prefix__c"></use>
										</mask>
										<g fill-rule="nonzero">
											<use fill="#000" filter="url(#prefix__d)" xlink:href="#prefix__c"></use>
											<use fill="#EE2722" xlink:href="#prefix__c"></use>
										</g>
										<g mask="url(#prefix__e)">
											<g>
												<g transform="translate(30 26) translate(0 .278)">
													<mask id="prefix__g" fill="#fff">
														<use xlink:href="#prefix__f"></use>
													</mask>
													<path fill="#231F20" d="M10.63.722v3.144C9.508 2.622 7.799.722 7.799.722H0v38.73L4.496 43l4.682-.586.036-3.432c1.537 1.266 3.645 2.993 3.645 2.993l7.67-.781V4.708L16.366.73 10.63.72z" mask="url(#prefix__g)"></path>
												</g>
												<path fill="#FEFEFE" d="M11.91 31.382l-.262.03L7.168 2.04l-5.97-.007L1.2 38.9s1.19-.17 3.707-.457l-.259-28.022.26-.024L9.17 38.006s1.457-.173 6.412-.664V2.037h-3.805l.133 29.345z" transform="translate(30 26)"></path>
											</g>
										</g>
										<g mask="url(#prefix__e)">
											<path fill="#FFF" fill-rule="nonzero" d="M65.19 33.02c0-.133-.079-.176-.26-.176h-.175v.379l.175.004c.181 0 .26-.06.26-.185v-.022zm.273.94h-.207c-.02 0-.035-.012-.043-.028l-.283-.472c-.005-.01-.03-.021-.039-.021h-.127v.468c0 .025-.017.052-.05.052h-.188c-.023 0-.047-.027-.047-.052v-1.185c0-.069.027-.097.086-.106.066-.009.246-.015.343-.015.344 0 .552.1.552.42v.021c0 .198-.1.302-.254.353l.293.489c.002.01.008.023.008.035 0 .019-.011.04-.044.04zm-.492-1.573c-.51 0-.921.415-.921.915 0 .501.412.91.921.91.507 0 .923-.409.923-.91 0-.5-.416-.915-.923-.915zm0 2.013c-.619 0-1.113-.493-1.113-1.098 0-.603.494-1.098 1.113-1.098.613 0 1.116.495 1.116 1.098 0 .605-.503 1.098-1.116 1.098z"></path>
										</g>
									</g>
								</g>
								<g mask="url(#prefix__b)">
									<g transform="translate(59 13)">
										<g opacity=".75">
											<use fill="#000" filter="url(#prefix__h)" xlink:href="#prefix__i"></use>
											<use fill="#FFF" fill-opacity=".9" xlink:href="#prefix__i"></use>
										</g>
										<rect width="35" height="35" x="40" y="57" fill="#D8D8D8" fill-opacity=".35" rx="4"></rect>
										<g transform="translate(0 14)">
											<rect width="60" height="60" fill="#494D5A" rx="4"></rect>
											<g fill-rule="nonzero">
												<path fill="#FFF" d="M10.286 16.259c0-1.523.378-2.826 1.134-3.907.757-1.082 1.792-1.899 3.104-2.45 1.202-.509 2.682-.873 4.44-1.094.6-.066 1.58-.154 2.936-.265V7.98c0-1.412-.155-2.362-.467-2.847-.467-.663-1.201-.994-2.203-.994h-.267c-.734.066-1.368.298-1.902.696-.534.397-.879.949-1.035 1.655-.089.442-.311.696-.667.762l-3.838-.464c-.379-.088-.568-.287-.568-.596 0-.066.011-.143.034-.231.378-1.965 1.307-3.422 2.786-4.372C15.253.64 16.983.11 18.963 0h.835c2.536 0 4.517.651 5.94 1.954.223.22.429.458.618.712.19.254.34.48.45.679.112.198.212.485.301.86.089.376.156.635.2.779.045.143.078.452.1.927.023.474.034.756.034.844v8.014c0 .574.083 1.098.25 1.573.167.474.328.817.484 1.026.156.21.412.547.768 1.01.133.199.2.376.2.53 0 .177-.09.331-.267.464-1.847 1.59-2.848 2.45-3.004 2.583-.267.198-.59.22-.968.066-.311-.265-.584-.519-.818-.762-.233-.243-.4-.42-.5-.53-.1-.11-.262-.325-.484-.645-.223-.32-.378-.536-.467-.646-1.246 1.347-2.47 2.185-3.672 2.517-.756.22-1.69.33-2.803.33-1.713 0-3.12-.524-4.222-1.572-1.102-1.049-1.652-2.533-1.652-4.454zm5.74-.662c0 .86.217 1.55.651 2.07.434.518 1.018.777 1.752.777.067 0 .162-.01.284-.033.122-.022.206-.033.25-.033.935-.243 1.658-.839 2.17-1.788.244-.42.428-.877.55-1.374.123-.497.19-.9.2-1.209.012-.309.017-.817.017-1.523v-.828c-1.29 0-2.27.088-2.937.265-1.958.552-2.937 1.777-2.937 3.676z" transform="translate(10.286 13.714)"></path>
												<path fill="#EB9734" d="M.068 25.874c.114-.2.296-.212.547-.037 5.693 3.63 11.887 5.445 18.582 5.445 4.464 0 8.87-.914 13.22-2.741.114-.05.279-.126.495-.226.216-.1.37-.175.461-.225.342-.15.61-.075.803.225.194.3.131.576-.188.826-.41.326-.934.701-1.571 1.127-1.959 1.277-4.145 2.265-6.559 2.966-2.414.701-4.77 1.052-7.07 1.052-3.553 0-6.912-.682-10.077-2.047-3.166-1.364-6.001-3.285-8.506-5.764C.068 26.35 0 26.225 0 26.1c0-.075.023-.15.068-.226z" transform="translate(10.286 13.714)"></path>
												<path fill="#EB9734" d="M30.901 27.135c.045-.09.111-.179.2-.269.554-.38 1.085-.637 1.595-.771.842-.224 1.662-.347 2.46-.37.22-.022.431-.01.63.034.998.09 1.596.257 1.795.503.089.135.133.336.133.604v.235c0 .783-.21 1.706-.631 2.769-.421 1.063-1.008 1.918-1.762 2.567-.11.09-.21.134-.299.134-.044 0-.088-.01-.133-.033-.132-.067-.166-.19-.1-.37.82-1.946 1.23-3.3 1.23-4.06 0-.246-.044-.425-.133-.537-.221-.268-.841-.403-1.86-.403-.377 0-.82.023-1.33.068-.554.067-1.063.134-1.529.201-.133 0-.221-.022-.266-.067-.044-.045-.055-.09-.033-.134 0-.023.011-.056.033-.101z" transform="translate(10.286 13.714)"></path>
											</g>
											<rect fill="url(#prefix__j)" style="mix-blend-mode:overlay" width="60" height="60" rx="4"></rect>
										</g>
										<path fill="#2C2C2C" fill-rule="nonzero" d="M87.283 79l.725-2.379h3.643L92.376 79h2.283l-3.54-10.035h-2.592L85 79h2.283zm3.863-4.156H88.54c.711-2.302 1.142-3.744 1.292-4.327.036.164.097.387.181.67.084.282.462 1.501 1.132 3.657zM97.636 79v-4.648c0-.534-.044-1.598-.13-3.193h.061L99.973 79h1.942l2.577-7.827h.062c-.055 1.258-.086 2.032-.093 2.324-.007.292-.01.55-.01.773V79h1.976v-9.994h-2.885l-2.509 7.642h-.041l-2.365-7.642h-2.885V79h1.894zm17.646 0v-1.75h-4.915l4.785-6.877v-1.367h-7.178v1.75h4.662l-4.792 6.87V79h7.438zm3.311 0v-4.703c0-.57-.043-1.522-.13-2.858h.062L122.872 79h2.694v-9.994h-1.907v4.73c0 .538.034 1.456.102 2.755h-.048l-4.34-7.485H116.7V79h1.893z"></path>
										<g>
											<path fill="url(#prefix__k)" d="M1 64.857L16.381 54.2 39.452 54.2 47.142 67.521 60.6 67.521 81.748 56.864 99.052 64.857 112.51 51.536 137.503 40.879 148.697 28.882 175.63 24.162 185.187 32.029 200.948 40.879 219.939 28.882 234.708 30.456 245.134 30.456 262.51 10 289.387 24.894 299 11.574 299 117 1 117z" transform="translate(11 86)"></path>
											<path fill="url(#prefix__l)" d="M0 0H262V81H0z" transform="translate(11 86)"></path>
											<path stroke="#6AAC0E" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M1 64.574L16.625 53.66 38.948 53.66 50.109 67 62.386 67 83.592 57.298 101.449 63.362 114.843 51.234 138.713 41.301 150.162 28.596 176.877 22.243 186.417 31.772 201.683 41.301 220.765 28.596 237.938 30.184 245.571 30.184 262.169 10 288.955 24.553 299 11.213" transform="translate(11 86)"></path>
										</g>
										<g>
											<g fill-rule="nonzero" transform="translate(199)">
												<use fill="#000" filter="url(#prefix__m)" xlink:href="#prefix__n"></use>
												<use fill="#FFF" xlink:href="#prefix__n"></use>
											</g>
											<path fill="#3183FF" d="M33.469 10l-5.97 4.802 8.602 5.12-8.602 5.12 5.97 4.802L42 24.475l-5.899-4.553L42 15.369 33.469 10zm-11.938 0L13 15.37l5.899 4.552 8.6-5.12L21.531 10zM13 24.475l8.53 5.37 5.97-4.804-8.601-5.119L13 24.475zm8.53 6.388l-2.561-1.612v1.808L27.517 36l8.549-4.941V29.25l-2.562 1.612-5.987-4.788-5.986 4.788z" transform="translate(199)"></path>
										</g>
									</g>
								</g>
							</g>
						</svg>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-body">
					<h5 class="card-title">Cryptocurrencies</h5>
					<p class="card-text">Buy, sell and store Bitcoin and other leading cryptos with ease</p>
					<a href="https://igeniusfx.com/register" style="width: fit-content;">Buy Cryptocurrencies</a>
					<div style="padding: 0;margin: 0;">

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="290" height="180" viewBox="0 0 290 180">
							<defs>
								<linearGradient id="prefix__e" x1="50%" x2="50%" y1="0%" y2="100%">
									<stop offset="0%" stop-color="#FFF" stop-opacity=".75"></stop>
									<stop offset="100%" stop-color="#2C2C2C" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__f" x1="0%" x2="122.816%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#FFF"></stop>
									<stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__i" x1="50%" x2="50%" y1="0%" y2="100%">
									<stop offset="0%" stop-color="#FFF" stop-opacity=".75"></stop>
									<stop offset="48.301%" stop-color="#999" stop-opacity=".388"></stop>
									<stop offset="100%" stop-color="#2C2C2C" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__j" x1="0%" x2="122.816%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#FFF"></stop>
									<stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
								</linearGradient>
								<filter id="prefix__c" width="120.2%" height="121.9%" x="-10.1%" y="-10.6%" filterUnits="objectBoundingBox">
									<feMorphology in="SourceAlpha" operator="dilate" radius="2.5" result="shadowSpreadOuter1"></feMorphology>
									<feOffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"></feGaussianBlur>
									<feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"></feComposite>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
								</filter>
								<filter id="prefix__k" width="139.2%" height="139.2%" x="-19.6%" y="-18.8%" filterUnits="objectBoundingBox">
									<feMorphology in="SourceAlpha" operator="dilate" radius="1" result="shadowSpreadOuter1"></feMorphology>
									<feOffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="7"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
								</filter>
								<rect id="prefix__a" width="290" height="182" x="0" y="0" rx="10"></rect>
								<rect id="prefix__d" width="307" height="283" x="14" y="0" rx="7"></rect>
								<circle id="prefix__l" cx="50.5" cy="146.5" r="62.5"></circle>
								<path id="prefix__g" d="M0 0L8.165 0 8.165 10.92 0 10.92z"></path>
							</defs>
							<g fill="none" fill-rule="evenodd">
								<mask id="prefix__b" fill="#fff">
									<use xlink:href="#prefix__a"></use>
								</mask>
								<use fill="#FFF" xlink:href="#prefix__a"></use>
								<g mask="url(#prefix__b)">
									<g>
										<g transform="translate(64 26)">
											<use fill="#000" filter="url(#prefix__c)" xlink:href="#prefix__d"></use>
											<rect width="307.5" height="283.5" x="13.75" y="-.25" fill="#FFF" fill-opacity=".6" stroke="#979797" stroke-opacity=".05" stroke-width=".5" rx="7"></rect>
										</g>
										<g>
											<g transform="translate(64 26) translate(14 10) translate(23 20)">
												<rect width="30" height="30" fill="#4D7795" rx="4"></rect>
												<path fill="#FFF" d="M20.571 16.186L15 24l-5.571-7.814 5.57 3.36 5.572-3.36zM15 6l5.571 9.108L15 18.468l-5.571-3.36L15 6z"></path>
												<rect fill="url(#prefix__e)" style="mix-blend-mode:overlay" width="30" height="30" rx="4"></rect>
											</g>
											<g>
												<path fill="#F6FCEE" fill-opacity=".5" d="M2 14.293L4.942 11.534 9.355 11.534 10.826 14.983 13.4 14.983 17.445 12.224 20.755 14.293 23.329 10.845 28.11 8.086 30.316 5.328 35.465 3.948 37.303 6.017 40.245 8.086 43.923 5.328 47.232 5.672 48.703 5.672 52.013 0.5 57.161 3.948 59 0.5 59 27.791 2 27.791z" transform="translate(64 26) translate(14 10) translate(161 26)"></path>
												<path stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M2 14.786L4.942 11.929 9.355 11.929 10.826 15.5 13.4 15.5 17.445 12.643 20.755 14.786 23.329 11.214 28.11 8.357 30.316 5.5 35.465 4.071 37.303 6.214 40.245 8.357 43.923 5.5 47.232 5.857 48.703 5.857 52.013 0.5 57.161 4.071 59 0.5" transform="translate(64 26) translate(14 10) translate(161 26)"></path>
												<path fill="url(#prefix__f)" d="M22.375 -10.834L38.625 -10.834 38.625 50.166 22.375 50.166z" transform="translate(64 26) translate(14 10) translate(161 26) rotate(-90 30.5 19.666)"></path>
											</g>
										</g>
										<path fill="#2C2C2C" fill-rule="nonzero" d="M85.014 49v-1.75h-3.637v-2.577h3.384v-1.736h-3.384v-2.195h3.637v-1.736h-5.756V49h5.756zm5.765 0v-8.23h2.714v-1.764h-7.547v1.764h2.714V49h2.12zm6.196 0v-4.313h3.958V49h2.113v-9.994h-2.113v3.917h-3.958v-3.917h-2.119V49h2.12z" transform="translate(64 26)"></path>
										<g>
											<g transform="translate(64 26) translate(14 60) translate(23 20)">
												<rect width="30" height="30" fill="#F1B033" rx="4"></rect>
												<g transform="rotate(-15 45.666 -32.033)">
													<mask id="prefix__h" fill="#fff">
														<use xlink:href="#prefix__g"></use>
													</mask>
													<path fill="#FFF" d="M7.489 5.438c-.361-.268-.857-.357-.857-.357s.451-.267.631-.49c.18-.267.271-.624.271-.847 0-.178.045-1.025-.632-1.515-.496-.357-1.083-.535-1.895-.58V0H3.97v1.65h-.812V0H2.075v1.65H0v1.069H.63c.18 0 .452 0 .587.134.135.178.135.223.135.49V7.62c0 .09 0 .223-.09.313-.09.089-.18.089-.406.089H.225L0 9.27h2.075v1.65h1.083V9.27h.812v1.65h1.083V9.225c.27 0 .54-.045.677-.045.315-.044.992-.133 1.623-.534.632-.446.767-1.114.812-1.783-.045-.713-.315-1.159-.676-1.426zm-4.331-2.63s.316-.044.676-.044c.317 0 .632 0 1.083.133.451.134.677.446.722.847 0 .357-.18.624-.451.802-.316.179-.722.268-1.083.268h-.902V2.808h-.045zm2.346 4.948c-.226.133-.722.267-1.218.267-.452.044-1.173 0-1.173 0V5.794s.676-.044 1.218 0c.541.045.947.179 1.173.267.18.09.54.313.54.803 0 .58-.27.757-.54.892z" mask="url(#prefix__h)"></path>
												</g>
												<circle cx="15" cy="15" r="9.857" stroke="#FFF"></circle>
												<rect fill="url(#prefix__i)" style="mix-blend-mode:overlay" width="30" height="30" rx="4"></rect>
											</g>
											<g>
												<path fill="#FCECED" fill-opacity=".5" d="M2 11.293L5 11.25 9 10 14 6.25 15 7.5 17.445 9.224 21 10 23.329 7.845 28.11 5.086 30 5 36 7.5 37.303 3.017 40.245 5.086 43.923 2.328 47.232 2.672 48.703 2.672 52 5 57.161 0.948 59 1.25 59 25 2 25z" transform="translate(64 26) translate(14 60) translate(161 29) matrix(-1 0 0 1 61 0)"></path>
												<path stroke="#D0021B" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M2 11.786L5 11.25 9 10 12 7.5 14 6.25 17.445 9.643 21 10 23.329 8.214 28.11 5.357 30 5 36 7.5 37.303 3.214 40.245 5.357 43.923 2.5 47.232 2.857 48.703 2.857 52 5 57.161 1.071 59 1.25" transform="translate(64 26) translate(14 60) translate(161 29) matrix(-1 0 0 1 61 0)"></path>
												<path fill="url(#prefix__j)" d="M21.75 -13.209L39.25 -13.209 39.25 47.791 21.75 47.791z" transform="translate(64 26) translate(14 60) translate(161 29) rotate(-90 30.5 17.291)"></path>
											</g>
										</g>
										<g>
											<g transform="translate(64 26) translate(14 110) translate(23 20)">
												<rect width="30" height="30" fill="#2C2C2C" rx="4"></rect>
												<g fill="#FFF" fill-rule="nonzero">
													<path d="M15.387 0H18l-5.437 5.393c-1.968 1.952-5.158 1.952-7.126 0L0 0h2.613l4.13 4.097c1.247 1.236 3.267 1.236 4.514 0L15.387 0z" transform="translate(6 7.714)"></path>
													<path d="M2.603 14.571H0l5.45-5.4c1.96-1.942 5.14-1.942 7.1 0l5.45 5.4h-2.603l-4.149-4.11c-1.241-1.23-3.255-1.23-4.496 0l-4.149 4.11z" transform="translate(6 7.714)"></path>
												</g>
												<rect fill="url(#prefix__e)" style="mix-blend-mode:overlay" width="30" height="30" rx="4"></rect>
											</g>
											<g>
												<path fill="#F6FCEE" fill-opacity=".5" d="M2 13.793L4.942 11.034 9.355 11.034 10.826 14.483 13 8.75 17 8.75 21 8.75 23.329 10.345 28.11 7.586 31 8.75 33 8.75 37 7.5 40.245 7.586 43.923 4.828 47.232 5.172 49 6.25 52 5 57.161 3.448 59 0 59 27.291 2 27.291z" transform="translate(64 26) translate(14 110) translate(161 26.5)"></path>
												<path stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M2 14.286L4.942 11.429 9.355 11.429 10.826 15 13 8.75 17 8.75 21 8.75 23.329 10.714 28.11 7.857 31 8.75 35 8.75 37 7.5 40.245 7.857 43.923 5 47.232 5.357 50 6.25 52 5 57.161 3.571 59 0" transform="translate(64 26) translate(14 110) translate(161 26.5)"></path>
												<path fill="url(#prefix__f)" d="M22.375 -11.334L38.625 -11.334 38.625 49.666 22.375 49.666z" transform="translate(64 26) translate(14 110) translate(161 26.5) rotate(-90 30.5 19.166)"></path>
											</g>
										</g>
										<path fill="#2C2C2C" fill-rule="nonzero" d="M82.997 99c1.13 0 2.025-.255 2.683-.766.659-.51.988-1.221.988-2.132 0-.643-.14-1.158-.42-1.545-.28-.388-.738-.652-1.371-.793v-.069c.465-.077.837-.307 1.118-.69.28-.383.42-.873.42-1.47 0-.88-.32-1.52-.96-1.924-.64-.403-1.67-.605-3.087-.605h-3.11V99h3.74zm-.39-6.036h-1.23v-2.222h1.114c.606 0 1.05.083 1.33.25.28.166.42.44.42.823 0 .41-.129.705-.386.882-.258.178-.673.267-1.248.267zm.15 4.286h-1.38v-2.604h1.312c1.185 0 1.778.414 1.778 1.244 0 .46-.14.802-.417 1.025-.278.223-.709.335-1.292.335zm9.779 1.887c1.012 0 1.928-.171 2.748-.513v-1.777c-.998.35-1.848.526-2.55.526-1.672 0-2.509-1.114-2.509-3.343 0-1.07.22-1.906.657-2.505.437-.6 1.055-.899 1.852-.899.365 0 .736.066 1.114.198.379.132.755.287 1.128.465l.684-1.723c-.98-.469-1.955-.704-2.926-.704-.952 0-1.783.209-2.492.626-.708.417-1.252 1.016-1.63 1.798-.378.781-.567 1.692-.567 2.73 0 1.65.385 2.916 1.155 3.798.77.882 1.882 1.323 3.336 1.323zM99.354 99v-4.313h3.958V99h2.112v-9.994h-2.112v3.917h-3.958v-3.917h-2.119V99h2.12zM80.27 149l2.324-3.78 2.324 3.78h2.42l-3.377-5.038 3.138-4.956h-2.284l-2.112 3.596-2.153-3.596h-2.338l3.103 4.84L78 149h2.27zm10.27 0v-3.835h1.128L94.054 149h2.351c-.456-.656-1.435-2.108-2.94-4.354.593-.26 1.051-.62 1.375-1.077.323-.458.485-.981.485-1.569 0-1.007-.326-1.758-.978-2.252-.651-.495-1.656-.742-3.014-.742H88.42V149h2.119zm.683-5.558h-.683v-2.7h.642c.684 0 1.189.1 1.515.301.325.2.488.538.488 1.012 0 .478-.16.83-.478 1.052-.32.224-.814.335-1.484.335zM99.607 149v-3.555h.91c1.239 0 2.195-.285 2.867-.854.672-.57 1.008-1.392 1.008-2.468 0-1.034-.315-1.813-.947-2.334-.63-.522-1.552-.783-2.765-.783h-3.192V149h2.119zm.697-5.291h-.697v-2.967h.964c.579 0 1.004.119 1.275.356.271.237.407.603.407 1.1 0 .492-.162.867-.486 1.125-.323.257-.811.386-1.463.386z" transform="translate(64 26)"></path>
									</g>
								</g>
								<g mask="url(#prefix__b)">
									<use fill="#000" filter="url(#prefix__k)" xlink:href="#prefix__l"></use>
									<use fill="#FFF" xlink:href="#prefix__l"></use>
								</g>
								<path fill="#FBBE50" fill-opacity=".75" d="M70.094 145.786c-1.87-1.366-4.438-1.822-4.438-1.822s2.337-1.366 3.27-2.505c.935-1.367 1.405-3.189 1.405-4.328 0-.91.23-5.238-3.275-7.743-2.568-1.822-5.608-2.733-9.815-2.961V118h-5.375v8.427h-4.207V118H42.05v8.427H31.3v5.466h3.272c.935 0 2.337 0 3.04.683.699.911.699 1.14.699 2.506v21.862c0 .458 0 1.139-.467 1.596-.468.456-.935.456-2.104.456H32.47l-1.169 6.377h10.75v8.427h5.61v-8.427h4.206v8.427h5.61v-8.655c1.4 0 2.803-.23 3.506-.23 1.634-.225 5.142-.68 8.411-2.73 3.275-2.278 3.973-5.694 4.207-9.11-.234-3.645-1.634-5.922-3.506-7.289zM47.5 132.635s1.606-.235 3.436-.235c1.606 0 3.208 0 5.499.704 2.29.705 3.436 2.348 3.665 4.461 0 1.878-.916 3.287-2.29 4.226-1.605.94-3.666 1.409-5.5 1.409h-4.58v-10.565h-.23zm12.478 25.284c-1.177.69-3.769 1.38-6.358 1.38-2.354.227-6.12 0-6.12 0v-11.497s3.53-.23 6.355 0c2.825.228 4.946.92 6.123 1.377.939.463 2.822 1.612 2.822 4.142 0 2.989-1.412 3.906-2.822 4.598z" mask="url(#prefix__b)"></path>
							</g>
						</svg>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-body">
					<h5 class="card-title">CFD Trading</h5>
					<p class="card-text">Go long or short on FX from just 1 pip. Trade commodities with flexible
						leverage.</p>
					<a href="https://igeniusfx.com/register" style="width: fit-content;">Trade Now</a>
					<div style="padding: 0;margin: 0;">

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="290" height="180" viewBox="0 0 290 180">
							<defs>
								<rect id="prefix__a" width="290" height="179" x="0" y="0" rx="10"></rect>
								<rect id="prefix__c" width="230" height="240" x="12" y="29" rx="5"></rect>
								<rect id="prefix__g" width="35" height="35" x="0" y="0" rx="4"></rect>
								<rect id="prefix__i" width="230" height="240" x="0" y="0" rx="5"></rect>
								<rect id="prefix__l" width="25.575" height="18" x=".165" y=".165" rx="2"></rect>
								<rect id="prefix__o" width="25" height="15" x="0" y="0" rx="2"></rect>
								<rect id="prefix__r" width="90" height="60" x="0" y="0" rx="3"></rect>
								<rect id="prefix__t" width="90" height="60" x="0" y="0" rx="3"></rect>
								<linearGradient id="prefix__e" x1="0%" x2="122.816%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#FFF"></stop>
									<stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__f" x1="120.454%" x2="35.454%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop>
									<stop offset="100%" stop-color="#FFF"></stop>
								</linearGradient>
								<linearGradient id="prefix__h" x1="50%" x2="50%" y1="0%" y2="100%">
									<stop offset="0%" stop-color="#FFF" stop-opacity=".75"></stop>
									<stop offset="100%" stop-color="#2C2C2C" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__p" x1="50%" x2="50%" y1="0%" y2="138.853%">
									<stop offset="0%" stop-color="#4D4D4D"></stop>
									<stop offset="100%" stop-color="#848484"></stop>
								</linearGradient>
								<linearGradient id="prefix__q" x1="0%" x2="122.816%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#FFF"></stop>
									<stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="prefix__v" x1="100%" x2="36.8%" y1="50%" y2="50%">
									<stop offset="0%" stop-color="#D8D8D8" stop-opacity=".5"></stop>
									<stop offset="100%" stop-color="#EEE" stop-opacity=".5"></stop>
								</linearGradient>
								<filter id="prefix__d" width="126.5%" height="125.4%" x="-13.3%" y="-12.3%" filterUnits="objectBoundingBox">
									<feMorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1"></feMorphology>
									<feOffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"></feColorMatrix>
								</filter>
								<filter id="prefix__j" width="126.5%" height="125.4%" x="-13.3%" y="-12.3%" filterUnits="objectBoundingBox">
									<feMorphology in="SourceAlpha" operator="dilate" radius="2" result="shadowSpreadOuter1"></feMorphology>
									<feOffset dy="1" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="8"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
								</filter>
								<filter id="prefix__n" width="156%" height="193.3%" x="-36%" y="-60%" filterUnits="objectBoundingBox">
									<feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="2"></feGaussianBlur>
									<feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
								</filter>
							</defs>
							<g fill="none" fill-rule="evenodd">
								<mask id="prefix__b" fill="#fff">
									<use xlink:href="#prefix__a"></use>
								</mask>
								<use fill="#FFF" xlink:href="#prefix__a"></use>
								<g mask="url(#prefix__b)">
									<g transform="translate(8 28)">
										<g>
											<use fill="#000" filter="url(#prefix__d)" xlink:href="#prefix__c"></use>
											<use fill="#FFF" xlink:href="#prefix__c"></use>
										</g>
										<g>
											<path fill="#F6FCEE" fill-opacity=".5" d="M6.656 28.672L16.446 22.971 31.132 22.971 36.027 30.098 44.593 30.098 58.055 24.397 69.069 28.672 77.636 21.546 93.545 15.845 100.888 10.144 118.021 7.293 124.14 11.569 133.931 15.845 146.169 10.144 157.183 10.856 162.078 10.856 173.092 0.167 190.225 7.293 196.344 0.167 196.344 56.568 6.656 56.568z" transform="translate(19 107)"></path>
											<path stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M6.656 29.69L16.446 23.786 31.132 23.786 36.027 31.167 44.593 31.167 58.055 25.262 69.069 29.69 77.636 22.31 93.545 16.405 100.888 10.5 118.021 7.548 124.14 11.976 133.931 16.405 146.169 10.5 157.183 11.238 162.078 11.238 173.092 0.167 190.225 7.548 196.344 0.167" transform="translate(19 107)"></path>
											<path fill="url(#prefix__e)" d="M84.708 -61.724L118.292 -61.724 118.292 141.276 84.708 141.276z" transform="translate(19 107) rotate(-90 101.5 39.776)"></path>
										</g>
										<g>
											<text fill="#6BAD10" font-family="DINOT-Medium, DIN OT" font-size="12" font-weight="400" letter-spacing="-.15" transform="translate(140.5 100)">
												<tspan x="50.134" y="12.5">0.15%</tspan>
											</text>
											<path fill="#6AAC0E" d="M44 6.5L47 9.5 41 9.5z" transform="translate(140.5 100)"></path>
										</g>
										<path fill="url(#prefix__f)" d="M0 0H67V158H0z"></path>
										<g transform="translate(32 49)">
											<use fill="#F7F7F7" xlink:href="#prefix__g"></use>
											<rect fill="url(#prefix__h)" style="mix-blend-mode:overlay" width="35" height="35" rx="4"></rect>
											<g fill="#000">
												<path d="M11.805 14.606c1.754 3.083 3.872 4.159 5.978 4.362-2.661 1.029-5.28-.355-5.978-4.362M9.362 2.998c2.043 6.724-1.23 10.805 1.242 15.12 1.699 2.964 5.384 4.76 9.145 2.55 3.48-2.046 3.957-6.289 2.226-9.234-2.465-4.193-7.73-3.382-12.613-8.436M2.426 5.918c.654 1.648 1.628 2.328 2.657 2.575-1.39.325-2.59-.543-2.657-2.575M2.025 0c.543 3.472-1.362 5.265-.438 7.573.635 1.586 2.335 2.732 4.35 1.9 1.866-.772 2.398-2.84 1.745-4.418C6.754 2.807 4.091 2.842 2.025 0" transform="translate(5 6)"></path>
											</g>
										</g>
										<path fill="#393939" fill-rule="nonzero" d="M82.571 72.137c1.532 0 2.707-.445 3.528-1.333.82-.889 1.23-2.16 1.23-3.815 0-1.659-.407-2.93-1.22-3.814-.814-.884-1.988-1.326-3.524-1.326s-2.715.438-3.538 1.316c-.822.877-1.234 2.147-1.234 3.81 0 1.664.41 2.94 1.23 3.829.821.888 1.997 1.333 3.528 1.333zm0-1.778c-.843 0-1.476-.282-1.9-.847-.424-.565-.636-1.406-.636-2.523 0-1.116.214-1.958.643-2.526.428-.567 1.064-.85 1.907-.85 1.682 0 2.522 1.125 2.522 3.376 0 2.247-.845 3.37-2.536 3.37zM91.345 72v-9.994h-2.12V72h2.12zm8.513 0v-1.75h-4.054v-8.244h-2.119V72h6.173z"></path>
									</g>
								</g>
								<g mask="url(#prefix__b)">
									<g>
										<g transform="translate(99 16)">
											<mask id="prefix__k" fill="#fff">
												<use xlink:href="#prefix__i"></use>
											</mask>
											<use fill="#000" filter="url(#prefix__j)" xlink:href="#prefix__i"></use>
											<use fill="#FFF" xlink:href="#prefix__i"></use>
											<g mask="url(#prefix__k)">
												<g transform="translate(25 31)">
													<mask id="prefix__m" fill="#fff">
														<use xlink:href="#prefix__l"></use>
													</mask>
													<use fill="#000" fill-rule="nonzero" xlink:href="#prefix__l"></use>
													<path fill="#FFF" fill-rule="nonzero" d="M0 0H25.85V18.15H0z" mask="url(#prefix__m)"></path>
													<path fill="#FE352E" fill-rule="nonzero" d="M12.1 0H25.85V1.65H12.1zM12.1 2.75H25.85V4.4H12.1zM12.1 5.5H25.85V7.15H12.1zM12.1 8.25H25.85V9.9H12.1zM0 11H25.85V12.65H0zM0 13.75H25.85V15.4H0zM0 16.5H25.85V18.15H0z" mask="url(#prefix__m)"></path>
													<path fill="#08399C" fill-rule="nonzero" d="M0 0H12.1V9.9H0z" mask="url(#prefix__m)"></path>
													<path fill="#FFF" d="M3.327 2.089L2.914 2.391 2.97 1.883 2.502 1.677 2.97 1.471 2.914 0.963 3.327 1.264 3.739 0.963 3.684 1.471 4.152 1.677 3.684 1.883 3.739 2.391z" mask="url(#prefix__m)" transform="rotate(30 3.327 1.677)"></path>
													<path fill="#FFF" d="M3.327 5.389L2.914 5.691 2.97 5.183 2.502 4.977 2.97 4.771 2.914 4.263 3.327 4.564 3.739 4.263 3.684 4.771 4.152 4.977 3.684 5.183 3.739 5.691z" mask="url(#prefix__m)" transform="rotate(30 3.327 4.977)"></path>
													<path fill="#FFF" d="M3.327 8.689L2.914 8.991 2.97 8.483 2.502 8.277 2.97 8.071 2.914 7.563 3.327 7.864 3.739 7.563 3.684 8.071 4.152 8.277 3.684 8.483 3.739 8.991z" mask="url(#prefix__m)" transform="rotate(30 3.327 8.277)"></path>
													<path fill="#FFF" d="M6.627 2.089L6.214 2.391 6.27 1.883 5.802 1.677 6.27 1.471 6.214 0.963 6.627 1.264 7.039 0.963 6.984 1.471 7.452 1.677 6.984 1.883 7.039 2.391z" mask="url(#prefix__m)" transform="rotate(30 6.627 1.677)"></path>
													<path fill="#FFF" d="M6.627 5.389L6.214 5.691 6.27 5.183 5.802 4.977 6.27 4.771 6.214 4.263 6.627 4.564 7.039 4.263 6.984 4.771 7.452 4.977 6.984 5.183 7.039 5.691z" mask="url(#prefix__m)" transform="rotate(30 6.627 4.977)"></path>
													<path fill="#FFF" d="M9.927 5.389L9.514 5.691 9.57 5.183 9.102 4.977 9.57 4.771 9.514 4.263 9.927 4.564 10.339 4.263 10.284 4.771 10.752 4.977 10.284 5.183 10.339 5.691z" mask="url(#prefix__m)" transform="rotate(30 9.927 4.977)"></path>
													<path fill="#FFF" d="M6.627 8.689L6.214 8.991 6.27 8.483 5.802 8.277 6.27 8.071 6.214 7.563 6.627 7.864 7.039 7.563 6.984 8.071 7.452 8.277 6.984 8.483 7.039 8.991z" mask="url(#prefix__m)" transform="rotate(30 6.627 8.277)"></path>
													<path fill="#FFF" d="M9.927 2.089L9.514 2.391 9.57 1.883 9.102 1.677 9.57 1.471 9.514 0.963 9.927 1.264 10.339 0.963 10.284 1.471 10.752 1.677 10.284 1.883 10.339 2.391z" mask="url(#prefix__m)" transform="rotate(30 9.927 1.677)"></path>
													<path fill="#FFF" d="M9.927 8.689L9.514 8.991 9.57 8.483 9.102 8.277 9.57 8.071 9.514 7.563 9.927 7.864 10.339 7.563 10.284 8.071 10.752 8.277 10.284 8.483 10.339 8.991z" mask="url(#prefix__m)" transform="rotate(30 9.927 8.277)"></path>
													<path fill="#FFF" d="M1.677 3.739L1.264 4.041 1.32 3.533 0.852 3.327 1.32 3.121 1.264 2.612 1.677 2.914 2.089 2.612 2.034 3.121 2.502 3.327 2.034 3.533 2.089 4.041z" mask="url(#prefix__m)" transform="rotate(30 1.677 3.327)"></path>
													<path fill="#FFF" d="M1.677 7.039L1.264 7.341 1.32 6.833 0.852 6.627 1.32 6.421 1.264 5.912 1.677 6.214 2.089 5.912 2.034 6.421 2.502 6.627 2.034 6.833 2.089 7.341z" mask="url(#prefix__m)" transform="rotate(30 1.677 6.627)"></path>
													<path fill="#FFF" d="M4.977 3.739L4.564 4.041 4.62 3.533 4.152 3.327 4.62 3.121 4.564 2.612 4.977 2.914 5.389 2.612 5.334 3.121 5.802 3.327 5.334 3.533 5.389 4.041z" mask="url(#prefix__m)" transform="rotate(30 4.977 3.327)"></path>
													<path fill="#FFF" d="M8.277 3.739L7.864 4.041 7.92 3.533 7.452 3.327 7.92 3.121 7.864 2.612 8.277 2.914 8.689 2.612 8.634 3.121 9.102 3.327 8.634 3.533 8.689 4.041z" mask="url(#prefix__m)" transform="rotate(30 8.277 3.327)"></path>
													<path fill="#FFF" d="M4.977 7.039L4.564 7.341 4.62 6.833 4.152 6.627 4.62 6.421 4.564 5.912 4.977 6.214 5.389 5.912 5.334 6.421 5.802 6.627 5.334 6.833 5.389 7.341z" mask="url(#prefix__m)" transform="rotate(30 4.977 6.627)"></path>
													<path fill="#FFF" d="M8.277 7.039L7.864 7.341 7.92 6.833 7.452 6.627 7.92 6.421 7.864 5.912 8.277 6.214 8.689 5.912 8.634 6.421 9.102 6.627 8.634 6.833 8.689 7.341z" mask="url(#prefix__m)" transform="rotate(30 8.277 6.627)"></path>
													<g transform="translate(9 11)">
														<use fill="#000" filter="url(#prefix__n)" xlink:href="#prefix__o"></use>
														<use fill="url(#prefix__p)" xlink:href="#prefix__o"></use>
														<path fill="#FFF" fill-rule="nonzero" d="M7.228 11.088c.548 0 1.022-.095 1.424-.286.401-.19.708-.464.92-.822.213-.357.319-.773.319-1.248V4.575H8.533V8.5c0 .498-.1.863-.301 1.096-.2.233-.524.35-.969.35-.46 0-.79-.116-.989-.348-.199-.231-.299-.595-.299-1.09V4.575H4.618v4.14c0 .735.228 1.315.685 1.738.457.423 1.099.635 1.925.635zm5.435 0c.744 0 1.325-.167 1.742-.501.418-.334.627-.791.627-1.371 0-.42-.112-.773-.334-1.061-.223-.289-.635-.577-1.235-.864-.454-.217-.742-.367-.864-.45-.121-.084-.21-.17-.266-.26-.055-.09-.083-.194-.083-.314 0-.193.069-.35.206-.47.138-.12.336-.18.594-.18.217 0 .437.028.661.083.224.056.508.154.85.295l.44-1.06c-.331-.143-.648-.254-.951-.333-.304-.08-.622-.12-.956-.12-.68 0-1.212.164-1.598.489-.385.325-.578.772-.578 1.34 0 .302.059.565.176.791.117.226.274.423.47.593.197.17.491.347.884.532.419.2.696.344.832.435.137.09.24.185.31.284.07.098.106.21.106.336 0 .225-.08.395-.24.51-.16.114-.389.17-.687.17-.25 0-.524-.039-.824-.118-.3-.079-.668-.215-1.101-.408V10.7c.527.258 1.133.387 1.819.387zM16.63 11l.466-1.53h2.343l.465 1.53h1.468l-2.276-6.451H17.43L15.163 11h1.467zm2.483-2.672H17.44c.457-1.48.734-2.407.83-2.782.024.106.063.25.117.431.054.182.297.965.727 2.351z"></path>
													</g>
												</g>
											</g>
											<g fill="#323232" fill-rule="nonzero" mask="url(#prefix__k)">
												<path d="M68.151 47v-4.703c0-.57-.043-1.522-.13-2.858h.062L72.431 47h2.693v-9.994h-1.907v4.73c0 .538.034 1.456.102 2.755h-.048l-4.34-7.485h-2.673V47h1.893zm11.528.137c1.158 0 2.062-.26 2.71-.78.65-.52.975-1.23.975-2.132 0-.652-.173-1.202-.52-1.651-.346-.45-.986-.897-1.92-1.344-.707-.337-1.155-.57-1.344-.7-.189-.13-.327-.265-.413-.404-.087-.139-.13-.301-.13-.488 0-.301.107-.545.321-.732.214-.187.522-.28.923-.28.337 0 .68.043 1.029.13.348.086.79.24 1.323.458l.683-1.648c-.515-.223-1.008-.396-1.48-.52-.471-.122-.967-.184-1.487-.184-1.057 0-1.885.253-2.484.76-.6.505-.9 1.2-.9 2.084 0 .47.092.88.274 1.23.182.351.426.66.732.923.305.265.763.54 1.374.828.651.31 1.083.535 1.295.676.212.142.372.289.482.441.11.153.164.327.164.523 0 .351-.124.615-.373.793-.248.178-.605.267-1.07.267-.387 0-.814-.062-1.281-.185-.467-.123-1.038-.335-1.713-.636v1.97c.82.4 1.764.6 2.83.6zM87.831 47c1.768 0 3.12-.438 4.057-1.313.936-.874 1.405-2.135 1.405-3.78 0-1.545-.452-2.748-1.354-3.61-.902-.86-2.17-1.291-3.8-1.291H85V47h2.83zm.198-1.75h-.91v-6.508h1.129c1.895 0 2.843 1.073 2.843 3.22 0 2.192-1.02 3.288-3.062 3.288zm16.176 4.129l-2.406-2.687c.807-.369 1.419-.951 1.836-1.746.417-.795.625-1.781.625-2.957 0-1.659-.407-2.93-1.22-3.814-.814-.884-1.988-1.326-3.524-1.326s-2.715.438-3.538 1.316c-.822.877-1.233 2.147-1.233 3.81 0 1.664.41 2.94 1.23 3.829.82.888 1.996 1.333 3.527 1.333h.158l1.832 2.242h2.713zm-4.703-4.02c-.843 0-1.476-.282-1.9-.847-.424-.565-.636-1.406-.636-2.523 0-1.116.214-1.958.643-2.526.428-.567 1.064-.85 1.907-.85 1.682 0 2.522 1.125 2.522 3.376 0 2.247-.845 3.37-2.536 3.37zM110.682 47v-9.994h-1.736l-3.22 2.563 1.018 1.272 1.149-.923c.136-.11.38-.34.731-.69l-.034 1.039-.02.95V47h2.112zm6.025.137c1.19 0 2.07-.42 2.642-1.258.572-.839.858-2.13.858-3.876 0-1.686-.295-2.967-.885-3.842-.59-.875-1.462-1.312-2.615-1.312-1.185 0-2.062.418-2.632 1.254-.57.836-.854 2.136-.854 3.9 0 1.69.293 2.969.878 3.835.586.866 1.455 1.299 2.608 1.299zm0-1.702c-.501 0-.858-.266-1.07-.797-.212-.53-.318-1.41-.318-2.635 0-1.226.107-2.107.322-2.642.214-.536.57-.803 1.066-.803.488 0 .842.267 1.063.803.221.535.332 1.416.332 2.642 0 1.212-.11 2.087-.329 2.625-.218.538-.574.807-1.066.807zm7.816 1.702c1.19 0 2.07-.42 2.642-1.258.572-.839.858-2.13.858-3.876 0-1.686-.295-2.967-.885-3.842-.59-.875-1.462-1.312-2.615-1.312-1.185 0-2.062.418-2.632 1.254-.57.836-.854 2.136-.854 3.9 0 1.69.293 2.969.878 3.835.586.866 1.455 1.299 2.608 1.299zm0-1.702c-.501 0-.858-.266-1.07-.797-.211-.53-.317-1.41-.317-2.635 0-1.226.107-2.107.32-2.642.215-.536.57-.803 1.067-.803.488 0 .842.267 1.063.803.221.535.332 1.416.332 2.642 0 1.212-.11 2.087-.328 2.625-.22.538-.575.807-1.067.807z"></path>
											</g>
										</g>
										<g>
											<path fill="#F6FCEE" fill-opacity=".5" d="M6.525 27.5L16.122 22.167 30.518 22.167 35.317 28.833 43.715 28.833 56.911 23.5 67.708 27.5 76.106 20.833 91.702 15.5 98.9 10.167 115.696 7.5 121.694 11.5 131.292 15.5 143.288 10.167 154.086 10.833 158.884 10.833 169.681 0.833 186.477 7.5 192.475 0.833 192.475 53.596 6.525 53.596z" transform="translate(99 16) translate(18.5 69.5)"></path>
											<path stroke="#6BAD10" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" d="M6.525 28.452L16.122 22.929 30.518 22.929 35.317 29.833 43.715 29.833 56.911 24.31 67.708 28.452 76.106 21.548 91.702 16.024 98.9 10.5 115.696 7.738 121.694 11.881 131.292 16.024 143.288 10.5 154.086 11.19 158.884 11.19 169.681 0.833 186.477 7.738 192.475 0.833" transform="translate(99 16) translate(18.5 69.5)"></path>
											<path fill="url(#prefix__q)" d="M83.792 -61.612L115.208 -61.612 115.208 137.388 83.792 137.388z" transform="translate(99 16) translate(18.5 69.5) rotate(-90 99.5 37.888)"></path>
										</g>
										<g transform="translate(99 16) translate(22 119)">
											<mask id="prefix__s" fill="#fff">
												<use xlink:href="#prefix__r"></use>
											</mask>
											<rect width="89.5" height="59.5" x=".25" y=".25" stroke="#777" stroke-opacity=".5" stroke-width=".5" rx="3"></rect>
											<path fill="#1A2D3D" fill-opacity=".9" d="M0 0H90V24H0z" mask="url(#prefix__s)"></path>
											<path fill="#FFF" fill-rule="nonzero" d="M13.283 17c.969 0 1.736-.219 2.3-.656.564-.438.847-1.047.847-1.828 0-.551-.12-.993-.36-1.325-.24-.332-.633-.558-1.175-.68v-.058c.398-.066.717-.264.958-.592.24-.328.36-.748.36-1.26 0-.753-.275-1.303-.823-1.649-.55-.346-1.431-.518-2.646-.518h-2.666V17h3.205zm-.334-5.174h-1.054V9.922h.955c.52 0 .899.071 1.14.214.24.142.36.378.36.706 0 .351-.11.603-.331.756-.221.152-.578.228-1.07.228zm.13 3.674h-1.184v-2.232h1.125c1.015 0 1.523.355 1.523 1.066 0 .395-.12.687-.357.879-.239.191-.608.287-1.108.287zm8.334 1.617c.73 0 1.363-.127 1.898-.38.535-.255.944-.62 1.227-1.096.284-.477.425-1.032.425-1.664V8.434h-1.81v5.232c0 .664-.134 1.151-.402 1.462-.267.31-.698.466-1.292.466-.613 0-1.052-.155-1.318-.463-.266-.309-.398-.793-.398-1.453V8.434h-1.811v5.52c0 .98.305 1.752.914 2.317.61.564 1.465.846 2.567.846zM30.479 17v-3.334l2.842-5.232h-1.957l-1.787 3.527-1.775-3.527h-1.97l2.843 5.29V17h1.804z" mask="url(#prefix__s)"></path>
										</g>
										<g transform="translate(99 16) translate(122 119)">
											<mask id="prefix__u" fill="#fff">
												<use xlink:href="#prefix__t"></use>
											</mask>
											<rect width="89.5" height="59.5" x=".25" y=".25" stroke="#777" stroke-opacity=".5" stroke-width=".5" rx="3"></rect>
											<path fill="#1A2D3D" fill-opacity=".9" d="M0 0H90V24H0z" mask="url(#prefix__u)"></path>
											<path fill="#FFF" fill-rule="nonzero" d="M11.977 17.117c.992 0 1.766-.222 2.323-.668.556-.445.835-1.054.835-1.828 0-.559-.149-1.03-.446-1.415-.296-.385-.845-.768-1.646-1.151-.605-.29-.99-.49-1.151-.6-.163-.112-.28-.227-.355-.347-.074-.119-.111-.258-.111-.419 0-.257.092-.466.275-.627.184-.16.447-.24.791-.24.29 0 .583.037.882.112.299.074.677.205 1.134.392l.586-1.412c-.442-.191-.865-.34-1.269-.445-.404-.106-.829-.158-1.274-.158-.906 0-1.616.216-2.13.65-.514.434-.77 1.03-.77 1.787 0 .402.078.754.234 1.055.156.3.365.564.627.79.261.227.654.464 1.177.71.559.265.93.459 1.11.58.182.12.32.247.414.378.094.13.14.28.14.448 0 .3-.106.527-.319.68-.213.152-.518.228-.917.228-.332 0-.698-.053-1.098-.158-.4-.105-.89-.287-1.468-.545v1.688c.703.343 1.511.515 2.426.515zM21.47 17v-1.5h-3.117v-2.209h2.9v-1.488h-2.9V9.922h3.117V8.434h-4.933V17h4.933zm6.928 0v-1.5h-3.474V8.434h-1.817V17H28.4zm6.63 0v-1.5h-3.475V8.434h-1.816V17h5.29z" mask="url(#prefix__u)"></path>
										</g>
										<path fill="url(#prefix__v)" d="M194.5 151c4.142 0 7.5 3.358 7.5 7.5 0 4.142-3.358 7.5-7.5 7.5h-14c-4.142 0-7.5-3.358-7.5-7.5 0-4.142 3.358-7.5 7.5-7.5h14zM167 161c1.105 0 2 .895 2 2s-.895 2-2 2h-24c-1.105 0-2-.895-2-2s.895-2 2-2h24zM93.5 151c4.142 0 7.5 3.358 7.5 7.5 0 4.142-3.358 7.5-7.5 7.5h-14c-4.142 0-7.5-3.358-7.5-7.5 0-4.142 3.358-7.5 7.5-7.5h14zM66 161c1.105 0 2 .895 2 2s-.895 2-2 2H42c-1.105 0-2-.895-2-2s.895-2 2-2h24z" transform="translate(99 16)"></path>
									</g>
								</g>
							</g>
						</svg>

					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin: 100px 0;">
			<div class="col-md-6">
				<h2>
					<b>Trade and invest</b> in top stocks and ETFs. Trade currency pairs, Indices and Commodities via
					CFDs. Investing in the financial markets has never been easier.
				</h2>
				<a href="https://igeniusfx.com/register" style="width: fit-content;" class="themebtn">Start
					Trading</a>
				<div style="border-left: 1px solid black;margin-top: 40px;padding: 15px;">
					<h1 id="demo" style="color: #0047ab;font-size: 70px;font-weight: 800;">86,424,156</h1>
					<h6>TRADES OPENED ON THE PLATFORM</h6>
					<script>
						let interval = setInterval(function() {
							let now = new Date();
							let show = Math.floor(now / 20000);

							function numberWithCommas(x) {
								return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
							}

							val = numberWithCommas(show);

							document.getElementById("demo").innerHTML = val;
						}, 1000)
					</script>
				</div>
			</div>
			<div class="col-md-6">
				<style>
					.tradingview-widget-container {
						display: none;
					}

					.active6 {
						display: block;
					}

				</style>
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget1">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3ATSLA#%7B%22symbol%22%3A%22NASDAQ%3ATSLA%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget2">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3AAAPL#%7B%22symbol%22%3A%22NASDAQ%3AAAPL%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container active6" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget3">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3AAMZN#%7B%22symbol%22%3A%22NASDAQ%3AAMZN%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container active6" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget4">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3AMSFT#%7B%22symbol%22%3A%22NASDAQ%3AMSFT%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget5">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3ANFLX#%7B%22symbol%22%3A%22NASDAQ%3ANFLX%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container" style="margin-bottom: 3px; width: 100%; height: 2px;" id="widget6">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/symbol-info/?locale=en&amp;symbol=NASDAQ%3AFB#%7B%22symbol%22%3A%22NASDAQ%3AFB%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22height%22%3A205%2C%22utm_source%22%3A%22igeniusfx.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22symbol-info%22%2C%22page-uri%22%3A%22igeniusfx.com%2F%22%7D" title="symbol info TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 2px; width: 100%;"></iframe>
					
				<style>
.tradingview-widget-copyright {
	font-size: 13px !important;
	line-height: 32px !important;
	text-align: center !important;
	vertical-align: middle !important;
	/* @mixin sf-pro-display-font; */
	font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright .blue-text {
	color: #2962FF !important;
}

.tradingview-widget-copyright a {
	text-decoration: none !important;
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:visited {
	color: #B2B5BE !important;
}

.tradingview-widget-copyright a:hover .blue-text {
	color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
	color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
	color: #2962FF !important;
}
</style></div>
				<!-- TradingView Widget END -->


				<script>
					let cs = 0;
					let ts = 6;

					function next() {
						document.getElementById("widget" + (cs + 1)).classList.remove("active6");
						document.getElementById("widget" + (cs + 2)).classList.remove("active6");
						cs = (ts + cs + 2) % ts;
						document.getElementById("widget" + (cs + 1)).classList.add("active6");
						document.getElementById("widget" + (cs + 2)).classList.add("active6");
					}

					setInterval(function() {
						next();
					}, 10000);
				</script>
			</div>
		</div>

	</div>
	<!-- project -->
</div>
<!-- =======================
Testimonials START -->
<section class="p-0">
<div class="container">
<div class="row position-relative">
<!-- Title -->
<div class="col-sm-8 mb-3 mx-auto text-center pt-7">
<h2 class="display-5 mb-5 text-dark-stroke">Testimonials</h2>
</div>
<!-- Testimonials -->
<div class="col-md-10 mx-auto text-center pb-7">
<div class="tiny-slider arrow-md-none arrow-bordered arrow-large arrow-round">
<div class="tiny-slider-inner" data-arrow="true" data-autoplay="false" data-dots="false" data-edge="50" data-gutter="0" data-items="1">
<!-- Testimonial item -->
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2023-6414948331695079625.jpg') }}"/></div>
<p class="lead">I'm very glad to invest and promote the successful company,   I'm in the Agricultural plan.</p>
<h6 class="mb-0 mt-3">Parada</h6>
<span class="small">Active user</span>
</div>
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2022-14849734001656572996.jpg') }}"/></div>
<p class="lead">Passion, knowledge and a genuine interest in achieving the best for clients is what makes a truly professional Financial Adviser. Your team had this and more. Your dedication to clients, business excellence and education sets you apart and I would highly recommend you to anyone wanting to achieve better financial outcomes.</p>
<h6 class="mb-0 mt-3">Sarah Mpena</h6>
<span class="small">Head of Finance, PCID Corp.</span>
</div>
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2022-8705980301646140909.jpg') }}"/></div>
<p class="lead">I am absolutely delighted with your service. It is really refreshing to work with a financial adviser who is truly interested in their client’s needs, circumstances and preferences. What really impressed me was the way you took the time to get a feeling for where I was at, your depth of knowledge, lateral thinking and your common sense approach.</p>
<h6 class="mb-0 mt-3">Emma Peterson</h6>
<span class="small">CFO, iStep Ltd.</span>
</div>
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2022-6924230191646140920.jpg') }}"/></div>
<p class="lead">Good platform for investments and returns</p>
<h6 class="mb-0 mt-3">Grace Noman</h6>
<span class="small">Investor</span>
</div>
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2022-20674210211646140932.jpg') }}"/></div>
<p class="lead">I must thank and appreciate the management for their great work, Since I joined this platform it has been earning multiple profits and Huge profits.</p>
<h6 class="mb-0 mt-3">Maggie Pengs</h6>
<span class="small">Business Owner</span>
</div>
<div class="item px-3 px-md-6">
<div class="position-absolute top-50 start-50 translate-middle display-1 text-body z-index-n9 opacity-1"><i class="fas fa-quote-left"></i></div>
<div class="avatar"><img alt="avatar" class="avatar-img rounded-circle" src="{{ asset('assets/testimony/2022-15019331431661316240.jpg') }}"/></div>
<p class="lead">Success is not about been the only successful one, Success is making a lot of people successful because for me that’s my Success. I introduced my loved ones to this platform and they are making it big now.</p>
<h6 class="mb-0 mt-3">Kimbo Yin</h6>
<span class="small">Investor</span>
</div>
</div>
</div>
</div>
</div><!-- row END -->
</div>
</section>
<!-- =======================
Testimonials END -->
<!-- =======================
Blog START -->
<section>
<div class="container">
<div class="row">
<div class="col-12">
<span class="font-alt fw-normal display-8">Ideas, stories and thoughts </span>
<h2 class="display-7 mb-5">Latest Blogs</h2>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="tiny-slider dots-bordered mb-7">
<div class="tiny-slider-inner" data-arrow="false" data-autoplay="false" data-dots="true" data-items-md="2" data-items-sm="2" data-items-xl="3" data-items-xs="1">
<!-- Card item START -->
<div class="item">
<div class="card card-metro">
<!-- Card Image -->
<div class="card-image" style="height: 450px; background-image: url(assets/new-app/news/2023-14006765661701533851.jpg); background-size: cover; background-position: center;">
<!-- <img src="https://meridian-trades.com/assets/new-app/news/2023-14006765661701533851.jpg" alt="card image"> -->
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<div class="mt-auto card-text">
<!-- Featured label-->
<span class="featured-label" title="Featured Blog"><i class="fas fa-star"></i></span>
<div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
<!-- Card Categories -->
<div class="text-primary-hover">
<a class="text-white me-2" href="#">Article</a>
</div>
<!-- Divider -->
<i class="fas fa-circle smaller me-2 fw-bold"></i>
<!-- Min of read -->
<span>1 Min read</span>
</div>
<h4><a class="text-white text-primary-hover" href="#">UK Legislators urge caution in retail digital pound rollout</a></h4>
<p class="text-white text-truncate">British legislators are urging a careful stance regarding implementing a retail digital pound. They </p>
<a class="btn btn-line text-white mb-0" href="{{ route('10') }}">Read Article</a>
</div>
</div>
</div>
</div>
<!-- Card item START -->
<div class="item">
<div class="card card-metro">
<!-- Card Image -->
<div class="card-image" style="height: 450px; background-image: url(assets/new-app/news/2022-2157804491661545278.jpg); background-size: cover; background-position: center;">
<!-- <img src="https://meridian-trades.com/assets/new-app/news/2022-2157804491661545278.jpg" alt="card image"> -->
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<div class="mt-auto card-text">
<!-- Featured label-->
<span class="featured-label" title="Featured Blog"><i class="fas fa-star"></i></span>
<div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
<!-- Card Categories -->
<div class="text-primary-hover">
<a class="text-white me-2" href="#">Article</a>
</div>
<!-- Divider -->
<i class="fas fa-circle smaller me-2 fw-bold"></i>
<!-- Min of read -->
<span>2 Min read</span>
</div>
<h4><a class="text-white text-primary-hover" href="#">Coinbase Launches Voter Registration Tool Ahead of November Elections</a></h4>
<p class="text-white text-truncate">Coinbase, America’s biggest cryptocurrency exchange, today launched a voter registration tool and </p>
<a class="btn btn-line text-white mb-0" href="{{ route('9') }}">Read Article</a>
</div>
</div>
</div>
</div>
<!-- Card item START -->
<div class="item">
<div class="card card-metro">
<!-- Card Image -->
<div class="card-image" style="height: 450px; background-image: url(assets/new-app/news/news6.jpg); background-size: cover; background-position: center;">
<!-- <img src="https://meridian-trades.com/assets/new-app/news/news6.jpeg" alt="card image"> -->
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<div class="mt-auto card-text">
<!-- Featured label-->
<span class="featured-label" title="Featured Blog"><i class="fas fa-star"></i></span>
<div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
<!-- Card Categories -->
<div class="text-primary-hover">
<a class="text-white me-2" href="#">Article</a>
</div>
<!-- Divider -->
<i class="fas fa-circle smaller me-2 fw-bold"></i>
<!-- Min of read -->
<span>2 Min read</span>
</div>
<h4><a class="text-white text-primary-hover" href="#">New Research Suggests Satoshi Nakamoto Lived in London Creating Bitcoin</a></h4>
<p class="text-white text-truncate">The hunt for the mysterious Bitcoin inventor, Satoshi Nakamoto continues to this day, as new data-dr</p>
<a class="btn btn-line text-white mb-0" href="{{ route('7') }}">Read Article</a>
</div>
</div>
</div>
</div>
<!-- Card item START -->
<div class="item">
<div class="card card-metro">
<!-- Card Image -->
<div class="card-image" style="height: 450px; background-image: url(assets/new-app/news/news1.jpg); background-size: cover; background-position: center;">
<!-- <img src="https://meridian-trades.com/assets/new-app/news/news1.jpeg" alt="card image"> -->
</div>
<!-- Card Overlay -->
<div class="card-img-overlay d-flex flex-column">
<div class="mt-auto card-text">
<!-- Featured label-->
<span class="featured-label" title="Featured Blog"><i class="fas fa-star"></i></span>
<div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
<!-- Card Categories -->
<div class="text-primary-hover">
<a class="text-white me-2" href="#">Article</a>
</div>
<!-- Divider -->
<i class="fas fa-circle smaller me-2 fw-bold"></i>
<!-- Min of read -->
<span>5 Min read</span>
</div>
<h4><a class="text-white text-primary-hover" href="#">Bitcoin (BTC) Was Invented By A Pseudonymous Individual Or Group Named Satoshi Nakamoto In 2008</a></h4>
<p class="text-white text-truncate">Bitcoin (BTC) was invented by a pseudonymous individual or group named Satoshi Nakamoto in 2008 and </p>
<a class="btn btn-line text-white mb-0" href="{{ route('2') }}">Read Article</a>
</div>
</div>
</div>
</div>
<!-- Card item END -->
</div>
</div>
</div>
</div> <!-- Row End -->
</div>
</section>
<!-- =======================
Blog END -->
<!-- =======================
About Fun fact START -->
<section class="pt-0">
<div class="container">
<div class="row g-0">
<!-- Fact Item -->
<div class="col-lg-4">
<div class="bg-light p-4 p-md-5 h-100">
<h2 class="display-6 text-primary-stroke text-dark-shadow">874,789</h2>
<h4 class="mb-4">Active Traders</h4>
<p>Join a global network of professionals who are dedicated to maximizing their trading potential and achieving their financial goals. </p>
</div>
</div>
<!-- Fact Item -->
<div class="col-lg-4">
<div class="bg-dark p-4 p-md-5 h-100 bg-dark-overlay-4" style="background:url(assets/web/images/bg/06.jpg) no-repeat center center; background-size:cover;">
<h2 class="display-6 text-primary-stroke text-light-shadow">$2.5B+</h2>
<h4 class="text-white mb-4">Asset Transaction Value</h4>
<p class="text-white">This statistic provides insight into the trading volume and activity on our platform, reflecting the overall liquidity and engagement of our clients.</p>
</div>
</div>
<!-- Fact Item -->
<div class="col-lg-4">
<div class="bg-dark p-4 p-md-5 h-100">
<h2 class="display-6 text-light-stroke text-primary-shadow">$745M+</h2>
<h4 class="text-white mb-4">Net Dividends Earned</h4>
<p class="text-white"> This metric provides insight into the profitability of dividend-yielding assets within a portfolio, reflecting the actual earnings received by the investor from dividends over a specified period.</p>
</div>
</div>
</div>
</div>
</section>



<!-- =======================
About Fun fact END -->@endsection('body')