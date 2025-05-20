                          @include('layouts.mainsite.header')

<div id="support" class="contact-us">
  <div class="container">
    <div class="regimg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;"></div>
    <div class="regimg2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInRight;"></div>

    <div class="row">
      <div class="col-12 my-5 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.3s; animation-name: fadeIn;">
        <div class="text-center">
          <h1>Support</h1>
          <span class="fs-4">Do not hesitate to write to us. We are always ready to help you</span>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
            
      <div class="col col-md-8 mb-5">

    <div class="row">
      
      <div class="col-12">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card-body">
            <form role="form" id="contact-form" action="/support/" method="post">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="input-group input-group-seamless">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fal fa-at"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your e-mail" aria-label="Your e-mail" autocomplete="email" style="border-radius:.625rem">
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="input-group input-group-seamless">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fal fa-envelope-open-text"></i></span>
                    </div>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" aria-label="Subject" style="border-radius:.625rem">
                  </div>
                </div>
              </div>
              <div>
                <textarea name="message" class="form-control" id="message" rows="8" placeholder="Your message"></textarea>
              </div>
              
              <div class="col-12 my-4">
               <div class="h-captcha d-flex justify-content-center" id="h-captcha-login-m" data-sitekey="bee4c716-97a4-43ac-8aa8-fca04de80a80"><iframe src="https://newassets.hcaptcha.com/captcha/v1/3d86f84f0763959329e7e143f693dec441c0c973/static/hcaptcha.html#frame=checkbox&amp;id=0n7t7817sen&amp;host=synox.cc&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;custom=false&amp;hl=en&amp;tplinks=on&amp;andint=off&amp;pstissuer=https%3A%2F%2Fpst-issuer.hcaptcha.com&amp;sitekey=bee4c716-97a4-43ac-8aa8-fca04de80a80&amp;theme=light&amp;origin=https%3A%2F%2Fsynox.cc" tabindex="0" frameborder="0" scrolling="no" allow="private-state-token-issuance 'src'; private-state-token-redemption 'src'" title="Widget containing checkbox for hCaptcha security challenge" data-hcaptcha-widget-id="0n7t7817sen" data-hcaptcha-response="" style="pointer-events: auto; background-color: rgba(255, 255, 255, 0); border-radius: 4px; width: 302px; height: 76px; overflow: hidden;"></iframe><textarea id="g-recaptcha-response-0n7t7817sen" name="g-recaptcha-response" style="display: none;"></textarea><textarea id="h-captcha-response-0n7t7817sen" name="h-captcha-response" style="display: none;"></textarea></div>
              </div>
              
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
@include('layouts.mainsite.footer')