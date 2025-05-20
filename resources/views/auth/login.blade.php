@include('layouts.mainsite.header')

<div class="regpage">
  <div class="container">
    <div class="regimg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;"></div>
    <div class="regimg2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInRight;"></div>

    <div class="row">
      <div class="col-12 my-5 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.3s; animation-name: fadeIn;">
        <div class="text-center">
          <h1>Welcome back</h1>
          <span class="fs-4">Login to your account</span>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-8 col-lg-6 col-xl-5 col-xxl-4">

    <div class="row">
      
      <div class="col-12">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card-body" id="login">
          <form action="/login/" class="login">
            <div class="row">
              <div class="col-12">
                  <input type="text" class="form-control mt-1" name="user_email" id="user_email" placeholder="Your username or email">
              </div>

              <div class="col-12 mt-3">
                <input type="password" class="form-control mt-1" name="password" id="password" placeholder="Password">
              </div>

              <div class="col-6 mt-3">
                <div class="form-check mb-0">
                  <input type="checkbox" class="form-check-input" id="checkboxTerms" name="terms" value="true" checked="">
                  <label class="form-check-label" for="checkboxTerms">Keep me signed in</label>
                </div>
              </div>
              <div class="col-6 mt-3 text-end">
                  <a href="/recovery/">Forgot Password?</a>
              </div>
              <div class="col-12 mt-3 text-center">
               <div class="h-captcha d-flex justify-content-center" id="h-captcha-login-m" data-sitekey="bee4c716-97a4-43ac-8aa8-fca04de80a80"><iframe src="https://newassets.hcaptcha.com/captcha/v1/3d86f84f0763959329e7e143f693dec441c0c973/static/hcaptcha.html#frame=checkbox&amp;id=08n5ohyq3owt&amp;host=synox.cc&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;custom=false&amp;hl=en&amp;tplinks=on&amp;andint=off&amp;pstissuer=https%3A%2F%2Fpst-issuer.hcaptcha.com&amp;sitekey=bee4c716-97a4-43ac-8aa8-fca04de80a80&amp;theme=light&amp;origin=https%3A%2F%2Fsynox.cc" tabindex="0" frameborder="0" scrolling="no" allow="private-state-token-issuance 'src'; private-state-token-redemption 'src'" title="Widget containing checkbox for hCaptcha security challenge" data-hcaptcha-widget-id="08n5ohyq3owt" data-hcaptcha-response="" style="pointer-events: auto; background-color: rgba(255, 255, 255, 0); border-radius: 4px; width: 302px; height: 76px; overflow: hidden;"></iframe><textarea id="g-recaptcha-response-08n5ohyq3owt" name="g-recaptcha-response" style="display: none;"></textarea><textarea id="h-captcha-response-08n5ohyq3owt" name="h-captcha-response" style="display: none;"></textarea></div>
              </div>
              <div class="col-12 mt-3 d-grid">
                <button type="submit" class="btn btn-primary py-3">Sign In</button>
              </div>
            </div>
          </form>
          </div>
          
          <div class="card-body" id="login2fa" style="display:none;">
            <form action="/login/" class="login2fa">
              <div class="row">
                <div class="col-12 mt-4">
                    <label for="code2fa">Authenticator Code</label>
                    <input type="text" class="form-control mt-1 text-center" name="code2fa" id="code2fa" placeholder="Enter the 6-digit code from Google Authenticator" maxlength="6">
                </div>
                <div class="col-12 mt-3 d-grid">
                  <button type="submit" class="btn btn-primary py-3" disabled="">Submit</button>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
      <div class="col text-center my-5 fs-2 pb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" style="position: relative; z-index: 4; visibility: hidden; animation-duration: 1s; animation-delay: 0.7s; animation-name: none;">
        Do not you have an account? <a href="/signup/">Sign up</a>
      </div>
    </div>
  </div>
</div>
@include('layouts.mainsite.footer')