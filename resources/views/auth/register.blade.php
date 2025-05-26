@include('layouts.mainsite.header')

<div class="regpage">
  <div class="container">
    <div class="regimg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;"></div>
    <div class="regimg2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInRight;"></div>

    <div class="row justify-content-center">
      <div class="col mt-5">

    <div class="row justify-content-center">
      <div class="col-12 mb-5 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.3s; animation-name: fadeIn;">
        <div class="text-center">
          <h1>Register Now</h1>
          <span class="fs-4">And start mining cryptocurrency</span>
        </div>
      </div>
      <div class="col col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card-body" id="signup">
            <form id="contact-form" action="{{ route('registers') }}" method="post" class="signup">
                @csrf


              <div class="row">
          <div class="col-12">
              <input type="text" name="name"class="form-control mt-1" value="{{ old('name') }}" required  placeholder="Enter Name">
          </div>

        <div class="col-12 mt-3">
    <input type="text" class="form-control mt-1" name="sponsor" id="user_login" placeholder="Enter sponsor username" required>
</div>
    <small id="sponsor-name" class="mt-1 d-block"></small>

          <div class="col-12 mt-3">
            <input type="email" class="form-control mt-1" name="email" value="{{ old('email') }}" id="user_email" placeholder="Your e-mail address">
          </div>

          <div class="col-12 mt-3">
            <input type="password" class="form-control mt-1" name="password" id="password" placeholder="Password">
          </div>

          <div class="col-12 mt-3">
            <input type="password" class="form-control mt-1" name="password_confirmation" id="password2" placeholder="Confirm password">
          </div>

          <div class="col-12 mt-3">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="checkboxTerms" name="terms" value="true" checked="">
              <label class="form-check-label" for="checkboxTerms"><small>I accept <a href="/terms/" target="_blank" class="_blank">usage rules</a></small></label>
            </div>
          </div>
          <!-- <div class="col-12 mt-3 text-center">
            <div class="h-captcha d-flex justify-content-center" data-sitekey="bee4c716-97a4-43ac-8aa8-fca04de80a80"><iframe src="https://newassets.hcaptcha.com/captcha/v1/3d86f84f0763959329e7e143f693dec441c0c973/static/hcaptcha.html#frame=checkbox&amp;id=0t37epmk3c0d&amp;host=synox.cc&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;custom=false&amp;hl=en&amp;tplinks=on&amp;andint=off&amp;pstissuer=https%3A%2F%2Fpst-issuer.hcaptcha.com&amp;sitekey=bee4c716-97a4-43ac-8aa8-fca04de80a80&amp;theme=light&amp;origin=https%3A%2F%2Fsynox.cc" tabindex="0" frameborder="0" scrolling="no" allow="private-state-token-issuance 'src'; private-state-token-redemption 'src'" title="Widget containing checkbox for hCaptcha security challenge" data-hcaptcha-widget-id="0t37epmk3c0d" data-hcaptcha-response="" style="pointer-events: auto; background-color: rgba(255, 255, 255, 0); border-radius: 4px; width: 302px; height: 76px; overflow: hidden;"></iframe><textarea id="g-recaptcha-response-0t37epmk3c0d" name="g-recaptcha-response" style="display: none;"></textarea><textarea id="h-captcha-response-0t37epmk3c0d" name="h-captcha-response" style="display: none;"></textarea></div>
          </div> -->
          <div class="col-12 mt-3 d-grid">
            <button type="submit" class="btn btn-primary py-3">Create Account</button>
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
      <div class="col text-center my-5 fs-2 pb-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="position: relative; z-index: 4; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeInUp;">
        Already have an account? <a href="/login/">Login</a>
      </div>
    </div>
  </div>
</div>


<script>
document.getElementById('user_login').addEventListener('input', function () {
    const username = this.value;

    if (username.length < 3) {
        document.getElementById('sponsor-name').innerHTML = '';
        return;
    }

    fetch(`/get-sponsor-name?username=${username}`)
        .then(response => response.json())
        .then(data => {
            const sponsorName = document.getElementById('sponsor-name');
            if (data.found) {
                sponsorName.innerText = data.name;
                sponsorName.style.color = 'green';
            } else {
                sponsorName.innerText = 'User not found';
                sponsorName.style.color = 'red';
            }
        })
        .catch(err => {
            console.error(err);
        });
});
</script>
@include('layouts.mainsite.footer')
@include('partials.notify')
