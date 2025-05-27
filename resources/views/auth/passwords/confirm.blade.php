@include('layouts.mainsite.header')

<div class="regpage">
  <div class="container">
    <div class="regimg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInLeft;"></div>
    <div class="regimg2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInRight;"></div>

    <div class="row">
      <div class="col-12 my-5 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2.5s; animation-delay: 0.3s; animation-name: fadeIn;">
        <div class="text-center">
          <h1>Welcome back</h1>
          <span class="fs-4">Forgot Password to your account</span>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-md-8 col-lg-6 col-xl-5 col-xxl-4">

    <div class="row">
      
      <div class="col-12">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
          <div class="card-body" id="login">
          <form action="{{route('verifyCode')}}" method="POST" class="login">
              {{ csrf_field() }}
            <div class="row">
              <div class="col-12">
                  <input type="text" class="form-control mt-1" name="code" id="user_email" placeholder="Enter Recovery Code">
              </div>
               <input type="hidden" value="{{$userID}}" class="form-control" name="userID">
              
               <div class="col-12 mt-3 d-grid">
                <button type="submit" class="btn btn-primary py-3">Reset Password</button>
              </div>
            </div>
          </form>
           
          </div>
              @include('partials.notify')

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