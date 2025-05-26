<script type="text/javascript">
	
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
		
var course_min = {
		'btc': 106098.89471288,
		'bch': 388.24366371,
		'bnb': 646.44590652,
		'dash': 23.19308748,
		'doge': 0.22151156,
		'xec': 2.234E-5,
		'kas': 0.10780434,
		'ltc': 94.06996325,
		'trx': 0.27335507,
		'usd.epc': 1,
		'usdt.bep20': 1.00101,
		'usdt.trc20': 1.00101,
	};
var course = {
		'btc': 106098.89471288,
		'bch': 388.24366371,
		'bnb': 646.44590652,
		'dash': 23.19308748,
		'doge': 0.22151156,
		'xec': 2.234E-5,
		'kas': 0.10780434,
		'ltc': 94.06996325,
		'trx': 0.27335507,
		'usd.epc': 1,
		'usdt.bep20': 1.00101,
		'usdt.trc20': 1.00101,
	};
$(function() {

 
});
</script>
<div id="withdraw-page" class="account withdraw-page py-lg-5">

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
      
      <div class="col-12 pb-5">
        <div class="card mb-4 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".1s">
          <div class="card-body pb-5">
<div class="d-flex justify-content-center align-items-center" >
  <h2>Withdraw</h2>
</div>

			
			<div class="tab-content" id="balance-tabContent">
							<div class="tab-pane fade show active" id="balance-btc" role="tabpanel" aria-labelledby="balance-btc-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentbtc">
								<div class="tab-pane fade deposit show active" id="replenishbtc" role="tabpanel" aria-labelledby="replenish-tabbtc">
									<form action="{{ route('user.Withdraw-Request') }}" method="post" class="withdraw" data-curency="btc">
									        {{ csrf_field() }}

									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_btc" name="amount" value="0" placeholder="Enter Amount">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 0.0005 BTC</small>
											<div class="form-group mt-4">
  <select class="form-control wallet inter" id="wallet_btc" name="PSys">
    <option class="form2" value="USDT.BEP20">USDT.BEP20</option>
    <option  class="form2"value="USDT.TRC20">USDT.TRC20</option>
  </select>
</div>

											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_btc" name="walletAddress" value="{{Auth::user()->usdtBep20}}"  readonly placeholder="0">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="btc">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="btc">
										</div>
									</div>
								</form>
								</div>
								    @include('partials.notify')

								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-bch" role="tabpanel" aria-labelledby="balance-bch-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentbch">
								<div class="tab-pane fade deposit show active" id="replenishbch" role="tabpanel" aria-labelledby="replenish-tabbch">
									<form action="" method="post" class="withdraw" data-curency="bch">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_bch" name="amount" value="0.00000457" placeholder="Amount BCH">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 0.01 BCH</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_bch" name="wallet" placeholder="BCH withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="bch">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="bch">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-bnb" role="tabpanel" aria-labelledby="balance-bnb-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentbnb">
								<div class="tab-pane fade deposit show active" id="replenishbnb" role="tabpanel" aria-labelledby="replenish-tabbnb">
									<form action="" method="post" class="withdraw" data-curency="bnb">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_bnb" name="amount" value="" placeholder="Amount BNB">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 0.005 BNB<br>Only BSC (BEP20) network is supported!</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_bnb" name="wallet" placeholder="BNB withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="bnb">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="bnb">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-dash" role="tabpanel" aria-labelledby="balance-dash-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentdash">
								<div class="tab-pane fade deposit show active" id="replenishdash" role="tabpanel" aria-labelledby="replenish-tabdash">
									<form action="" method="post" class="withdraw" data-curency="dash">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_dash" name="amount" value="" placeholder="Amount DASH">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 0.05 DASH</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_dash" name="wallet" placeholder="DASH withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="dash">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="dash">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-doge" role="tabpanel" aria-labelledby="balance-doge-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentdoge">
								<div class="tab-pane fade deposit show active" id="replenishdoge" role="tabpanel" aria-labelledby="replenish-tabdoge">
									<form action="" method="post" class="withdraw" data-curency="doge">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_doge" name="amount" value="0.00801454" placeholder="Amount DOGE">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 10 DOGE</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_doge" name="wallet" placeholder="DOGE withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="doge">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="doge">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-xec" role="tabpanel" aria-labelledby="balance-xec-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentxec">
								<div class="tab-pane fade deposit show active" id="replenishxec" role="tabpanel" aria-labelledby="replenish-tabxec">
									<form action="" method="post" class="withdraw" data-curency="xec">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_xec" name="amount" value="79.38492390" placeholder="Amount XEC">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 100000 XEC</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_xec" name="wallet" placeholder="XEC withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="xec">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="xec">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-kas" role="tabpanel" aria-labelledby="balance-kas-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentkas">
								<div class="tab-pane fade deposit show active" id="replenishkas" role="tabpanel" aria-labelledby="replenish-tabkas">
									<form action="" method="post" class="withdraw" data-curency="kas">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_kas" name="amount" value="0.01641805" placeholder="Amount KAS">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 50 KAS</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_kas" name="wallet" placeholder="KAS withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="kas">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="kas">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-ltc" role="tabpanel" aria-labelledby="balance-ltc-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentltc">
								<div class="tab-pane fade deposit show active" id="replenishltc" role="tabpanel" aria-labelledby="replenish-tabltc">
									<form action="" method="post" class="withdraw" data-curency="ltc">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_ltc" name="amount" value="0.00001886" placeholder="Amount LTC">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 0.03 LTC</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_ltc" name="wallet" placeholder="LTC withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="ltc">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="ltc">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-trx" role="tabpanel" aria-labelledby="balance-trx-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContenttrx">
								<div class="tab-pane fade deposit show active" id="replenishtrx" role="tabpanel" aria-labelledby="replenish-tabtrx">
									<form action="" method="post" class="withdraw" data-curency="trx">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_trx" name="amount" value="" placeholder="Amount TRX">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 10 TRX</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_trx" name="wallet" placeholder="TRX withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="trx">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="trx">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-usd-epc" role="tabpanel" aria-labelledby="balance-usd-epc-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentusd.epc">
								<div class="tab-pane fade deposit show active" id="replenishusd.epc" role="tabpanel" aria-labelledby="replenish-tabusd.epc">
									<form action="" method="post" class="withdraw" data-curency="usd.epc">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_usd.epc" name="amount" value="" placeholder="Amount USD.EPC">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 1 USD.EPC</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_usd.epc" name="wallet" placeholder="USD.EPC withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="usd.epc">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="usd.epc">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-usdt-bep20" role="tabpanel" aria-labelledby="balance-usdt-bep20-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentusdt.bep20">
								<div class="tab-pane fade deposit show active" id="replenishusdt.bep20" role="tabpanel" aria-labelledby="replenish-tabusdt.bep20">
									<form action="" method="post" class="withdraw" data-curency="usdt.bep20">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_usdt.bep20" name="amount" value="" placeholder="Amount USDT.BEP20">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 5 USDT.BEP20</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_usdt.bep20" name="wallet" placeholder="USDT.BEP20 withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="usdt.bep20">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="usdt.bep20">
										</div>
									</div>
								</form>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
							<div class="tab-pane fade" id="balance-usdt-trc20" role="tabpanel" aria-labelledby="balance-usdt-trc20-tab">
					
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-6 col-lg-4 mt-5">
							<div class="tab-content" id="index-tabContentusdt.trc20">
								<div class="tab-pane fade deposit show active" id="replenishusdt.trc20" role="tabpanel" aria-labelledby="replenish-tabusdt.trc20">
									<form action="" method="post" class="withdraw" data-curency="usdt.trc20">
									
									<div class="row justify-content-center align-items-center">
											
                    <div class="col-12">
                      <div class="input-group input-group-lg">
                        <input type="text"  class="form-control amount inter" id="amount_usdt.trc20" name="amount" value="" placeholder="Amount USDT.TRC20">
                      </div>
                      <small class="d-block mt-2">Minimum withdraw of: 10 USDT.TRC20</small>
											<div class="form-group mt-4">
                        <input type="text"  class="form-control wallet inter" id="wallet_usdt.trc20" name="wallet" placeholder="USDT.TRC20 withdrawal address">
											</div>
                      <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-primary go_pay_usd" data-curency="usdt.trc20">Withdraw</button>
                      </div>

											<input type="hidden" name="curency" value="usdt.trc20">
										</div>
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
	
	</div>
</div>
		
		
</div>
</div>	
</div>
<style>
	select.form-control {
  height: 45px;
  border-radius: 5px;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(4, 147, 202, 0.5);
    background-color: transparent;
}

</style>