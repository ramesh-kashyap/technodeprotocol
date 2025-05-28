<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="{{ asset('') }}assets/img/logo.png">
    <link rel="apple-touch-icon" href="{{ asset('') }}assets/img/logo.png">
    <meta name="msapplication-square70x70logo" content="{{ asset('') }}assets/img/logo.png">
    <meta name="msapplication-square150x150logo" content="{{ asset('') }}assets/img/logo.png">
    <meta name="msapplication-wide310x150logo" content="{{ asset('') }}assets/img/logo.png">

    <meta name="theme-color" content="#05102C">
    <meta name="apple-mobile-web-app-status-bar-style" content="#05102C">

    <title>{{ siteName() }}</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('') }}assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="fa/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/noty.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.css" />
    <script type="text/javascript" src="{{ asset('') }}assets/js/core/jquery.min.js"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();

    </script>
</head>

<body>




    <div class="modal fade" id="language-modal" tabindex="-1" role="">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title text-center">Select language</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body position-relative">

                    <div class="d-flex flex-wrap justify-content-center align-self-stretch">
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/img/flags/de_.png">
                                <div>Deutsche</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 active d-inline-block text-center">
                                <img src="{{ asset('') }}assets/img/flags/en_.png">
                                <div>English</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/img/flags/es_.png">
                                <div>Español</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/img/flags/fr_.png">
                                <div>Française</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/img/flags/ja_.png">
                                <div>日本語</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/imgflags/pt_.png">
                                <div>Portuguesa</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/imgflags/ru_.png">
                                <div>Русский</div>
                            </a>
                        </div>
                        <div>
                            <a href="index.html" class="py-1 px-3 d-inline-block text-center">
                                <img src="{{ asset('') }}assets/imgflags/zh_.png">
                                <div>中文</div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!--[if IE]>
  <p class="browserupgrade">
	You are using an <strong>outdated</strong> browser. Please
	<a href="https://browsehappy.com/">upgrade your browser</a> to improve
	your experience and security.
  </p>
<![endif]-->


    <!-- <div class="preloader">
  <div class="loader">
		<div class="lds-circle2"><div></div></div>
  </div>
</div> -->


    <div class="overflow-hidden">
        <header class="position-relative" style="z-index:4">
            <div class="container-lg">
                <nav class="navbar fixed-top navbar-expand-md navbar-main" style="z-index:999;
  -webkit-backdrop-filter: blur(1rem);
  backdrop-filter: blur(1rem);">
                    <div class="container-lg">
                        <a class="navbar-brand d-flex flex-row" href="index.html">
                            <img src="{{ asset('') }}assets/img/logo.png" style="height:3.5rem;" />
                            <div class="text-white fs-1 fw-semibold ms-2 pt-4" style="line-height:0;">
                                <div style="font-size:1rem;margin-top:1.5rem;" class="text-end"></div>
                            </div>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                            aria-label="Переключатель навигации">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarToggler">
                            <ul class="navbar-nav mx-auto text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/#home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ url('/#marketing') }}">Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ url('/#calculation') }}">Calculator</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ url('/#partners') }}">Partners</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ url('/#statistics') }}">Statistics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact-us') }}">Support</a>
                                </li>
                            </ul>

                            <!-- <div class="nav-item language">
                                <button class="btn btn-link nohover language en me-3 px-0" data-bs-toggle="modal"
                                    data-bs-target="#language-modal"><span
                                        class="ms-2 d-md-none d-xl-inline">en</span></button>
                            </div> -->
                            <a class="btn btn-light me-2" href="{{ route('login') }}">Login</a>
                            <a class="btn btn-light" href="{{ route('register') }}">Sign up</a>
                        </div>
                    </div>
                </nav>
                <div style="height:6.125rem;"></div>
            </div>
        </header>
        <script type="text/javascript">
            var num = 1;
            var bonus_daily_percent = 0.02;

            var contracts = {
                "60": "0.01",
                "120": "0.013",
                "180": "0.015",
                "Unlimited": "0.02"
            };

            var currencies = {
                'btc': {
                    'enabled': 'true',
                    'color': 'ac6830',
                    'min_deposit': '0.0005',
                    'min_withdraw': '0.0005',
                    'algorithm': 'SHA-256',
                    'name': 'Bitcoin',
                    'currency': 'btc',
                    'system': '',
                },
                'bch': {
                    'enabled': 'true',
                    'color': '1f6e3b',
                    'min_deposit': '0.01',
                    'min_withdraw': '0.01',
                    'algorithm': 'SHA-256',
                    'name': 'Bitcoin Cash',
                    'currency': 'bch',
                    'system': '',
                },
                'bnb': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '0.005',
                    'min_withdraw': '0.005',
                    'algorithm': '',
                    'name': 'BNB Coin',
                    'currency': 'bnb',
                    'system': '',
                },
                'dash': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '0.05',
                    'min_withdraw': '0.05',
                    'algorithm': '',
                    'name': 'Dash',
                    'currency': 'dash',
                    'system': '',
                },
                'doge': {
                    'enabled': 'true',
                    'color': 'af8e2f',
                    'min_deposit': '10',
                    'min_withdraw': '10',
                    'algorithm': 'SCRYPT',
                    'name': 'Dogecoin',
                    'currency': 'doge',
                    'system': '',
                },
                'xec': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '100000',
                    'min_withdraw': '100000',
                    'algorithm': 'SHA-256',
                    'name': 'eCash',
                    'currency': 'xec',
                    'system': '',
                },
                'kas': {
                    'enabled': 'true',
                    'color': 'ababab',
                    'min_deposit': '50',
                    'min_withdraw': '50',
                    'algorithm': 'KHEAVYHASH',
                    'name': 'Kaspa',
                    'currency': 'kas',
                    'system': '',
                },
                'ltc': {
                    'enabled': 'true',
                    'color': 'ababab',
                    'min_deposit': '0.03',
                    'min_withdraw': '0.03',
                    'algorithm': 'SCRYPT',
                    'name': 'Litecoin',
                    'currency': 'ltc',
                    'system': '',
                },
                'trx': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '10',
                    'min_withdraw': '10',
                    'algorithm': '',
                    'name': 'Tron',
                    'currency': 'trx',
                    'system': '',
                },
                'usd.epc': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '1',
                    'min_withdraw': '1',
                    'algorithm': '',
                    'name': 'ePayCore',
                    'currency': 'usd',
                    'system': 'epc',
                },
                'usdt.bep20': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '5',
                    'min_withdraw': '5',
                    'algorithm': '',
                    'name': 'Tether BEP20',
                    'currency': 'usdt',
                    'system': 'bep20',
                },
                'usdt.trc20': {
                    'enabled': 'true',
                    'color': '',
                    'min_deposit': '5',
                    'min_withdraw': '10',
                    'algorithm': '',
                    'name': 'Tether TRC20',
                    'currency': 'usdt',
                    'system': 'trc20',
                },
            };
            var algorithms = {
                'KHEAVYHASH': {
                    'enabled': 'true',
                    'price': '0.1',
                    'unit': 'TH/s',
                    'min': '5',
                },
                'SHA-256': {
                    'enabled': 'true',
                    'price': '1',
                    'unit': 'TH/s',
                    'min': '0.5',
                },
                'SCRYPT': {
                    'enabled': 'true',
                    'price': '0.5',
                    'unit': 'GH/s',
                    'min': '1',
                },
            }
            var course = {
                'btc': 105338.02293394,
                'bch': 389.94692615,
                'bnb': 647.71184297,
                'dash': 23.34682237,
                'doge': 0.22202978,
                'xec': 2.253E-5,
                'kas': 0.11122486,
                'ltc': 93.13732351,
                'trx': 0.27311883,
                'usd.epc': 1,
                'usdt.bep20': 1.00101,
                'usdt.trc20': 1.00101,
            };

            function get_lvl(ghs, algorithm) {
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 0 && ghs < 100) || (algorithm == 'SHA-256' && ghs >=
                        0 && ghs < 10) || (algorithm == 'SCRYPT' && ghs >= 0 && ghs < 20)) {
                    var lvl = {
                        'level': 0,
                        'percent': 1
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 100 && ghs < 500) || (algorithm == 'SHA-256' &&
                        ghs >= 10 && ghs < 50) || (algorithm == 'SCRYPT' && ghs >= 20 && ghs < 100)) {
                    var lvl = {
                        'level': 1,
                        'percent': 1.2
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 500 && ghs < 1000) || (algorithm == 'SHA-256' &&
                        ghs >= 50 && ghs < 100) || (algorithm == 'SCRYPT' && ghs >= 100 && ghs < 200)) {
                    var lvl = {
                        'level': 2,
                        'percent': 1.5
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 1000 && ghs < 3000) || (algorithm == 'SHA-256' &&
                        ghs >= 100 && ghs < 300) || (algorithm == 'SCRYPT' && ghs >= 200 && ghs < 600)) {
                    var lvl = {
                        'level': 3,
                        'percent': 2
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 3000 && ghs < 5000) || (algorithm == 'SHA-256' &&
                        ghs >= 300 && ghs < 500) || (algorithm == 'SCRYPT' && ghs >= 600 && ghs < 1000)) {
                    var lvl = {
                        'level': 4,
                        'percent': 2.2
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 5000 && ghs < 10000) || (algorithm == 'SHA-256' &&
                        ghs >= 500 && ghs < 1000) || (algorithm == 'SCRYPT' && ghs >= 1000 && ghs < 2000)) {
                    var lvl = {
                        'level': 5,
                        'percent': 2.5
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 10000 && ghs < 20000) || (algorithm == 'SHA-256' &&
                        ghs >= 1000 && ghs < 2000) || (algorithm == 'SCRYPT' && ghs >= 2000 && ghs < 4000)) {
                    var lvl = {
                        'level': 6,
                        'percent': 3
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 20000 && ghs < 50000) || (algorithm == 'SHA-256' &&
                        ghs >= 2000 && ghs < 5000) || (algorithm == 'SCRYPT' && ghs >= 4000 && ghs < 10000)) {
                    var lvl = {
                        'level': 7,
                        'percent': 3.5
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 50000 && ghs < 70000) || (algorithm == 'SHA-256' &&
                        ghs >= 5000 && ghs < 7000) || (algorithm == 'SCRYPT' && ghs >= 10000 && ghs < 14000)) {
                    var lvl = {
                        'level': 8,
                        'percent': 4
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 70000 && ghs < 100000) || (algorithm == 'SHA-256' &&
                        ghs >= 7000 && ghs < 10000) || (algorithm == 'SCRYPT' && ghs >= 14000 && ghs < 20000)) {
                    var lvl = {
                        'level': 9,
                        'percent': 4.5
                    }
                } else
                if (1 == 0 || (algorithm == 'KHEAVYHASH' && ghs >= 100000 && ghs < 2147483647) || (algorithm ==
                        'SHA-256' && ghs >= 10000 && ghs < 2147483647) || (algorithm == 'SCRYPT' && ghs >= 20000 &&
                        ghs < 2147483647)) {
                    var lvl = {
                        'level': 10,
                        'percent': 5
                    }
                } else {
                    var lvl = {
                        'level': 10,
                        'percent': 5
                    }
                }
                return lvl;
            }

        </script>
