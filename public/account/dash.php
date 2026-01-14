<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Bitrally is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                                                ">
    <meta name="keywords" content="Bitrally bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                                ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="https://bitrally.top/">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->

    <link rel="shortcut icon" href="https://bitrally.top/uploads/bitpaddyltd_icon2.jpg">

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/chartist.min.css">
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link href="https://bitrally.top/assets/dist/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://bitrally.top/assets/dist/css/intlTelInput.css">

    <script src="https://bitrally.top/assets/dist/js/jquery.min.js"></script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body class="dt-header--fixed theme-dark dt-layout--full-width o-auto">
    <style></style>
    <!-- Root -->
    <div class="dt-root op-1">
        <div class="dt-root__inner">
            <!-- Header -->
            <header class="dt-header">
                <!-- Header container -->
                <div class="dt-header__container">
                    <!-- Brand -->
                    <div class="dt-brand">
                        <!-- Brand tool -->
                        <div class="dt-brand__tool" data-toggle="main-sidebar">
                            <div class="hamburger-inner"></div>
                        </div>
                        <!-- /brand tool -->

                        <!-- Brand logo -->
                        <span class="dt-brand__logo">
                            <a class="dt-brand__logo-link" href="https://bitrally.top/">
                                <img class="d-none d-sm-inline-block w-100" src="https://bitrally.top/uploads/bitrally-logo1.png" alt="logo">
                                <img class="dt-brand__logo-symbol d-sm-none" src="https://bitrally.top/uploads/bitrally-logo1.png" alt="logo">
                            </a>
                        </span>
                        <!-- /brand logo -->

                    </div>
                    <!-- /brand -->

                    <!-- Header toolbar-->
                    <div class="dt-header__toolbar">


                        <div class="search-box d-none d-lg-block">
                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Home <span class="breadcrumb-arrow-right"></span> Dashboard</h1>
                        </div>

                        <!-- Header Menu Wrapper -->
                        <div class="dt-nav-wrapper">
                            <!-- Header Menu -->
                            <ul class="dt-nav d-lg-none">
                                <li class="dt-nav__item dt-notification-search dropdown">

                                    <!-- Dropdown Link -->
                                    <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
                                    <!-- /dropdown link -->

                                    <!-- Dropdown Option -->
                                    <div class="dropdown-menu">

                                        <!-- Search Box -->
                                        <form class="search-box right-side-icon">
                                            <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                                            <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                                        </form>
                                        <!-- /search box -->

                                    </div>
                                    <!-- /dropdown option -->

                                </li>
                            </ul>
                            <!-- /header menu -->
                            <!-- Header Menu -->
                            <ul class="dt-nav">
                                <li class="dt-nav__item dropdown">

                                    <!-- Dropdown Link -->
                                    <a href="#" class="dt-nav__link dropdown-toggle" id="currentLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="flag-icon flag-icon-rounded flag-icon-lg mr-1m" src="https://bitrally.top/uploads/gb-eng.png">
                                        <span>EN</span> </a>
                                    <!-- /dropdown link -->

                                    <!-- Dropdown Option -->
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://bitrally.top/switchlang/English">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://bitrally.top/uploads/gb-eng.png"><span>English</span> </button>
                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://bitrally.top/switchlang/Russian">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://bitrally.top/uploads/russia.png"><span>Russian</span> </button>
                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://bitrally.top/switchlang/Português">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://bitrally.top/uploads/portuguese.png"><span>Português</span> </button>
                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://bitrally.top/switchlang/Español">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://bitrally.top/uploads/spain.png"><span>Español</span> </button>
                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://bitrally.top/switchlang/German">
                                            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://bitrally.top/uploads/germany.png"><span>German</span> </button>
                                    </div>
                                    <!-- /dropdown option -->

                                </li>
                            </ul>
                            <!-- /header menu -->

                            <!-- Header Menu -->
                            <ul class="dt-nav">
                                <li class="dt-nav__item dropdown">

                                    <!-- Dropdown Link -->
                                    <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="dt-avatar size-30" src="https://bitrally.top/assets/dist/img/avatar.png" alt="mo chou">
                                        <span class="dt-avatar-info d-none d-sm-block">
                                            <span class="dt-avatar-name">mo chou</span>
                                            <span>Verify Your Account</span>
                                        </span> </a>
                                    <!-- /dropdown link -->

                                    <!-- Dropdown Option -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="https://bitrally.top/profile"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account </a>
                                        <a class="dropdown-item" href="https://bitrally.top/logout"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout </a>
                                    </div>
                                    <!-- /dropdown option -->

                                </li>
                            </ul>
                            <!-- /header menu -->
                        </div>
                        <!-- Header Menu Wrapper -->

                    </div>
                    <!-- /header toolbar -->

                </div>
                <!-- /header container -->

            </header>
            <!-- /header -->

            <!-- Site Main -->
            <main class="dt-main">
                <!-- Sidebar -->
                <aside id="main-sidebar" class="dt-sidebar ps dt-drawer position-left">
                    <div class="dt-sidebar__container mt-10">

                        <!-- Sidebar Navigation -->
                        <ul class="dt-side-nav">
                            <li class="dt-side-nav__item selected">
                                <a href="https://bitrally.top/dashboard" class="dt-side-nav__link dt-active" title="Dashboard">
                                    <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                    <span class="dt-side-nav__text">Dashboard</span>
                                </a>
                            </li>
                            <li class="dt-side-nav__item ">
                                <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Dashboard">
                                    <i class="icon icon-revenue2 icon-fw icon-lg"></i> <span class="dt-side-nav__text">Deposits</span> </a>

                                <!-- Sub-menu -->
                                <ul class="dt-side-nav__sub-menu display-n">
                                    <li class="dt-side-nav__item open ">
                                        <a href="https://bitrally.top/deposits/new" class="dt-side-nav__link " title="Traffic">
                                            <span class="dt-side-nav__text">Deposit funds</span> </a>
                                    </li>

                                    <li class="dt-side-nav__item">
                                        <a href="https://bitrally.top/deposits" class="dt-side-nav__link " title="Revenue">
                                            <span class="dt-side-nav__text">View deposits</span> </a>
                                    </li>
                                </ul>
                                <!-- /sub-menu -->

                            </li>
                            <li class="dt-side-nav__item ">
                                <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Dashboard">
                                    <i class="icon icon-revenue-new icon-fw icon-lg"></i><span class="dt-side-nav__text">Withdrawals</span> </a>

                                <!-- Sub-menu -->
                                <ul class="dt-side-nav__sub-menu display-n">
                                    <li class="dt-side-nav__item open ">
                                        <a href="https://bitrally.top/withdrawals/new" class="dt-side-nav__link " title="Traffic">
                                            <span class="dt-side-nav__text">Withdraw funds</span> </a>
                                    </li>

                                    <li class="dt-side-nav__item">
                                        <a href="https://bitrally.top/withdrawals" class="dt-side-nav__link " title="Revenue">
                                            <span class="dt-side-nav__text">View withdrawals</span> </a>
                                    </li>
                                </ul>
                                <!-- /sub-menu -->

                            </li>
                            <li class="dt-side-nav__item ">
                                <a href="https://bitrally.top/earnings" class="dt-side-nav__link " title="Dashboard">
                                    <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                    <span class="dt-side-nav__text">Earnings</span>
                                </a>
                            </li>
                            <li class="dt-side-nav__item ">
                                <a href="https://bitrally.top/tickets" class="dt-side-nav__link" title="Support">
                                    <i class="icon icon-mail icon-fw icon-lg"></i>
                                    <span class="dt-side-nav__text">Help Desk</span>
                                </a>
                            </li>
                            <!-- Menu Header -->

                            <!-- /menu item -->

                        </ul>
                        <!-- /sidebar navigation -->

                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </aside>
                <!-- /sidebar -->
                <!-- Site Content Wrapper -->
                <div class="dt-content-wrapper">
                    <!-- Site Content -->
                    <div class="dt-content">
                        <!-- Page Header -->
                        <div class="dt-page__header">
                            <h1 class="dt-page__title text-capitalize">Dashboard</h1>
                            <div class="dt-entry__header">
                                <!-- Entry Heading -->
                                <div class="dt-entry__heading">
                                </div>
                                <!-- /entry heading -->
                            </div>
                        </div>
                        <!-- /page header -->

                        <!-- Grid -->
                        <div class="row mt-3-2m">
                            <!-- Grid Item -->
                            <div class="col-xl-12 col-12 col-md-12">
                                <!-- Grid Item -->
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container mb-1-5m" style="width: 100%; height: 46px;">
                                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22OANDA%3ASPX500USD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22OANDA%3ANAS100USD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22bitrally.top%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22bitrally.top%2Fdashboard%22%7D" style="box-sizing: border-box; display: block; height: 46px; width: 100%;"></iframe>

                                    <style>
                                        .tradingview-widget-copyright {
                                            font-size: 13px !important;
                                            line-height: 32px !important;
                                            text-align: center !important;
                                            vertical-align: middle !important;
                                            /* @mixin sf-pro-display-font; */
                                            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                            color: #9db2bd !important;
                                        }

                                        .tradingview-widget-copyright .blue-text {
                                            color: #2962FF !important;
                                        }

                                        .tradingview-widget-copyright a {
                                            text-decoration: none !important;
                                            color: #9db2bd !important;
                                        }

                                        .tradingview-widget-copyright a:visited {
                                            color: #9db2bd !important;
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
                                    </style>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Card -->
                                        <div class="dt-card">
                                            <!-- Card Body -->
                                            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-secondary text-white">
                                                <span class="badge badge-secondary badge-top-right">Earnings</span>
                                                <!-- Media -->
                                                <div class="media">
                                                    <i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
                                                    <!-- Media Body -->
                                                    <div class="media-body">
                                                        <p class="mb-1 h1 text-white">
                                                            USD 0.00 </p>
                                                        <span class="d-block">Withdrawable</span>
                                                    </div>
                                                    <!-- /media body -->
                                                </div>
                                                <!-- /media -->
                                            </div>
                                            <!-- /card body -->
                                        </div>
                                        <!-- /card -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Card -->
                                        <div class="dt-card">
                                            <!-- Card Body -->
                                            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-primary text-white">
                                                <span class="badge badge-secondary badge-top-right">Active deposits</span>
                                                <!-- Media -->
                                                <div class="media">
                                                    <i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
                                                    <!-- Media Body -->
                                                    <div class="media-body">
                                                        <p class="mb-1 h1 text-white">
                                                            USD 0.00 </p>
                                                        <span class="d-block">Locked</span>
                                                    </div>
                                                    <!-- /media body -->
                                                </div>
                                                <!-- /media -->
                                            </div>
                                            <!-- /card body -->
                                        </div>
                                        <!-- /card -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Card -->
                                        <div class="dt-card dt-card__full-height">
                                            <!-- Card Header -->
                                            <div class="dt-card__header">
                                                <!-- Card Heading -->
                                                <div class="dt-card__heading">
                                                    <h3 class="dt-card__title">Overall portfolio</h3>
                                                </div>
                                                <!-- /card heading -->
                                            </div>
                                            <!-- /card header -->
                                            <!-- Card Body -->
                                            <div class="dt-card__body d-flex justify-content-center align-items-center">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <!-- Chart -->
                                                <canvas id="pie-chart" class="m--30p display-b chartjs-render-monitor" data-fill="27" height="442" width="442" style="display: block; height: 295px; width: 295px;"></canvas>
                                                <!-- /chart -->
                                            </div>
                                            <!-- /card body -->
                                        </div>
                                        <script src="https://bitrally.top/assets/dist/js/Chart.min.js"></script>
                                        <script>
                                            var activedeposits = 0;
                                            var inactivedeposits = 0;
                                            var withdrawals = 0;
                                            new Chart(document.getElementById("pie-chart"), {
                                                type: 'pie',
                                                data: {
                                                    labels: ["Active", "Inactive", "Earnings"],
                                                    datasets: [{
                                                        label: "Transactions",
                                                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
                                                        data: [activedeposits, inactivedeposits, withdrawals]
                                                    }]
                                                }
                                            });
                                        </script>
                                        <!-- /card -->
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card bg-gradient-blue text-white">
                                            <!-- Card Body -->
                                            <div class="card-body p-6">
                                                <p class="display-4 mb-1">Verify Your Account</p>
                                                <p class="f-14">
                                                    Please verify your account. </p>
                                                <a class="btn btn-default btn-sm text-dark" href="https://bitrally.top/verify">Verify</a>
                                            </div>
                                            <!-- /card body -->
                                        </div>
                                        <div class="card bg-gradient-orange text-white">
                                            <!-- Card Body -->
                                            <div class="card-body p-6">
                                                <p class="display-4 mb-1">Setup your payment</p>
                                                <p class="f-14">Please add a mode of payment in your settings for ease of transacting </p>
                                                <a class="btn btn-default btn-sm text-dark" href="https://bitrally.top/profile">Setup</a>
                                            </div>
                                            <!-- /card body -->
                                        </div>


                                        <div class="dt-card dt-card bg-image-v6 bg-overlay overlay-opacity-0_8 bg-gradient-blue--after text-white">

                                            <!-- Overlay Content -->
                                            <div class="bg-overlay__inner mt-auto">

                                                <!-- Card Body -->
                                                <div class="dt-card__body">

                                                    <h3 class="text-white mb-2">Refer &amp; earn 10% From your referral's deposits.</h3>

                                                    <p>Referral Link: https://bitrally.top/signup/Bs6VtwFX </p>
                                                    <form action="https://bitrally.top/invite" method="post" id="joinForm" name="joinForm">

                                                        <input type="hidden" name="csrf_test_name" value="2fc6a87337423fce5ab48c66d2a19143">
                                                        <input class="btn btn-outline-light btn-block" name="email" placeholder="Enter Email Address">
                                                        <button type="submit" id="invite" class="btn btn-info btn-block">Invite friends</button>
                                                    </form>
                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /overlay content -->

                                        </div>
                                        <!-- /card -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="dt-card">

                                            <!-- Card Header -->
                                            <div class="dt-card__header mb-4">

                                                <!-- Card Heading -->
                                                <div class="dt-card__heading">
                                                    <h3 class="dt-card__title text-capitalize">Earnings history</h3>
                                                </div>
                                                <!-- /card heading -->

                                                <!-- Card Tools -->
                                                <div class="dt-card__tools">
                                                    <a href="https://bitrally.top/earnings" class="dt-card__more">Detailed history</a>
                                                </div>
                                                <!-- /card tools -->

                                            </div>
                                            <!-- /card header -->

                                            <!-- Card Body -->
                                            <div class="dt-card__body pb-5">

                                                <!-- Tables -->
                                                <div class="table-responsive ps-custom-scrollbar ps">
                                                    <table class="table table-ordered table-bordered-0 mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-uppercase">TXN Code</th>
                                                                <th class="text-uppercase text-right" scope="col">Amount (USD)
                                                                </th>
                                                                <th class="text-uppercase text-center" scope="col">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                                    </div>
                                                </div>
                                                <!-- /tables -->

                                            </div>
                                            <!-- /card body -->

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /grid item -->

                        </div>
                        <!-- /grid -->
                    </div>
                    <!-- /site content -->
                    <script src="https://bitrally.top/assets/dist/js/functions.js"></script><!-- Footer -->
                    <footer class="dt-footer">

                        Copyright Bitrally © 2021 </footer>
                    <!-- /footer -->

                </div>
                <!-- /site content wrapper -->
            </main>
        </div>
    </div>
    <!---->
    <script src="https://bitrally.top/assets/dist/summernote/summernote-bs4.js"></script>
    <script src="https://bitrally.top/assets/dist/js/lang.js"></script>
    <script src="https://bitrally.top/assets/dist/summernote/editor-summernote.js"></script>
    <script src="https://bitrally.top/assets/dist/js/moment/moment.js"></script>
    <script src="https://bitrally.top/assets/dist/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://bitrally.top/assets/dist/js/contact.js"></script>
    <script src="https://bitrally.top/assets/dist/js/perfect-scrollbar.min.js"></script>
    <script src="https://bitrally.top/assets/dist/js/masonry.pkgd.min.js"></script>
    <script src="https://bitrally.top/assets/dist/js/sweetalert2.js"></script>
    <script src="https://bitrally.top/assets/dist/js/customizer.js"></script>
    <script src="https://bitrally.top/assets/dist/js/Chart.min.js"></script>
    <script src="https://bitrally.top/assets/dist/js/chartist.min.js"></script>
    <script src="https://bitrally.top/assets/dist/js/script.js"></script>
    <div class="card user-bg-card position-absolute bg-primary" style="display: none;"></div>
    <script src="https://bitrally.top/assets/dist/js/showpass.js"></script>


</body>

</html>