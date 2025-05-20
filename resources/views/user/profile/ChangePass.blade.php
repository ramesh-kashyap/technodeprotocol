<div id="main-content" class="flex-grow-1 m-3">
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
        <div class="container-fluid">
            <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <i class="fas fa-bars"></i>
            </button>

            <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                <i class="fas fa-bars"></i>
            </button>

            <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">Change Password</span>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item mb-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <li><a class="dropdown-item" href="?a=support"><i
                                    class="fas fa-headset fa-fw me-2"></i>Support</a></li>
                        <li><a class="dropdown-item" href="?a=edit_account"><i
                                    class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                        <li><a class="dropdown-item" href="?a=security"><i
                                    class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="?a=logout"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>





    <script language=javascript>
        function IsNumeric(sText) {
            var ValidChars = "0123456789.";
            var IsNumber = true;
            var Char;
            if (sText == '') return false;
            for (i = 0; i < sText.length && IsNumber == true; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                }
            }
            return IsNumber;
        }

        function checkform() {
            if (document.editform.fullname.value == '') {
                alert("Please type your full name!");
                document.editform.fullname.focus();
                return false;
            }


            if (document.editform.password.value != document.editform.password2.value) {
                alert("Please check your password!");
                document.editform.fullname.focus();
                return false;
            }





            for (i in document.editform.elements) {
                f = document.editform.elements[i];
                if (f.name && f.name.match(/^pay_account/)) {
                    if (f.value == '') continue;
                    var notice = f.getAttribute('data-validate-notice');
                    var invalid = 0;
                    if (f.getAttribute('data-validate') == 'regexp') {
                        var re = new RegExp(f.getAttribute('data-validate-regexp'));
                        if (!f.value.match(re)) {
                            invalid = 1;
                        }
                    } else if (f.getAttribute('data-validate') == 'email') {
                        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                        if (!f.value.match(re)) {
                            invalid = 1;
                        }
                    }
                    if (invalid) {
                        alert('Invalid account format. Expected ' + notice);
                        f.focus();
                        return false;
                    }
                }
            }

            return true;
        }

    </script>






    <style>
        .error {
            width: 100%;
            padding: .5em;
            background-color: #440202;
            color: white;
            text-align: center;
            margin-top: 15px;
            border-radius: 15px;
        }

    </style>


    <div class="row mt-3">
       
        <form method="POST" action="{{ route('user.update-password') }}">
            @csrf
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Set up Password</h3>
                    </div>
                    <div class="card-body">



                        <div class="mb-3">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Retype Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Verification Code</label>
                            <div class="input-group">
                                <input type="text" name="code" class="form-control" placeholder="Enter code" required />
                                <button type="button" class="btn btn-dark" onclick="sendOtp()">Send</button>
                            </div>
                        </div>
                        <button type="submit" class=sbmt>Update</button>





                    </div>
                </div>
            </div>
        </form>
        <script>
            function sendOtp() {
                fetch("{{ route('user.send-otp') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    }).then(response => response.json())
                    .then(data => {
                        alert(data.message);
                    }).catch(error => {
                        alert('Error sending OTP');
                    });
            }

        </script>
        <!-- <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Set up Wallet</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label>Your Bitcoin acc no</label>
                            <input type=text class="form-control" size=30 name="pay_account[48]" value=""
                                data-validate="regexp" data-validate-regexp="^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$"
                                data-validate-notice="Bitcoin Address"> </div>

                        <div class="mb-3">
                            <label>Your Litecoin acc no</label>
                            <input type=text class="form-control" size=30 name="pay_account[68]" value=""
                                data-validate="regexp" data-validate-regexp="^ltc1|[LM3][a-km-zA-HJ-NP-Z1-9]{25,40}$"
                                data-validate-notice="Litecoin Address"> </div>

                        <div class="mb-3">
                            <label>Your Tron acc no</label>
                            <input type=text class="form-control" size=30 name="pay_account[85]" value=""
                                data-validate="regexp" data-validate-regexp="^T[a-km-zA-HJ-NP-Z1-9]{25,34}$"
                                data-validate-notice="Tron Address"> </div>

                        <div class="mb-3">
                            <label>Your Tether TRC20 acc no</label>
                            <input type=text class="form-control" size=30 name="pay_account[92]" value=""
                                data-validate="regexp" data-validate-regexp="^T[a-km-zA-HJ-NP-Z1-9]{25,34}$"
                                data-validate-notice="Tether TRC20 Address"> </div>

                        <div class="mb-3">
                            <label>Your Tether BEP20 acc no</label>
                            <input type=text class="form-control" size=30 name="pay_account[102]" value=""
                                data-validate="regexp" data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$"
                                data-validate-notice="Tether BEP20 Address"> </div>
                    </div>
                </div>
            </div> -->
    </div>






</div>
<div class="offcanvas offcanvas-start text-white d-md-none" tabindex="-1" id="mobileMenu"
    aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
      <div class="offcanvas-body">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="{{route('user.dashboard')}}" class="nav-link text-white">
                            <i class="fas fa-user fa-fw me-2"></i>Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.invest')}}" class="nav-link text-white">
                            <i class="fas fa-download fa-fw me-2"></i>Deposit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.Withdraw')}}" class="nav-link text-white">
                            <i class="fas fa-upload fa-fw me-2"></i>Withdraw
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="{{route('user.DepositHistory')}}" class="nav-link text-white">
                            <i class="fas fa-history fa-fw me-2"></i>History
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.level-team')}}" class="nav-link text-white">
                            <i class="fas fa-users fa-fw me-2"></i>Referrals
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="{{route('user.ChangePass')}}" class="nav-link text-white">
                            <i class="fas fa-shield-alt fa-fw me-2"></i>Security
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.profile')}}" class="nav-link text-white">
                            <i class="fas fa-user-edit fa-fw me-2"></i>Edit Account
                        </a>
                    </li>
                   <li class="nav-item mt-auto">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-warning" title="Logout" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="fas fa-sign-out-alt fa-fw"></i><span class="sidebar-text ms-2">Logout</span>
                    </a>
                </li>
                </ul>
            </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="{{asset('')}}assets/js/dash.js"></script>


<script>
    window.addEventListener('load', function () {
        // All resources (images, scripts, stylesheets, etc.) are loaded
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer) {
            // Add the 'hidden' class to trigger the fade-out animation
            preloaderContainer.classList.add('hidden');

            // Optional: If you want to completely remove the preloader from the DOM
            // after the transition, you can listen for the 'transitionend' event.
            preloaderContainer.addEventListener('transitionend', function () {
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                    .opacity === '0') {
                    preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
                }
            }, {
                once: true
            }); // {once: true} ensures the event listener is removed after it fires
        }

        if (content) {
            content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
            // If you used opacity for content:
            // content.style.opacity = '1';
            // content.style.visibility = 'visible';
        }
    });

    // Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
    // You might want to adjust the timeout duration
    setTimeout(function () {
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
            console.warn("Preloader timeout reached. Forcing hide.");
            preloaderContainer.classList.add('hidden');
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity ===
                '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example

</script>

</body>

</html>
