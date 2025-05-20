
@include('layouts.mainsite.header')

<div class="hero">
    <div class="container text-center">
        <h1>Register <span class="gradient-text">Successfully</span></h1>
        <p class="lead mt-4 mb-5" style="color: rgba(255, 255, 255, 0.9); max-width: 600px; margin: 0 auto;">
            Join helixfund.live and start your investment journey today
        </p>
    </div>
</div>

<section class="unique-section">
    <div class="container">

        <script language=javascript>
            function checkform() {
                if (document.regform.fullname.value == '') {
                    alert("Please enter your full name!");
                    document.regform.fullname.focus();
                    return false;
                }


                if (document.regform.username.value == '') {
                    alert("Please enter your username!");
                    document.regform.username.focus();
                    return false;
                }
                if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                    alert("For username you should use English letters and digits only!");
                    document.regform.username.focus();
                    return false;
                }
                if (document.regform.password.value == '') {
                    alert("Please enter your password!");
                    document.regform.password.focus();
                    return false;
                }
                if (document.regform.password.value != document.regform.password2.value) {
                    alert("Please check your password!");
                    document.regform.password2.focus();
                    return false;
                }


                if (document.regform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.regform.email.focus();
                    return false;
                }
                if (document.regform.email.value != document.regform.email1.value) {
                    alert("Please retype your e-mail!");
                    document.regform.email.focus();
                    return false;
                }

                for (i in document.regform.elements) {
                    f = document.regform.elements[i];
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

                if (document.regform.agree.checked == false) {
                    alert("You have to agree with the Terms and Conditions!");
                    return false;
                }

                return true;
            }

            function IsNumeric(sText) {
                var ValidChars = "0123456789";
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

        </script>


        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card bento-card">
                    <div class="card-body p-4">

                        <form method="post" action="{{ route('registers') }}" name="regform">
                            {{ csrf_field() }}


                            <div class="row g-4">

                               <div class="formBl">
                        <div class="logo invisLink">
                            <a href="{{ asset('') }}"></a>
                            <img src="{{ asset('') }}assets/c20a81c4/img/logo.png" alt="">
                        </div>
                        <span class="title">Register Successfully</span>
                        <span class="sub-title">In case you have 2-FA security enabled, please, use Google Authenticator
                            code instead of password.</span>
                        <div class="inputList">
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                            <div class="inputLine field-loginform-username required">
                                @if(session()->has('messages'))
                                <?php
                                $user_details=session()->get('messages')
                            ?>



                                <h4 style="color: ##000">Congratulations! Your Account has been successfully
                                    Created.</h4>
                                <br>

                                <h4 style="color: ##000">Dear <span class="main-color"
                                        style="color: #ffc70d;font-weight: 700;">{{$user_details->name }}</span>,
                                </h4>
                                <br>
                                <h4 style="color: ##000"> You have been successfully registered. <br> Your
                                    user id is <span class="main-color"
                                        style="    color: #1885c1;font-weight: 700;">{{$user_details->username  }}</span>
                                    Password is: <span class="main-color"
                                        style="color: #1885c1;font-weight: 700;">
                                        {{$user_details->PSR  }}</span> and Transaction Password is: <span
                                        class="main-color" style="color: #1885c1;font-weight: 700;">
                                        {{$user_details->TPSR  }}</span>
                                    please check your mail for more details.</h4>

                                @endif
                            


                            </div>
                            
                        </div>
                        <div class="form-group field-check2">
                            <input type="hidden" id="check2" class="form-control" name="LoginForm[check]"
                                value="">
                        </div> <a class="btn btnBlue" style="margin-top:-5px; margin-bottom:30px"
                            href="{{route('login')}}">Login</a>

                                
   



                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p style="color: rgba(255, 255, 255, 0.7);">
                                Already have an account?
                                <a href="{{route('login')}}" class="themed-link">Sign in here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.mainsite.footer')
@include('partials.notify')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
</script>
<script src="{{asset('')}}assets/js/gsap.min.js"></script>
<script src="{{asset('')}}assets/js/ScrollTrigger.min.js"></script>
<script src="{{asset('')}}assets/js/SplitText.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="{{asset('')}}assets/js/app.js"></script>


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
