<html class="no-js" lang="en"><head>
	<meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('')}}assets/img/logo.png">
	<link rel="apple-touch-icon" href="{{asset('')}}assets/img/logo.png">
	  <meta name="msapplication-square70x70logo" content="{{asset('')}}assets/img/logo.png">
  <meta name="msapplication-square150x150logo" content="{{asset('')}}assets/img/logo.png">
  <meta name="msapplication-wide310x150logo" content="{{asset('')}}assets/img/logo.png">
  
  <meta name="theme-color" content="#05102C">
  <meta name="apple-mobile-web-app-status-bar-style" content="#05102C">
	
	<title>{{siteName()}}</title>

	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="{{asset('')}}assets/bootstrap/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/all.min.css"> -->
  <link rel="stylesheet" href="{{asset('')}}assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/noty.css">
	<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

	<script type="text/javascript" src="{{asset('')}}assets/js/core/jquery.min.js"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async="" defer=""></script>

    <script src="{{asset('')}}assets/js/wow.min.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
      <style>
.bounce-vertical {
  animation: bounceTopBottom 1s infinite;
}

@keyframes bounceTopBottom {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}
</style>

</head>



<body>

	<div class="preloader" style="">
  <div class="loader">
		<div class="lds-circle2" style="background-position: 0px -18rem;"><div></div></div>
  </div>
</div>
	
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
            <a href="/set-language/de/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/de_.png">
              <div>Deutsche</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/en/" class="py-1 px-3 active d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/en_.png">
              <div>English</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/es/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/es_.png">
              <div>Español</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/fr/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/fr_.png">
              <div>Française</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/ja/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/ja_.png">
              <div>日本語</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/pt/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/pt_.png">
              <div>Portuguesa</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/ru/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/ru_.png">
              <div>Русский</div>
            </a>
          </div>
                    <div>
            <a href="/set-language/zh/" class="py-1 px-3 d-inline-block text-center">
              <img src="{{asset('')}}assets/img/flags/zh_.png">
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




  
<div class="overflow-hidden">
<header class="position-relative" style="z-index:4">
	<div class="container-lg">
    <nav class="navbar fixed-top navbar-expand-md navbar-main" style="z-index: 999; backdrop-filter: blur(1rem);">
      <div class="container-lg">
        <a class="navbar-brand d-flex flex-row" href="/">
          <img src="{{asset('')}}assets/img/logo.png" style="height:3.5rem;">
                    <div class="text-white fs-1 fw-semibold ms-2 pt-4" style="line-height:0;">
            <div style="font-size:1rem;margin-top:1.5rem;" class="text-end"></div>
          </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Переключатель навигации">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#marketing">Marketing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#calculation">Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#partners">Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#statistics">Statistics</a>
            </li>
                        <li class="nav-item">
              <a class="nav-link" href="/faq/">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/support/">Support</a>
            </li>
          </ul>
  
          <div class="nav-item language">
            <button class="btn btn-link nohover language en me-3 px-0" data-bs-toggle="modal" data-bs-target="#language-modal"><span class="ms-2 d-md-none d-xl-inline">en</span></button>
          </div>
                    <a class="btn btn-light me-2" data-scroll-nav="0" href="/mining/" rel="nofollow">Mining
          </a>

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" data-scroll-nav="0" rel="nofollow"><i class="fa-duotone fa-solid fa-user-tie fa-lg"></i>            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{route('user.profile')}}">Settings</a></li>
              <li><a class="dropdown-item" href="{{route('user.Withdraw-History')}}">History</a></li>
              <li><hr class="dropdown-divider"></li>
       <form method="POST" action="{{ route('logout') }}">
    @csrf
    <li>
        <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 0;">
            <i class="lni lni-exit me-2"></i> Log out
        </button>
    </li>
</form>

            </ul>
          </div>
                  </div>
      </div>
    </nav>
    <div style="height:6.125rem;"></div>
  </div>
</header>
