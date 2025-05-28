

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<script>
var rb_conf = {
	'max': 5,
};
	
$(function() {
	var copyCode = new ClipboardJS('#btn_ref_link');

	copyCode.on('success', function(event) {
		event.clearSelection();
		new Noty({
			type: 'success',
			text: '<i class="fal fa-check"></i> '+tl.Copied,
			timeout: 3000,
			progressBar: true,
			theme: 'relax',
			layout: 'topRight',
		}).show();
	});
});
</script>
<style>
  #promoModal .form-control{
    padding:5px;
  }
</style>

<div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="promoModalLabel">Promotional materials</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center">
                            <div class="col-12 text-center">
              <div class="row promo">
                  <div class="col-12">
                      <img src="{{asset('')}}assets/img/bg.gif" style="max-width:100%;margin:0 auto;" />
                      <textarea style="width:100%;min-height:41px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/bg.gif" /></a></textarea>
                      
                  </div>
                  <div class="col-12">
                      <img src="{{asset('')}}assets/img/bg.png" style="max-width:100%;margin:0 auto;" />
                      <textarea style="width:100%;min-height:41px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/bg.png" /></a></textarea>
                  </div>
                  
                  <div class="col-12">
                      <img src="{{asset('')}}assets/img/sg.gif" style="max-width:100%;margin:0 auto;" />
                      <textarea style="width:100%;min-height:41px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/sg.gif" /></a></textarea>
                  </div>
                  
                  <div class="col-12">
                      <img src="{{asset('')}}assets/img/sg.png" style="max-width:100%;margin:0 auto;" />
                      <textarea style="width:100%;min-height:41px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/sg.png" /></a></textarea>
                  </div>
                  
                  <div class="col-6">
                      <img src="{{asset('')}}assets/img/bv.gif" style="max-width:100%;margin:0 auto;" />
                      
                      <textarea style="width:100%;min-height:90px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/bv.gif" /></a></textarea>
                      <br />
                  </div>
                  <div class="col-6">
                      <img src="{{asset('')}}assets/img/bv.png" style="max-width:100%;margin:0 auto;" />
                      
                      <textarea style="width:100%;min-height:90px;" class="form-control mt-2 mb-4"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/bv.png" /></a></textarea>
                      <br />
                  </div>

                  <div class="col-6">
                      <img src="{{asset('')}}assets/img/sm.gif" style="max-width:100%;margin:0 auto;" />
                      
                      <textarea style="width:100%;min-height:90px;" class="form-control mt-2"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/sm.gif" /></a></textarea>
                      <br />
                  </div>
                  <div class="col-6">
                      <img src="{{asset('')}}assets/img/sm.png" style="max-width:100%;margin:0 auto;" />
                      
                      <textarea style="width:100%;min-height:90px;" class="form-control mt-2"><a href="https://synox.cc/partner/maticdefi08"><img src="https://synox.cc/img/a/sm.png" /></a></textarea>
                      <br />
                  </div>
              </div>
      </div>
        </div>
    </div>
	      </div>
</div>
</div>

<div id="partners" class="account partners partners-page pt-md-4 py-lg-5">

	<div class="container">
		<div class="row">
			<div class="col-12 py-4">
				<div class="card wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
          <div class="total-balance">
              Total Balance: <span class="inter">$0.01</span>
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
      
      <div class="col-12 pb-4 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">

		<div class="card mb-4">
			
			<div class="card-body pb-4">
								
				
				<div class="row">
					<div class="col-4 text-center">Total User</div>
					<div class="col-4 text-center">Total Active User</div>
					<div class="col-4 text-center">Your Active Investment</div>
					
					<div class="col-4 text-center">
						<i class="lnil lnil-add-user me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">{{ $totalTeam }}</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">{{$activetotalTeam}}</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group-alt me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">{{$totalInvestment }}</span>
					</div>
				</div>
      @php
    $refLink = url('/register') . '?ref=' . auth()->user()->username;
    $encodedLink = urlencode($refLink);
    $encodedText = urlencode("Join me on this amazing platform using my referral link:");
@endphp

<div class="row align-items-end">
  <div class="col-12 col-md-6 mt-4">
    <label><strong>Your referral link:</strong></label>
    <div class="input-copy">
      <input type="text" class="form-control" id="btn_ref_link" value="{{ $refLink }}" readonly>
    </div>
  </div>

  <div class="col-12 col-md-6 mt-4">
    <div class="d-grid">
      <button class="btn btn-primary" onclick="openSharePopup()">
        <i class="fas fa-share-alt me-1"></i> Share
      </button>
    </div>
  </div>
</div>

<!-- Share Popup Modal -->
<div id="sharePopup" class="custom-modal" style="display:none;">
  <div class="custom-modal-content">
  <span class="close" onclick="closeSharePopup()">&times;</span>
  <h5>Share Your Referral Link</h5>

  @php
    $referralLink = url('/register') . '?ref=' . auth()->user()->username;
    $encodedLink = urlencode($referralLink);
    $encodedText = urlencode("Join me using my referral link:");
  @endphp

  <div class="share-icons">
    <!-- WhatsApp -->
    <a href="https://api.whatsapp.com/send?text={{ $encodedText }}%20{{ $encodedLink }}" target="_blank" class="share-btn whatsapp" title="WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedLink }}" target="_blank" class="share-btn facebook" title="Facebook">
      <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Telegram -->
    <a href="https://t.me/share/url?url={{ $encodedLink }}&text={{ $encodedText }}" target="_blank" class="share-btn telegram" title="Telegram">
      <i class="fab fa-telegram-plane"></i>
    </a>

    <!-- Email -->
    <a href="mailto:?subject=Join Now&body={{ $encodedText }}%20{{ $encodedLink }}" target="_blank" class="share-btn email" title="Email">
      <i class="fas fa-envelope"></i>
    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedLink }}" target="_blank" class="share-btn linkedin" title="LinkedIn">
      <i class="fab fa-linkedin-in"></i>
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/intent/tweet?url={{ $encodedLink }}&text={{ $encodedText }}" target="_blank" class="share-btn twitter" title="Twitter">
      <i class="fab fa-twitter"></i>
    </a>

    <!-- Reddit -->
    <a href="https://www.reddit.com/submit?url={{ $encodedLink }}&title={{ $encodedText }}" target="_blank" class="share-btn reddit" title="Reddit">
      <i class="fab fa-reddit-alien"></i>
    </a>

    <!-- Pinterest -->
    <a href="https://pinterest.com/pin/create/button/?url={{ $encodedLink }}&description={{ $encodedText }}" target="_blank" class="share-btn pinterest" title="Pinterest">
      <i class="fab fa-pinterest-p"></i>
    </a>
  </div>
</div>

</div>

                
			</div>
			<div class="card-footer">
			<div class="row justify-content-between">
          <div class="col">
            <span class="opacity-50">You are invited by:</span><br>
            <i class="lni lni-user-star me-1"></i>Missing          </div>
					<div class="col text-end">
						Total partners:<br>
						<span class="text-white" style="font-size:2em;line-height: 1">{{ $totalTeam }}</span><br>
						<small class="opacity-50">Invite partners and increase your profit</small>
					</div>
				</div>
			</div>
			
			<i class="lni lni-friends"></i>
		</div>
	</div>
  </div>
				

					<div class="col pb-5">
						<div  class="card shadow-lg wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
                            <div class="card-body">
                                <div class="mb-2">Your partners</div>
								<div class="table-responsive">
									<table class="table table-striped history table-responsive-md referrals mb-0 text-right">
										<thead>
											<tr>
												<th>Name</th>

                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Sponsor ID</th>


                            <th>Status</th>
											</tr>
										</thead>
										<tbody>
                                            
                        {{-- Direct Team Members --}}
                        @if(is_array($direct_team) || is_object($direct_team))
                        @foreach ($direct_team as $value)
                      
																						<tr>


                                                                                             <td>{{ $value->name }}</td>

                            <td><b>{{ $value->username }}</b></td>
                            <td><a href="mailto:{{ $value->email }}" class="themed-link">{{ $value->email }}</a></td>
                            <td class="themed-link">{{$value->level - Auth::user()->level}}</td>
                            <td class="themed-link">{{$value->sponsor_detail->username}}</td>
                            <td>
                            @if ($value->active_status!="Pending")
                                <span class="text-success">${{ number_format($value->package,2) }}</span>
                            @else
                                <span class="text-warning">No deposit yet</span>
                            @endif
                            </td>

											</tr>
                                            <tr>
                            <td colspan="3">
                                <small>
                                    
                                    <span class="badge bg-primary"></span>
                                </small>
                            </td>
                        </tr>
                        @endforeach
                        @endif
																					</tbody>
									</table>
               <div class="d-flex justify-content-center mt-4">
        {{ $direct_team->links('pagination::bootstrap-4') }}
    </div>

								</div>
							</div>
							                        </div>
					</div>
				</div>
				
	</div>
</div>
		
		
		</div>
		</div>


	
</div>
<style>
.custom-modal {
  position: fixed;
  z-index: 10000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.6);
  display: flex;
  align-items: center;
  justify-content: center;
}
.custom-modal-content {
  background: #142040;

  padding: 30px;
  border-radius: 10px;
  text-align: center;
  position: relative;
  width: 90%;
  max-width: 400px;
}
.custom-modal .close {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 24px;
  cursor: pointer;
}
.share-btn {
  width: 50px;
  height: 50px;
  font-size: 22px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-decoration: none;
}

.whatsapp  { background: #25D366; }
.facebook  { background: #3b5998; }
.telegram  { background: #0088cc; }
.email     { background: #6c757d; }
.linkedin  { background: #0077b5; }
.twitter   { background: #1da1f2; }
.reddit    { background: #ff4500; }
.pinterest { background: #bd081c; }

.share-icons {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: center;
  margin-top: 20px;
}

</style>
<script>
function openSharePopup() {
  document.getElementById("sharePopup").style.display = "flex";
}
function closeSharePopup() {
  document.getElementById("sharePopup").style.display = "none";
}
</script>
