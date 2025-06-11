


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
      
      <div class="col-12 pb-4 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s">

		<div class="card mb-4">
			
			<div class="card-body pb-4">
								
				
				<!-- <div class="row">
					<div class="col-4 text-center">Total Withdraw</div>
					<div class="col-4 text-center">Active Withdraw</div>
					<div class="col-4 text-center">Pending Withdraw</div>
					
					<div class="col-4 text-center">
						<i class="lnil lnil-add-user me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
					<div class="col-4 text-center">
						<i class="lnil lnil-add-group-alt me-2" style="font-size:3em;vertical-align:middle;line-height: 0;"></i><span style="font-weight:300;font-size:2em">0</span>
					</div>
				</div> -->
        <div class="row align-items-end">
					<div class="col-12 col-md-6 mt-4">
						Transaction Type:
                            <div class="form-group">
  <select class="form-control" onchange="if(this.value) window.location.href=this.value;">
    <option style="background-color: #08132e
;" value="{{ route('user.DepositHistory') }}" 
        {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>Deposit</option>
    <option style="background-color: #08132e
;" value="{{ route('user.Withdraw-History') }}" 
        {{ Request::routeIs('user.Withdraw-History') ? 'selected' : '' }}>Withdrawal</option>

    <option style="background-color: #08132e
;" value="{{ route('user.level-income') }}" 
        {{ Request::routeIs('user.level-income') ? 'selected' : '' }}>Level Income</option>

    <option style="background-color: #08132e
;" value="{{ route('user.roi-bonus') }}" 
        {{ Request::routeIs('user.roi-bonus') ? 'selected' : '' }}>Roi Income</option>

    <option style="background-color: #08132e
;" value="{{ route('user.reward-bonus') }}" 
        {{ Request::routeIs('user.reward-bonus') ? 'selected' : '' }}>Direct Income</option> 
           <option style="background-color: #08132e
;" value="{{ route('user.matchingBonus') }}" 
        {{ Request::routeIs('user.matchingBonus') ? 'selected' : '' }}> Matching Income</option>
        <option style="background-color: #08132e
;" value="{{ route('user.fundHistory') }}" 
        {{ Request::routeIs('user.fundHistory') ? 'selected' : '' }}> Fund History</option>
</select>

</div>
					</div>
          
          <div class="col-12 col-md-6 mt-4">
            <div class="d-grid">
           </div>
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
                                <div class="mb-2"> Royalty Income</div>
        <div class="d-flex justify-content-between align-items-center mb-3">
    <form action="{{ route('user.dailyIncentive') }}" method="GET" class="d-flex ms-auto" style="width: 350px;">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit" style="border-left: none;background-color:#0493CA;color:#fff">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
</div>

								<div class="table-responsive">
									<table class="table table-striped history table-responsive-md referrals mb-0 text-right">
										<thead>
											<tr>
											<th>UserId</th>

                                             <th>Amount</th>
                                              <th>Name</th>

                                              <th>Created_at</th>
                           
											</tr>
										</thead>
										<tbody>
                                            
                        @forelse($level_income as $income)
                      
						            <tr>
                                        <td>User ID: {{ $income->rname }}</td>
                                        <td><b>${{ number_format($income->comm, 2) }}</b></td>
                                        <td><b>{{ ($income->fullname) }}</b></td>
                                        <td><a href="" class="themed-link">{{ \Carbon\Carbon::parse($income->created_at)->format('M-d-Y') }}</a></td>

						          </tr>
                               <tr>
                                  <td colspan="3">
                                    <small>
                                    
                                       <span class="badge bg-primary"></span>
                                   </small>
                                 </td>
                               </tr>
                         @empty
        <div class="col-12">
                No Income data found.
        </div>
    @endforelse</tbody>
									</table>
               <div class="d-flex justify-content-center mt-4">
        {{ $level_income->links('pagination::bootstrap-4') }}
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
