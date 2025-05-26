<script>
$(function() {
  $('.SHA-256 .circle-progress').circleProgress({
    lineCap: 'round',
    size:120,
    fill: {
      gradient: ["rgba(142,112,238,1)", "rgba(54,130,197,1)"]
    },
    animation: {
      duration: 2200, easing: "circleProgressEasing"
    },
  }).on('circle-animation-progress', function(event, progress, stepValue) {
    $(this).find('strong').html( (stepValue*100).toFixed(2) + '<i>%</i>' );
  });
  $('.SCRYPT .circle-progress').circleProgress({
    lineCap: 'round',
    size:120,
    fill: {
      gradient: ["rgba(222,124,227,1)", "rgba(125,106,239,1)"]
    },
    animation: {
      duration: 2200, easing: "circleProgressEasing"
    },
  }).on('circle-animation-progress', function(event, progress, stepValue) {
    $(this).find('strong').html( (stepValue*100).toFixed(2) + '<i>%</i>' );
  });
});

 
var profit = {
	'btc': 0/60/60/10,
	'bch': 2.1E-7/60/60/10,
	'bnb': 0/60/60/10,
	'dash': 0/60/60/10,
	'doge': 0.0003772/60/60/10,
	'xec': 3.74363582/60/60/10,
	'kas': 0.00073899/60/60/10,
	'ltc': 8.9E-7/60/60/10,
	'trx': 0/60/60/10,
	'usd.epc': 0/60/60/10,
	'usdt.bep20': 0/60/60/10,
	'usdt.trc20': 0/60/60/10,
};

var power = {
		'KHEAVYHASH' : {
				'kas': 20,
			},
		'SHA-256' : {
				'btc': 20,
				'bch': 20,
				'xec': 20,
			},
		'SCRYPT' : {
				'doge': 20,
				'ltc': 20,
			},
	};
var currencies = {
		'btc':{
				'enabled':'true',
				'color':'ac6830',
				'min_deposit':'0.0005',
				'min_withdraw':'0.0005',
				'algorithm':'SHA-256',
				'name':'Bitcoin',
				'currency':'btc',
				'system':'',
				},
			'bch':{
				'enabled':'true',
				'color':'1f6e3b',
				'min_deposit':'0.01',
				'min_withdraw':'0.01',
				'algorithm':'SHA-256',
				'name':'Bitcoin Cash',
				'currency':'bch',
				'system':'',
				},
			'bnb':{
				'enabled':'true',
				'color':'',
				'min_deposit':'0.005',
				'min_withdraw':'0.005',
				'algorithm':'',
				'name':'BNB Coin',
				'currency':'bnb',
				'system':'',
				},
			'dash':{
				'enabled':'true',
				'color':'',
				'min_deposit':'0.05',
				'min_withdraw':'0.05',
				'algorithm':'',
				'name':'Dash',
				'currency':'dash',
				'system':'',
				},
			'doge':{
				'enabled':'true',
				'color':'af8e2f',
				'min_deposit':'10',
				'min_withdraw':'10',
				'algorithm':'SCRYPT',
				'name':'Dogecoin',
				'currency':'doge',
				'system':'',
				},
			'xec':{
				'enabled':'true',
				'color':'',
				'min_deposit':'100000',
				'min_withdraw':'100000',
				'algorithm':'SHA-256',
				'name':'eCash',
				'currency':'xec',
				'system':'',
				},
			'kas':{
				'enabled':'true',
				'color':'ababab',
				'min_deposit':'50',
				'min_withdraw':'50',
				'algorithm':'KHEAVYHASH',
				'name':'Kaspa',
				'currency':'kas',
				'system':'',
				},
			'ltc':{
				'enabled':'true',
				'color':'ababab',
				'min_deposit':'0.03',
				'min_withdraw':'0.03',
				'algorithm':'SCRYPT',
				'name':'Litecoin',
				'currency':'ltc',
				'system':'',
				},
			'trx':{
				'enabled':'true',
				'color':'',
				'min_deposit':'10',
				'min_withdraw':'10',
				'algorithm':'',
				'name':'Tron',
				'currency':'trx',
				'system':'',
				},
			'usd.epc':{
				'enabled':'true',
				'color':'',
				'min_deposit':'1',
				'min_withdraw':'1',
				'algorithm':'',
				'name':'ePayCore',
				'currency':'usd',
				'system':'epc',
				},
			'usdt.bep20':{
				'enabled':'true',
				'color':'',
				'min_deposit':'5',
				'min_withdraw':'5',
				'algorithm':'',
				'name':'Tether BEP20',
				'currency':'usdt',
				'system':'bep20',
				},
			'usdt.trc20':{
				'enabled':'true',
				'color':'',
				'min_deposit':'5',
				'min_withdraw':'10',
				'algorithm':'',
				'name':'Tether TRC20',
				'currency':'usdt',
				'system':'trc20',
				},
	};
    
var course = {
			'btc': 105253.88985665,
			'bch': 389.19314354,
			'bnb': 644.14415961,
			'dash': 23.4113029,
			'doge': 0.22092387,
			'xec': 2.226E-5,
			'kas': 0.11276699,
			'ltc': 93.5523894,
			'trx': 0.27336542,
			'usd.epc': 1,
			'usdt.bep20': 1.00101,
			'usdt.trc20': 1.00101,
	};
</script>
<style>
  .server_img{
    width:50%;
  }
  .server_img:before{
    content: '';
    display: block;
    position: absolute;
    z-index: 0;
    right: -35rem;
    top: -35rem;
    width: 100rem;
    height: 100rem;
    border-radius: 100%;
    background: rgba(21, 189, 255, 0);
    background: radial-gradient(circle, rgba(21, 189, 255, .7) 0%, rgba(21, 189, 255, 0) 50%);

  }
  .server_img:after{
    content:'';
    display:block;
    background-image:url(/assets/img/srv.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: 100% 0;
    
    width:100%;
    height:30rem;
    position:absolute;
    right:0;
    top:0;
  }
</style>
<div id="mining" class="account mining py-lg-5">

	<div class="container">
		<div class="row">
			<div class="col-12 py-4">
				<div class="card wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0s; animation-name: fadeInUp;">
          <div class="total-balance">
              Total Balance: <span class="inter">$0.00</span>
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
      
      <div class="col-12 pb-4">
		<ul class="nav nav-pills nav-fill text-uppercase wow fadeIn position-relative" style="z-index: 1; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeIn;" data-wow-duration=".7s" data-wow-delay=".5s" role="tablist" id="tabAlgorithm">
						<li class="nav-item" role="presentation">
				<a class="nav-link" id="tabAlgorithmKHEAVYHASH" data-bs-toggle="tab" href="#algorithmKHEAVYHASH" data-bs-target="#algorithmKHEAVYHASH" role="tab" aria-controls="algorithmKHEAVYHASH" aria-selected="false" tabindex="-1">
					KHEAVYHASH
				</a>
			</li>
						<li class="nav-item" role="presentation">
				<a class="nav-link active" id="tabAlgorithmSHA-256" data-bs-toggle="tab" href="#algorithmSHA-256" data-bs-target="#algorithmSHA-256" role="tab" aria-controls="algorithmSHA-256" aria-selected="true">
					SHA-256
				</a>
			</li>
						<li class="nav-item" role="presentation">
				<a class="nav-link" id="tabAlgorithmSCRYPT" data-bs-toggle="tab" href="#algorithmSCRYPT" data-bs-target="#algorithmSCRYPT" role="tab" aria-controls="algorithmSCRYPT" aria-selected="false" tabindex="-1">
					SCRYPT
				</a>
			</li>
					</ul>
	</div>
      
		<div class="col-12">

			
			<div class="tab-content" id="tabAlgorithmContent">
			
	
<div class="tab-pane fade KHEAVYHASH algorithm pb-4" id="algorithmKHEAVYHASH" role="tabpanel" aria-labelledby="#tabAlgorithmKHEAVYHASH">
			
	
	
	<input type="hidden" name="algorithm" value="KHEAVYHASH">
	<input type="hidden" name="algorithm_unit" value="TH/s">

	<input type="hidden" name="available_power_warning" value="Use 100% of purchased power for maximum profit">
	<input type="hidden" name="spent_power_warning" value="Mining is stopped">
  
  <div class="row">
    <div class="col mb-4">
      <div class="card shadow-lg overflow-hidden wow fadeInUp animated" data-wow-duration=".7s" data-wow-delay="0s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0s; animation-name: fadeInUp;">
        <div class="card-body">
          <div class="row">
            <div class="col col-sm-8">
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="mb-4 pb-2 opacity-75">Your daily profit:</div>
                  <div class="lvl mt-5">
                    <div class="progress">
                      <div style="width:00%;"></div>
                    </div>
                    <div class="d-flex justify-content-between align-middle lvl-table">
                                          <div class="item ratio ratio-1x1 active" data-lvl="0">
                        <div>
                        <span class="text-success fs-4" style="top:-2.2rem;">1%</span>
                        <span>0 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="1">
                        <div>
                        <span>1.2%</span>
                        <span>1 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="2">
                        <div>
                        <span>1.5%</span>
                        <span>2 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="3">
                        <div>
                        <span>2%</span>
                        <span>3 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="4">
                        <div>
                        <span>2.2%</span>
                        <span>4 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="5">
                        <div>
                        <span>2.5%</span>
                        <span>5 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="6">
                        <div>
                        <span>3%</span>
                        <span>6 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="7">
                        <div>
                        <span>3.5%</span>
                        <span>7 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="8">
                        <div>
                        <span>4%</span>
                        <span>8 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="9">
                        <div>
                        <span>4.5%</span>
                        <span>9 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="10">
                        <div>
                        <span>5%</span>
                        <span>10 Level</span>
                        </div>
                      </div>
                                        </div>
                  </div>
                </div>
                
                <div class="col">
                  <div>
                    <span class="opacity-75">Power in stock:</span><br><i class="lnil lnil-server-8 text-success" style="font-size:2rem;"></i> <span class="in_stock text-success inter" style="font-size:2rem;">10.00</span> <span class="text-success" style="font-size:1rem;">TH/s</span>
                  </div>
                  <div class="py-3 my-md-0 opacity-75">
                    Available power:<br><span class="available_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-alert-server"></i> 80% <small>(8 TH/s)</small></span>
                  </div>
                  <div class="opacity-75">
                    Power used:<br><span class="spent_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-spinner-7 fa-spin"></i> 20% <small>(2 TH/s)</small></span>
                  </div>

                </div>
                <div class="col position-relative" style="z-index:10;">
                                    <div class="my-md-0">
                    <span class="opacity-75">Bonus daily profit:</span><br><span class="profit_daily text-success inter" style="font-size:2rem;width:100%;">+0%</span><br>
                    <small>For accumulated days without withdrawal</small>
                  </div>

                  <div class="py-4 my-md-0 opacity-75">
                    Buy 90.00 TH/s to earn 1.2% daily
                  </div>
                  <a href="/buy-power/" class="btn btn-primary">Buy hashrate</a>
                </div>
              </div>
            </div>
            <div class="col d-none d-sm-block text-end">
              <div class="server_img position-absolute top-0 end-0 me-5 mt-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    





<div class="row justify-content-center cur_array wow fadeInUp animated" data-wow-duration=".7s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.1s; animation-name: fadeInUp;">
															<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets/img/currencies/kas.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">Kaspa</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_kas fs-1 inter" style="font-variant-numeric: tabular-nums;">0.00125198</span> <small class="ml-2 mt-1">KAS</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_kas" class="mining_slider power_kas noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="kas">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="0.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-success'>+7.47%</span>">1 KAS = $0.112767</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_kas" class="inter">0.00073899</span> <small>KAS</small><br>
								<small class="opacity-50" id="profit_hour_kas_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_kas" class="inter">0.01773569</span> <small>KAS</small><br>
								<small class="opacity-50" id="profit_day_kas_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_kas" class="inter">0.53207060</span> <small>KAS</small><br>
								<small class="opacity-50" id="profit_month_kas_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_kas" class="inter">6.38484720</span> <small>KAS</small><br>
								<small class="opacity-50" id="profit_year_kas_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#ababab">
								<div class="circle kas"></div>
								<div class="icons_curency kas"></div>
			</div>
			</div>



	</div>
												</div>
	
	</div>
			
<div class="tab-pane fade show active SHA-256 algorithm pb-4" id="algorithmSHA-256" role="tabpanel" aria-labelledby="#tabAlgorithmSHA-256">
			
	
	
	<input type="hidden" name="algorithm" value="SHA-256">
	<input type="hidden" name="algorithm_unit" value="TH/s">

	<input type="hidden" name="available_power_warning" value="Use 100% of purchased power for maximum profit">
	<input type="hidden" name="spent_power_warning" value="Mining is stopped">
  
  <div class="row">
    <div class="col mb-4">
      <div class="card shadow-lg overflow-hidden wow fadeInUp" data-wow-duration=".7s" data-wow-delay="0s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0s; animation-name: fadeInUp;">
        <div class="card-body">
          <div class="row">
            <div class="col col-sm-8">
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="mb-4 pb-2 opacity-75">Your daily profit:</div>
                  <div class="lvl mt-5">
                    <div class="progress">
                      <div style="width:00%;"></div>
                    </div>
                    <div class="d-flex justify-content-between align-middle lvl-table">
                                          <div class="item ratio ratio-1x1 active" data-lvl="0">
                        <div>
                        <span class="text-success fs-4" style="top:-2.2rem;">1%</span>
                        <span>0 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="1">
                        <div>
                        <span>1.2%</span>
                        <span>1 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="2">
                        <div>
                        <span>1.5%</span>
                        <span>2 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="3">
                        <div>
                        <span>2%</span>
                        <span>3 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="4">
                        <div>
                        <span>2.2%</span>
                        <span>4 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="5">
                        <div>
                        <span>2.5%</span>
                        <span>5 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="6">
                        <div>
                        <span>3%</span>
                        <span>6 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="7">
                        <div>
                        <span>3.5%</span>
                        <span>7 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="8">
                        <div>
                        <span>4%</span>
                        <span>8 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="9">
                        <div>
                        <span>4.5%</span>
                        <span>9 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="10">
                        <div>
                        <span>5%</span>
                        <span>10 Level</span>
                        </div>
                      </div>
                                        </div>
                  </div>
                </div>
                
                <div class="col">
                  <div>
                    <span class="opacity-75">Power in stock:</span><br><i class="lnil lnil-server-8 text-success" style="font-size:2rem;"></i> <span class="in_stock text-success inter" style="font-size:2rem;">1.00</span> <span class="text-success" style="font-size:1rem;">TH/s</span>
                  </div>
                  <div class="py-3 my-md-0 opacity-75">
                    Available power:<br><span class="available_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-alert-server"></i> 40% <small>(0.4 TH/s)</small></span>
                  </div>
                  <div class="opacity-75">
                    Power used:<br><span class="spent_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-spinner-7 fa-spin"></i> 60% <small>(0.6 TH/s)</small></span>
                  </div>

                </div>
                <div class="col position-relative" style="z-index:10;">
                                    <div class="my-md-0">
                    <span class="opacity-75">Bonus daily profit:</span><br><span class="profit_daily text-success inter" style="font-size:2rem;width:100%;">+0%</span><br>
                    <small>For accumulated days without withdrawal</small>
                  </div>

                  <div class="py-4 my-md-0 opacity-75">
                    Buy 9.00 TH/s to earn 1.2% daily
                  </div>
                  <a href="/buy-power/" class="btn btn-primary">Buy hashrate</a>
                </div>
              </div>
            </div>
            <div class="col d-none d-sm-block text-end">
              <div class="server_img position-absolute top-0 end-0 me-5 mt-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    





<div class="row justify-content-center cur_array wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.1s; animation-name: fadeInUp;">
			<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets/img/currencies/btc.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">Bitcoin</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_btc fs-1 inter" style="font-variant-numeric: tabular-nums;">0.00000000</span> <small class="ml-2 mt-1">BTC</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_btc" class="mining_slider power_btc noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="btc">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="0.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="60.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-success'>+2.18%</span>">1 BTC = $105253.89</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_btc" class="inter">0.00000000</span> <small>BTC</small><br>
								<small class="opacity-50" id="profit_hour_btc_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_btc" class="inter">0.00000002</span> <small>BTC</small><br>
								<small class="opacity-50" id="profit_day_btc_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_btc" class="inter">0.00000057</span> <small>BTC</small><br>
								<small class="opacity-50" id="profit_month_btc_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_btc" class="inter">0.00000684</span> <small>BTC</small><br>
								<small class="opacity-50" id="profit_year_btc_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#ac6830">
								<div class="circle btc"></div>
								<div class="icons_curency btc"></div>
			</div>
			</div>



	</div>
				<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets/img/currencies/bch.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">Bitcoin Cash</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_bch fs-1 inter" style="font-variant-numeric: tabular-nums;">0.00000036</span> <small class="ml-2 mt-1">BCH</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_bch" class="mining_slider power_bch noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="bch">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="0.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="60.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-success'>+1.37%</span>">1 BCH = $389.193144</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_bch" class="inter">0.00000021</span> <small>BCH</small><br>
								<small class="opacity-50" id="profit_hour_bch_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_bch" class="inter">0.00000514</span> <small>BCH</small><br>
								<small class="opacity-50" id="profit_day_bch_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_bch" class="inter">0.00015417</span> <small>BCH</small><br>
								<small class="opacity-50" id="profit_month_bch_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_bch" class="inter">0.00184998</span> <small>BCH</small><br>
								<small class="opacity-50" id="profit_year_bch_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#1f6e3b">
								<div class="circle bch"></div>
								<div class="icons_curency bch"></div>
			</div>
			</div>



	</div>
										<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets/img/currencies/xec.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">eCash</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_xec fs-1 inter" style="font-variant-numeric: tabular-nums;">6.32364010</span> <small class="ml-2 mt-1">XEC</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_xec" class="mining_slider power_xec noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="xec">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="0.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="60.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-success'>+1.31%</span>">1 XEC = $0.000022</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_xec" class="inter">3.74363582</span> <small>XEC</small><br>
								<small class="opacity-50" id="profit_hour_xec_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_xec" class="inter">89.84725966</span> <small>XEC</small><br>
								<small class="opacity-50" id="profit_day_xec_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_xec" class="inter">2,695.41778976</span> <small>XEC</small><br>
								<small class="opacity-50" id="profit_month_xec_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_xec" class="inter">32,345.01347709</span> <small>XEC</small><br>
								<small class="opacity-50" id="profit_year_xec_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#">
								<div class="circle xec"></div>
								<div class="icons_curency xec"></div>
			</div>
			</div>



	</div>
														</div>
	
	</div>
			
<div class="tab-pane fade SCRYPT algorithm pb-4" id="algorithmSCRYPT" role="tabpanel" aria-labelledby="#tabAlgorithmSCRYPT">
			
	
	
	<input type="hidden" name="algorithm" value="SCRYPT">
	<input type="hidden" name="algorithm_unit" value="GH/s">

	<input type="hidden" name="available_power_warning" value="Use 100% of purchased power for maximum profit">
	<input type="hidden" name="spent_power_warning" value="Mining is stopped">
  
  <div class="row">
    <div class="col mb-4">
      <div class="card shadow-lg overflow-hidden wow fadeInUp animated" data-wow-duration=".7s" data-wow-delay="0s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0s; animation-name: fadeInUp;">
        <div class="card-body">
          <div class="row">
            <div class="col col-sm-8">
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="mb-4 pb-2 opacity-75">Your daily profit:</div>
                  <div class="lvl mt-5">
                    <div class="progress">
                      <div style="width:00%;"></div>
                    </div>
                    <div class="d-flex justify-content-between align-middle lvl-table">
                                          <div class="item ratio ratio-1x1 active" data-lvl="0">
                        <div>
                        <span class="text-success fs-4" style="top:-2.2rem;">1%</span>
                        <span>0 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="1">
                        <div>
                        <span>1.2%</span>
                        <span>1 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="2">
                        <div>
                        <span>1.5%</span>
                        <span>2 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="3">
                        <div>
                        <span>2%</span>
                        <span>3 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="4">
                        <div>
                        <span>2.2%</span>
                        <span>4 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="5">
                        <div>
                        <span>2.5%</span>
                        <span>5 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="6">
                        <div>
                        <span>3%</span>
                        <span>6 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="7">
                        <div>
                        <span>3.5%</span>
                        <span>7 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="8">
                        <div>
                        <span>4%</span>
                        <span>8 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="9">
                        <div>
                        <span>4.5%</span>
                        <span>9 Level</span>
                        </div>
                      </div>
                                          <div class="item ratio ratio-1x1" data-lvl="10">
                        <div>
                        <span>5%</span>
                        <span>10 Level</span>
                        </div>
                      </div>
                                        </div>
                  </div>
                </div>
                
                <div class="col">
                  <div>
                    <span class="opacity-75">Power in stock:</span><br><i class="lnil lnil-server-8 text-success" style="font-size:2rem;"></i> <span class="in_stock text-success inter" style="font-size:2rem;">2.00</span> <span class="text-success" style="font-size:1rem;">GH/s</span>
                  </div>
                  <div class="py-3 my-md-0 opacity-75">
                    Available power:<br><span class="available_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-alert-server"></i> 60% <small>(1.2 GH/s)</small></span>
                  </div>
                  <div class="opacity-75">
                    Power used:<br><span class="spent_power inter text-warning" style="font-size:2rem;width:100%;"><i class="lnil lnil-spinner-7 fa-spin"></i> 40% <small>(0.8 GH/s)</small></span>
                  </div>

                </div>
                <div class="col position-relative" style="z-index:10;">
                                    <div class="my-md-0">
                    <span class="opacity-75">Bonus daily profit:</span><br><span class="profit_daily text-success inter" style="font-size:2rem;width:100%;">+0%</span><br>
                    <small>For accumulated days without withdrawal</small>
                  </div>

                  <div class="py-4 my-md-0 opacity-75">
                    Buy 18.00 GH/s to earn 1.2% daily
                  </div>
                  <a href="/buy-power/" class="btn btn-primary">Buy hashrate</a>
                </div>
              </div>
            </div>
            <div class="col d-none d-sm-block text-end">
              <div class="server_img position-absolute top-0 end-0 me-5 mt-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    





<div class="row justify-content-center cur_array wow fadeInUp animated" data-wow-duration=".7s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.1s; animation-name: fadeInUp;">
											<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets\img\currencies\doge.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">Dogecoin</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_doge fs-1 inter" style="font-variant-numeric: tabular-nums;">0.00063684</span> <small class="ml-2 mt-1">DOGE</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_doge" class="mining_slider power_doge noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="doge">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="0.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="80.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-success'>+1.60%</span>">1 DOGE = $0.220924</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_doge" class="inter">0.00037720</span> <small>DOGE</small><br>
								<small class="opacity-50" id="profit_hour_doge_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_doge" class="inter">0.00905289</span> <small>DOGE</small><br>
								<small class="opacity-50" id="profit_day_doge_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_doge" class="inter">0.27158677</span> <small>DOGE</small><br>
								<small class="opacity-50" id="profit_month_doge_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_doge" class="inter">3.25904123</span> <small>DOGE</small><br>
								<small class="opacity-50" id="profit_year_doge_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#af8e2f">
								<div class="circle doge"></div>
								<div class="icons_curency doge"></div>
			</div>
			</div>



	</div>
								<div class="col-12 col-lg-6 pb-4">
		<div class="card shadow-lg">
			<div class="card-body card-mining">
				
        <div class="row justify-content-center align-items-center">
					<div class="col-12 d-flex flex-row">
						<img src="{{asset('')}}assets/img/currencies/ltc.png" style="height:4rem;width:4rem;" class="me-2">
            <div>
              <span class="fs-4 align-top text-uppercase">Litecoin</span>
              <br>
              <small>≈ $0.00</small>            </div>
					</div>

					<div class="col-12 text-center mt-3">
						<div class="profit_div">
						<span class="profit profit_ltc fs-1 inter" style="font-variant-numeric: tabular-nums;">0.00000150</span> <small class="ml-2 mt-1">LTC</small>
						</div>
					</div>
				</div>	
        
					
				<div class="row">
					<div class="col m-4">
						<div class="mining_slider_div">
							<div id="mining_slider_ltc" class="mining_slider power_ltc noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-curency="ltc">
								<input type="hidden" class="custom-slider-input" name="custom-slider-value" value="20.00">
							<div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.2, 1);"></div></div><div class="noUi-origin" style="transform: translate(-80%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="80.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div></div></div></div></div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col">
                        
            <small class="position-absolute end-0 me-3 top-0 mt-3 opacity-75" data-toggle="tooltip" data-bs-html="true" data-placement="top" data-bs-original-title="Change in 24 hours: <span class='text-danger'>-2.26%</span>">1 LTC = $93.552389</small>
						<div class="row">
							<div class="col fs-5 text-white">
								Your profit
							</div>
						</div>
						<div class="row calc text-white opacity-75">
							<div class="col-6">
								<small>per hour:</small><br><span id="profit_hour_ltc" class="inter">0.00000089</span> <small>LTC</small><br>
								<small class="opacity-50" id="profit_hour_ltc_usd">≈ $0.00</small>
							</div>
							<div class="col">
								<small>per day:</small><br><span id="profit_day_ltc" class="inter">0.00002138</span> <small>LTC</small><br>
								<small class="opacity-50" id="profit_day_ltc_usd">≈ $0.00</small>
							</div>
							<div class="col-6">
								<small>per month:</small><br><span id="profit_month_ltc" class="inter">0.00064135</span> <small>LTC</small><br>
								<small class="opacity-50" id="profit_month_ltc_usd">≈ $0.06</small>
							</div>
							<div class="col">
								<small>in year:</small><br><span id="profit_year_ltc" class="inter">0.00769622</span> <small>LTC</small><br>
								<small class="opacity-50" id="profit_year_ltc_usd">≈ $0.72</small>
							</div>
													</div>
					</div>
				</div>
				
				
				
				
				

				  <input type="hidden" name="color" value="#ababab">
								<div class="circle ltc"></div>
								<div class="icons_curency ltc"></div>
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
