<!-- Noty.js CSS + JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.2.0-beta/noty.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.2.0-beta/noty.min.js"></script>

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
		'btc': 97610.98313585,
		'bch': 357.1841706132,
		'bnb': 594.7302339984,
		'dash': 21.3376404816,
		'doge': 0.2037906352,
		'xec': 2.05528E-5,
		'kas': 0.0991799928,
		'ltc': 86.54436619,
		'trx': 0.2514866644,
		'usd.epc': 0.92,
		'usdt.bep20': 0.9209292,
		'usdt.trc20': 0.9209292,
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
var exchange_course = 8;
	
var copyCode = {};
var activeTab = 0;

$(function() {
	
	clipboard_create('btc');
	clipboard_create('bch');
	clipboard_create('bnb');
	clipboard_create('dash');
	clipboard_create('doge');
	clipboard_create('xec');
	clipboard_create('kas');
	clipboard_create('ltc');
	clipboard_create('trx');
	clipboard_create('usd.epc');
	clipboard_create('usdt.bep20');
	clipboard_create('usdt.trc20');
	clipboard_create('dest_tag_xrp');
	clipboard_create('dest_tag_bnb');
 
});
</script>

<div id="deposit" class="account deposit py-lg-5">

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
  <h2>Deposit</h2>
</div>
        <div class="tab-content" id="balance-tabContent">
          
                    <div class="tab-pane fade show active" id="balance-btc" role="tabpanel" aria-labelledby="balance-btc-tab">

            <div class="row justify-content-center align-items-center">
              <div class="col-12 form_deposit">
                                <form action="" method="post" data-curency="btc">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-sm-6 col-lg-4 pt-5 pb-4">
                                            
                      <div class="qrcode text-center">
 <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode($data['address_in']) }}" alt="QR Code" style="max-width: 200px;">                    </div>
<div class="mt-3 text-center text-muted">
    <strong>Minimum deposit:</strong> 0.0005 BTC
  </div>                      </div>
                    </div>


                   <div class="col-12 text-center wallet">
  <!-- Hidden input (not required for copying in this case, but kept if needed) -->
  <input type="text" id="wallet_btc_input" value="bc1p8naytpxe2npqt4h75ekushn48esq72vzm8dh5qjjdtdguzdl3nvskpk5j5" style="width:1px;height:0;padding:0;border:0;">
  
  <!-- Another hidden input (not used, but kept) -->
  <input type="text" id="walletAddressInput" value="{{ $data['address_in'] ?? '' }}" style="position: absolute; left: -9999px;">

  <!-- Visible wallet address -->
  <div id="walletAddressText" class="d-inline-block inter pointer mb-2">
    {{ $data['address_in'] ?? 'Address not found' }}
  </div>

  <!-- Copy icon -->
  <span onclick="copyWalletAddress()" class="duplicate pointer"></span>
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
<script>
  function copyWalletAddress() {
    const walletText = document.getElementById("walletAddressText").innerText;

    navigator.clipboard.writeText(walletText).then(() => {
      new Noty({
        type: 'success',
        text: '<i class="fal fa-check"></i> Wallet address copied!',
        timeout: 3000,
        progressBar: true,
        theme: 'relax',
        layout: 'topRight',
      }).show();
    }).catch(() => {
      new Noty({
        type: 'error',
        text: '<i class="fal fa-times"></i> Failed to copy.',
        timeout: 3000,
        progressBar: true,
        theme: 'relax',
        layout: 'topRight',
      }).show();
    });
  }
</script>

