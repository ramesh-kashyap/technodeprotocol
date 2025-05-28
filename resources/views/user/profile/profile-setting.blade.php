

<script type="text/javascript">

$(function() {
  $('#profile-page').on('change', 'input[type=checkbox]', function() {
    if ( $(this).prop("checked") === true ) {
      var main = $('#enable2fa');
      main.modal('show');
    } else {
      var main = $('#disable2fa');
      main.modal('show');
    }
    
    var slide = main.find('.bs-wizard-step.active').attr('data-step');

    main.find('.slide').hide().removeClass('show active');
    main.find('.slide1').show().addClass('show active');

    main.find('.bs-wizard-step').removeClass('active').removeClass('complete').addClass('disabled');
    main.find('.bs-wizard-step').eq(0).removeClass('disabled').addClass('active');
    
    main.find('.nextbtn').prop('disabled', false).removeAttr('data-bs-dismiss').html(tl.Next+'<i class="fal fa-arrow-right ms-2">');
    main.find('button.closebtn').fadeIn(0);
    main.find('button.backbtn').fadeOut(0);
    main.find('.modal-footer').addClass('justify-content-between').removeClass('justify-content-end');
	});
  
  profile_open_tab();
  $('.dropdown-menu, .alert').on('click', 'a', function() {
    var hash = $(this).attr('data-hash')
    if ( hash ) {
      $('#user-dropdown').dropdown('hide');
      profile_open_tab( hash );
      return false;
    }
	});
  
  //$('#enable2fa').modal('show');
  
  $('#enable2fa').on('click', '.nextbtn', function() {
    var main = $('#enable2fa');
    var slide = parseInt( main.find('.bs-wizard-step.active').attr('data-step') );
    if ( 3 == slide ){
      submit_2fa('enable');
      return false
    } else if ( 4 == slide ) {
      $('#enable2fa').modal('hide');
    } else {
      next_slide('enable');
    }
	});
  
  $('#disable2fa').on('click', '.nextbtn', function() {
    var main = $('#disable2fa');
    var slide = parseInt( main.find('.bs-wizard-step.active').attr('data-step') );
    if ( 2 == slide ){
      submit_2fa('disable');
      return false
    } else if ( 3 == slide ) {
      $('#disable2fa').modal('hide');
    } else {
      next_slide('disable');
    }
	});
  
  $('#enable2fa').on('click', '.backbtn', function() {
    var main = $('#enable2fa');
    var slide = parseInt( main.find('.bs-wizard-step.active').attr('data-step') );
    if ( 4 == slide ) {
      $('#enable2fa').modal('hide');
    } else {
      next_slide('enable', 'back');
    }
	});
  
  $('#disable2fa').on('click', '.backbtn', function() {
    var main = $('#disable2fa');
    var slide = parseInt( main.find('.bs-wizard-step.active').attr('data-step') );
    if ( 3 == slide ) {
      $('#disable2fa').modal('hide');
    } else {
      next_slide('disable', 'back');
    }
	});
  
  $('#enable2fa').on('keyup', 'input[name=code2fa]', function() {
    $(this).val( $(this).val().replace(/[^0-9\.]/g, '') );
    submit_2fa('enable');
  });
  $('#disable2fa').on('keyup', 'input[name=code2fa]', function() {
    $(this).val( $(this).val().replace(/[^0-9\.]/g, '') );
    submit_2fa('disable');
  });
  
  
	$('#enable2fa').on('submit', 'form', function() {
    submit_2fa('enable');
    return false;
  });
  
  
	$('#disable2fa').on('submit', 'form', function() {
    submit_2fa('disable');
    return false;
  });
  
  $('#enable2fa, #disable2fa').on('hide.bs.modal', function (e) {
		cancel2fa($(this).attr('id'))
	});
});
  
function cancel2fa(a) {
  var main = $('#'+a);
  var step = main.find('.bs-wizard-step.active').attr('data-step');
  if ( 'enable2fa' == a && step < 4  ) {
    $("#checkEnable2fa").prop( 'checked', false );
  } else if ( 'disable2fa' == a && step < 3 ) {
    $("#checkEnable2fa").prop( 'checked', true );
  }
}

function profile_open_tab( hash ) {
  if ( !hash ) {
    var hash = location.hash.substring(1);
  }
  if ( hash ) {
    $('#'+hash+'-tab').tab('show');
  }
}
function next_slide(a, back) {
  var inc = ( 'back' == back ) ? -1 : 1;
  var main = $('#'+a+'2fa');
  var slide = main.find('.bs-wizard-step.active').attr('data-step');
  var next_slide = parseInt( slide ) + inc;
  var b = main.find('button.nextbtn');

  main.find('.slide:visible').hide().removeClass('show active');
  main.find('.slide'+next_slide).show().addClass('show active');
  
  if ( 'back' == back ) {
    main.find('.bs-wizard-step').eq(next_slide).removeClass('active').addClass('disabled');
    main.find('.bs-wizard-step').eq(next_slide-1).addClass('active').removeClass('complete');
  } else {
    main.find('.bs-wizard-step').eq(slide-1).removeClass('active').addClass('complete');
    main.find('.bs-wizard-step').eq(slide).removeClass('disabled').addClass('active');
  }
  if ( ( 2 == next_slide && a == 'disable' ) || ( 3 == next_slide && a == 'enable' ) ) {
    main.find('input[name=code2fa]').focus();
    b.prop('disabled', true);
  } else {
    b.prop('disabled', true);
    setTimeout(function (b) {
      b.prop('disabled', false);
    }, 1000, b);
  }
  
  if ( a == 'enable' ){
    if ( next_slide == 4 ) {
      b.prop('disabled', false);
      $('.badge.position-absolute').fadeOut(400);
      $('.alert-danger.wow').slideUp(400);
      $('#checkEnable2fa').parents('.alert').removeClass('alert-danger').addClass('alert-success');
      main.find('.nextbtn').attr('data-bs-dismiss', 'modal').html('<i class="fal fa-checkmark me-2"></i>'+tl.Done);
      main.find('button.backbtn').fadeOut(0);
      main.find('.modal-footer').removeClass('justify-content-between').addClass('justify-content-end');
    } else if ( next_slide >=2 && next_slide < 4 ) {
      main.find('button.closebtn').fadeOut(200);
      main.find('button.backbtn').delay(200).fadeIn(200);
    }
  } else if ( a == 'disable' ){
    if ( next_slide == 3 ) {
      b.prop('disabled', false);
      $('.badge.position-absolute').fadeIn(400);
      $('.alert-danger.wow').slideDown(400);
      $('#checkEnable2fa').parents('.alert').removeClass('alert-success').addClass('alert-danger');
      main.find('.nextbtn').attr('data-bs-dismiss', 'modal').html('<i class="fal fa-checkmark me-2"></i>'+tl.Done);
      main.find('button.backbtn').fadeOut(0);
      main.find('.modal-footer').removeClass('justify-content-between').addClass('justify-content-end');
    } else if ( next_slide >=2 && next_slide < 3 ) {
      main.find('button.closebtn').fadeOut(200);
      main.find('button.backbtn').delay(200).fadeIn(200);
    }
  }
  
  if ( next_slide == 1 ) {
      main.find('button.backbtn').fadeOut(200);
      main.find('button.closebtn').delay(200).fadeIn(200);
  }
}
  

</script>
<style>
  .profile-icons{
    border-radius:50%;
    text-align: center;
  }
  
  .store-logo a{
    border-radius:.5rem;
  }
  .store-logo a:hover{
    border-color:#fe8464;
    box-shadow:0 0 0 0.25rem rgba(254, 132, 100, .9);
  }
  
  .bs-wizard > .bs-wizard-step .bs-wizard-stepnum { font-size: 16px; margin-bottom: 5px; }
  .bs-wizard > .bs-wizard-step > .bs-wizard-dot { margin-top: -13px; }
  
  .bs-wizard > .bs-wizard-step:nth-child(2n) .bs-wizard-stepnum { margin-top: auto; }
  .bs-wizard > .bs-wizard-step > .progress { margin: 20px 0; margin-left:-50%; }
  .bs-wizard > .bs-wizard-step:nth-child(2n) > .progress { margin-top: 20px; }
  
  .progress {
    height: .4rem;
    background-color: rgba(255,255,255, .2);
  }
</style>

<div class="modal fade" id="enable2fa" tabindex="-1" aria-labelledby="enable2faLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content card">
  
      <div class="modal-header">
        <h5 class="modal-title" id="enable2faLabel">Enable Google Authenticator (2FA)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row bs-wizard" style="border:0;">
            <div class="col-3 bs-wizard-step active" data-step="1">
              <div class="text-center bs-wizard-stepnum">Step 1</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Download App</div>
            </div>

            <div class="col-3 bs-wizard-step disabled" data-step="2"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 2</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Scan QR Code</div>
            </div>

            <div class="col-3 bs-wizard-step disabled" data-step="3"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 3</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Enter code</div>
            </div>
            <div class="col-3 bs-wizard-step disabled" data-step="4"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 4</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Complete</div>
            </div>
          </div>
          
          <div class="row justify-content-center slide slide1 fade show active">
            <div class="col-12 col-sm-10 col-lg-9 mt-5 text-center">
              Download and install the <b>Google authenticator</b> App on your mobile device. After you’ve installed the App, click [Next<i class="lnil lnil-arrow-right ms-1" style="position:relative;top:2px;"></i>] to continue.
            </div>
            <div class="col-6 col-lg-4 my-5">
              <a href="https://apps.apple.com/app/google-authenticator/id388497605" class="d-inline-block _blank" target="_blank" data-toggle="tooltip" data-bs-placement="bottom"
              title="Opens in a new window">
                <img src="/img/appstore.png" width="100%">
              </a>
            </div>
            <div class="col-6 col-lg-4 my-5">
              <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" class="d-inline-block _blank" target="_blank" data-toggle="tooltip" data-bs-placement="bottom"
              title="Opens in a new window">
                <img src="/img/googleplay.png" width="100%">
              </a>
            </div>
          </div>
          
          
          <div class="row justify-content-center slide slide2 fade" style="display:none;">
             <div class="col-12 col-lg-9 mt-5 text-center">
              Open the <b>Google authenticator</b> App and tap on the [+] button on the bottom right of your screen to scan the QR code. Then click [Next<i class="lnil lnil-arrow-right ms-1" style="position:relative;top:2px;"></i>].<br>
              If you are unable to scan it, you can manually enter the setup key.
            </div>
            <div class="col-12 mt-2 mb-5 text-center">
                <img src="/uploads/2fa/682c5a1eabd77.png" class="my-2">
                <div>3WKA3CINNYXHZFBP</div>
            </div>
          </div>
          
          <div class="row justify-content-center slide slide3 fade" style="display:none;">
             <div class="col-12 col-lg-9 mt-5 text-center">
              Enter the 6-digit code from <b>Google authenticator</b>.
            </div>
            <div class="col-6 col-lg-4 my-5 text-center">
              <form method="post" action="/profile/">
                <input type="text" name="code2fa" class="form-control text-center" maxlength="6">
              </form>
            </div>
          </div>
          
          <div class="row justify-content-center slide slide4 fade" style="display:none;">
             <div class="col-12 col-lg-9 mt-5 text-center">
              Google Authenticator Enabled.
            </div>
            <div class="col-12 my-3 text-center">
                <i class="fal fa-shield-alt-3-check" style="font-size:7rem;color:aquamarine"></i>
            </div>
             <div class="col-12 col-lg-9 mb-5 text-center">
              You have successfully enabled <b>Google authenticator</b> to protect your account.
            </div>
          </div>
          
          
        </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light float-start closebtn" data-bs-dismiss="modal"><i class="fal fa-close me-2"></i>Cancel</button>
        <button type="button" class="btn btn-outline-light float-start backbtn" style="display:none;"><i class="fal fa-arrow-left me-2"></i>Back</button>
        <button type="button" class="btn btn-primary float-end nextbtn">Next<i class="fal fa-arrow-right ms-2"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="disable2fa" tabindex="-1" aria-labelledby="disable2faLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content card">
      <div class="modal-header">
        <h5 class="modal-title" id="disable2faLabel">Disable Google Authenticator (2FA)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row bs-wizard" style="border:0;">
            <div class="col-4 bs-wizard-step active" data-step="1">
              <div class="text-center bs-wizard-stepnum">Step 1</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Important information</div>
            </div>

            <div class="col-4 bs-wizard-step disabled" data-step="2"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 2</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Enter code</div>
            </div>
            <div class="col-4 bs-wizard-step disabled" data-step="3"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 3</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Complete</div>
            </div>
          </div>
          
          <div class="row justify-content-center store-logo slide slide1 fade show active">
            <div class="col-12 col-sm-10 col-lg-9 my-5 text-center">
              <b>Are you sure you want to disable Google Authenticator?</b><br>
                          </div>
          </div>
          
          <div class="row justify-content-center slide slide2 fade" style="display:none;">
             <div class="col-12 col-lg-9 mt-5 text-center">
              Enter the 6-digit code from <b>Google authenticator</b>.
            </div>
            <div class="col-6 col-lg-4 my-5 text-center">
              <form method="post" action="/profile/">
                <input type="hidden" name="action" value="disable2fa">
                <input type="text" name="code2fa" class="form-control text-center" maxlength="6">
              </form>
            </div>
          </div>
          
          <div class="row justify-content-center slide slide3 fade" style="display:none;">
             <div class="col-12 col-lg-9 mt-5 text-center">
              Google Authenticator Disabled.
            </div>
            <div class="col-12 my-3 text-center">
                <i class="fal fa-shield-alt-3" style="font-size:7rem;color:#e34904"></i>
            </div>
             <div class="col-12 col-lg-9 mb-5 text-center">
              Account security is at risk. We strongly recommend that you enable <b>Google authenticator</b>.
            </div>
          </div>
          
          
        </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light float-start closebtn" data-bs-dismiss="modal"><i class="fal fa-close me-2"></i>Cancel</button>
        <button type="button" class="btn btn-outline-light float-start backbtn" style="display:none;"><i class="fal fa-arrow-left me-2"></i>Back</button>
        <button type="button" class="btn btn-primary float-end nextbtn">Next<i class="fal fa-arrow-right ms-2"></i></button>
      </div>
    </div>
  </div>
</div>

<div id="profile-page" class="account pt-5 pb-xxl-5">

	<div class="container position-relative" style="z-index:1">
		<div class="row">
      
      <div class="col-12 py-4">
				<div class="card wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
          <div class="total-balance">
              Total Balance: <span class="inter">{{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}</span>
          </div>
          <nav class="navbar navbar-account navbar-expand-md bg-body-tertiary p-0">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
              </button>
                                                               @include('layouts.upnl.navbar')

            </div>
          </nav>
				</div>
			</div>
      
			
			<div class="col-md-12">

		
<!-- <div class="alert alert-danger mb-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".8s">
  <div class="d-flex justify-content-between align-items-center">
    <i class="fal fa-circle-exclamation fa-3x me-3"></i>
    <div>
      Your account is not protected! It is recommended to enable two-factor authentication with Google Authenticator.
    </div>
    <a href="/profile/#security" data-hash="security" class="btn btn-primary">Enable Google Authenticator</a>
  </div>
</div> -->
				
<div class="row" style="position: sticky;top:calc(65px + 1.5em);">
  <div class="col-12 col-xl-5 col-xxl-4">
    <div class="card shadow-lg mb-4 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
      <div class="card-body">
        <div class="row">
         <div class="col mb-3">
  <div class="text-center">
    <i class="fas fa-user-tie opacity-75 mb-2" style="font-size:4rem;"></i> <!-- Changed 'far' to 'fas' -->
    <br>
    <h2 class="d-inline">{{ Auth::user()->name }}</h2>
    
    <div class="mb-2 pt-3">
      <i class="fas fa-envelope me-1"></i> <!-- Updated icon for email -->
      <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
    </div>
  </div>
</div>

        </div>
      </div>
      <div class="card-footer d-none d-md-block">
        <div class="progress-wrapper">
          <small class="d-block mb-2 opacity-50">Account Fullness</small>
          <div class="progress opacity-4" style="height:20px;padding:1px;">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: %;border-radius:.25rem;padding:0 .25rem">
            <small class="progress-value">0%</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
	<div class="col">
				
		<div class="card shadow-lg mb-4 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".4s">
  <div class="card-body">
    <ul class="nav nav-pills nav-fill" role="tablist" id="tabSettings">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
          <i class="fal fa-idea-setting me-2"></i>General information
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="security-tab" data-bs-toggle="tab" href="#security-content" role="tab" aria-controls="security-content" aria-selected="false">
          <i class="fal fa-shield-alt-1 me-2"></i>Security
        </a>
      </li>
    </ul>

    <div class="tab-content" id="tabSettingsContent">
      <!-- General Info Tab -->
      <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
        <form action="{{ route('user.update-profile') }}" method="POST">
        {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6 mt-3">
              <div class="form-group">
                <label for="firstname">name</label>
                <input id="firstname" name="name" class="form-control" type="text" value="{{ $profile_data ? $profile_data->name : '' }}">
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div class="form-group">
                <label for="lastname">Email</label>
                <input id="lastname" name="email" class="form-control" type="text" value="{{ $profile_data ? $profile_data->email : '' }}" readonly>
              </div>
            </div>
          </div>

          <div class="row">
             <div class="col-md-6 mt-3">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" class="form-control" type="tel" value="{{ $profile_data ? $profile_data->phone : '' }}"readonly>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div class="form-group">
                <label for="phone">User Id</label>
                <input id="phone" name="username" class="form-control" type="tel" value="{{ $profile_data ? $profile_data->username : '' }}"readonly>
              </div>
            </div>
          </div>

          

          <div class="row mt-4">
            <div style="align-item:center;display:flex;justify-content:center"class="col text-end">
              <button  class="btn btn-primary" type="submit">
                Update Profile
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Security Tab -->
      <div class="tab-pane fade" id="security-content" role="tabpanel" aria-labelledby="security-tab">
        <form action="{{ route('user.update-password') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col mt-4">
              <!-- <div class="alert alert-danger">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="checkEnable2fa">
                  <label class="form-check-label" for="checkEnable2fa">Two-Factor Authentication - Google Authenticator (2FA) <b>Recommended</b></label>
                </div>
              </div> -->
            </div>

            <div class="col-12 mb-3">
              <div class="form-group">
                <label for="old_password">Old password</label>
                <input id="old_password" name="old_password" placeholder="Enter Old Password" class="form-control" type="password">
              </div>
            </div>
            <div class="col-12 col-md-6 mb-3 mb-md-0">
              <div class="form-group">
                <label for="password">New password</label>
                <input id="password" name="password" class="form-control" Placeholder="Enter New Password" type="password">
              </div>
            </div>
            <div class="col col-md-6">
              <div class="form-group">
                <label for="password2">Repeat new password</label>
                <input id="password2" name="confirmation_password" class="form-control" Placeholder="Enter Confirm Password" type="password">
              </div>
            </div>

              <div class="row mt-4">
            <div style="align-item:center;display:flex;justify-content:center"class="col text-end">
              <button  class="btn btn-primary" type="submit">
                Change Password
              </button>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div> <!-- End Tab Content -->
  </div> <!-- End Card Body -->
</div>

	</div>
</div>
				    @include('partials.notify')

				
		
		
		
</div>
	</div>
</div>
</div>
		
			
</div>
