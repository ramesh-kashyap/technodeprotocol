
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
					<div class="col-4 text-center">1st level partners</div>
					<div class="col-4 text-center">2nd level partners</div>
					<div class="col-4 text-center">3rt level partners</div>
					
					<div class="col-4 text-center">
						<i class="lnil lnil-add-user me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group-alt me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
				</div>
        <div class="row align-items-end">
					<div class="col-12 col-md-6 mt-4">
						Your referral link:
          <div class="input-copy">
						  <input type="text" class="form-control copy" style="cursor:pointer;" value="https://synox.cc/partner/maticdefi08" data-clipboard-target="#btn_ref_link" id="btn_ref_link" data-toggle="tooltip" data-placement="bottom" title="Copy" readonly>
            </div>
					</div>
          
          <div class="col-12 col-md-6 mt-4">
            <div class="d-grid">
						  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#promoModal">Promotional materials</button>
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
						<span class="text-white" style="font-size:2em;line-height: 1">0</span><br>
						<small class="opacity-50">Invite partners and increase your profit</small>
					</div>
				</div>
			</div>
			
			<i class="lni lni-friends"></i>
		</div>
	</div>
  </div>
				

				

<!-- <div class="row">
  <div class="col col-md-6 pb-4 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
    <div class="card mb-4">
      
      <div class="card-body">
        <div class="mb-3">
          <i class="fab fa-youtube fa-lg text-danger me-1"></i> Record a video on YouTube
        </div>
        <form method="post" action="" class="send_video">
          <input type="hidden" name="platform" value="youtube">
          <div class="row">
            <div class="col">
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="fal fa-link"></i></span>
                </span>
                <input type="text" class="form-control" id="link" name="link" placeholder="Link to video">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer py-2">
        <small class="opacity-50">Record a video about the project where you make your deposit and get 10% of the purchased power. This function is available every 7 days.</small>
      </div>
    </div>
  </div>
  
  <div class="col col-md-6 pb-4 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
    <div class="card mb-4">
      
      <div class="card-body">
        <div class="mb-3">
          <i class="fab fa-tiktok fa-lg me-1"></i> Record a video on TikTok
        </div>
        <form  action="" class="send_video">
          <input type="hidden" name="platform" value="tiktok">
          <div class="row">
            <div class="col">
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="fal fa-link"></i></span>
                </span>
                <input type="text" class="form-control" id="link" name="link" placeholder="Link to video">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer py-2">
        <small class="opacity-50">Record a video of at least 15 seconds, tell about Synox Mining or demonstrate our site in any format convenient for you. Be sure to include your referral link in the description. Reward from $1 to $2000. This function is available every 7 days.</small>
      </div>
    </div>
  </div>
</div> -->




<div class="row">
  <!-- <div class="col-12 pb-4">
    <div  class="card shadow-lg wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
                    <div class="card-body">
                        <div class="opacity-50 mb-2">Total stats</div>
        <div class="table-responsive">
          <table class="table table-striped history table-responsive-md mb-0 text-right">
            <thead>
              <tr>
                <th class="text-left">Name</th>
                <th>Users</th>
                                <th>KHEAVYHASH</th>
                                <th>SHA-256</th>
                                <th>SCRYPT</th>
                              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">1st level partners</td>
                <td>0</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 GH/s</td>
                              </tr>
              <tr>
                <td class="text-left">2nd level partners</td>
                <td>0</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 GH/s</td>
                              </tr>
              <tr>
                <td class="text-left">3rd level partners</td>
                <td>0</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 GH/s</td>
                              </tr>
              <tr>
                <td class="text-left">All partners</td>
                <td>0</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 TH/s</td>
                                <td>0.0000 GH/s</td>
                              </tr>
            </tbody>
          </table>
        </div>
                    </div>
                </div>
  </div> -->
  
					<div class="col pb-5">
						<div  class="card shadow-lg wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">
                            <div class="card-body">
                                <div class="mb-2">Your partners</div>
								<div class="table-responsive">
									<table class="table table-striped history table-responsive-md referrals mb-0 text-right">
										<thead>
											<tr>
												<th class="text-left">User</th>
												<th>Deposit</th>
												<th>Your profit</th>
												<th>Level 2</th>
												<th>Level 3</th>
											</tr>
										</thead>
										<tbody>
                      
																						<tr>
												<td colspan="5" class="text-center">No data</td>
											</tr>
																					</tbody>
									</table>
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
