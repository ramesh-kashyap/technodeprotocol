
                          @include('layouts.mainsite.header')


<div id="home" class="pb-5 pb-lg-4">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-7 position-relative" style="z-index:1;">
        <h2
          class="wow fadeInUp inter fw-semibold m-0 mt-5 mt-md-0"
          data-wow-duration=".7s"
          data-wow-delay="0.1s"
            style="font-size:4rem;z-index:2;line-height: 1"
        >
          Cloud Mining
        </h2>
        <h3 class="wow fadeInUp inter fw-semibold my-5"
          data-wow-duration="1s"
          data-wow-delay="0.3s"
            style="font-size:2rem;"
        >
          Innovative cloud mining system
        </h3>
        <div class="mb-5 fs-5">
          <p class="wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0.5s">We offer everyone to earn from 1% to 5% daily forever on cloud mining. You buy the hashrate of our ASICs located in special data centers and receive profit forever.</p>
          <p class="wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0.7s">Do not miss your chance to join the promising crypto industry.</p>
        </div>
        
        <div class="btn-start-mining wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
          <div>
            <a
              class="btn btn-primary px-2 align-self-stretch align-content-center" href="signup/index.html"
            >
              Start mining
            </a>

            <div>
              <i class="ms-4 me-3 fa-duotone fa-solid fa-gift" style="font-size:2.5rem;"></i>
            </div>
            <div class="flex-shrink-1 text-start">
              And get bonus for registration
            </div>
            <div class="pe-3 fs-2 fw-semibold">$3</div>
          </div>
        </div>
        
      </div>
      <div class="col col-md-5 position-relative">
        <div class="d-none d-lg-block blue-page"></div>
        <img
          class="position-relative index-img wow fadeInRight"
          data-wow-duration="1s"
          data-wow-delay="0s" src="{{asset('')}}assets/img/index.png" style="max-width:40.625rem;z-index:1;top:0;" />
        
      </div>
    </div>
    <!-- row -->
  </div>
</div>


<section id="algorithms" class="pb-5">
  <div class="container">
    <div class="row">
      <div class="col title mb-5 wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">
        Available currencies for mining
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="card wow fadeInUp"
          data-wow-duration=".75s"
          data-wow-delay="0s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 text-center">SHA-256</div>
            <img src="{{asset('')}}assets/img/icon-btc.svg" class="img-btc d-block mx-auto my-5">
            <div class="roboto text-gray text-center">
              Bitcoin (BTC)<br>
              Bitcoin Cash (BCH)<br>
              eCash (XEC)
            </div>
          </div>
          <div class="mb-5 text-center">
            <a href="signup/index.html" class="link-arrow-right">Create Account</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 py-5 py-md-0">
        <div class="card mt-md-5 wow fadeInUp"
          data-wow-duration=".75s"
          data-wow-delay=".3s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 text-center">KHeavyHash</div>
            <img src="{{asset('')}}assets/img/icon-kaspa.png" class="d-block mx-auto my-5">
            <div class="roboto text-gray text-center">
              Kaspa (KAS)
            </div>
          </div>
          <div class="mb-5 text-center">
            <a href="signup/index.html" class="link-arrow-right">Create Account</a>
          </div>
        </div>
      </div>
      <div class="col py-md-0">
        <div class="card wow fadeInUp"
          data-wow-duration=".75s"
          data-wow-delay=".15s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 text-center">Scrypt</div>
            
            <img src="{{asset('')}}assets/img/icon-ltc.svg" class="d-block mx-auto my-5">
            <div class="roboto text-gray text-center">
              Dogecoin (DOGE)<br>
              Litecoin (LTC)
            </div>
          </div>
          <div class="mb-5 text-center">
            <a href="signup/index.html" class="link-arrow-right">Create Account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="marketing" class="mt-md-5 pt-md-5">
  <div class="container">
    <div class="row">
      <div class="col title my-5 pt-md-5 wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">
        Marketing
      </div>
      <div class="col title my-5 pt-5">
        <div class="position-relative">
          <div class="coin-ltc wow fadeInDown"
          data-wow-duration="1s"
          data-wow-delay="0.1s"></div>
          <div class="coin-eth wow fadeInDown"
          data-wow-duration="1s"
          data-wow-delay="0.5s"></div>
          <div class="coin-btc wow fadeInDown"
          data-wow-duration="1s"
          data-wow-delay="0.3s"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-lg">
        <div class="row">
      <div class="col col-xl-4 pb-5">
        <div class="card wow fadeInLeft"
          data-wow-duration=".75s"
          data-wow-delay="0s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 mb-4"><img src="{{asset('')}}assets/img/icon-btc.svg" class="mx-auto me-4">SHA-256</div>
            <div class="table-responsive">
              <table class="table" style="font-size:.85rem;">
                <thead>
                  <tr style="font-size:.75rem;">
                    <th scope="col">Investment amount</th>
                    <th scope="col" class="text-end text-center">Daily profit</th>
                    <th scope="col" class="text-end" style="width:45%">Purchased hashrate</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td scope="row">$0</td>
                    <td class="text-end text-center">1%</td>
                    <td class="text-end ps-0">From 0 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10</td>
                    <td class="text-end text-center">1.2%</td>
                    <td class="text-end ps-0">From 10 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$50</td>
                    <td class="text-end text-center">1.5%</td>
                    <td class="text-end ps-0">From 50 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$100</td>
                    <td class="text-end text-center">2%</td>
                    <td class="text-end ps-0">From 100 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$300</td>
                    <td class="text-end text-center">2.2%</td>
                    <td class="text-end ps-0">From 300 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$500</td>
                    <td class="text-end text-center">2.5%</td>
                    <td class="text-end ps-0">From 500 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$1000</td>
                    <td class="text-end text-center">3%</td>
                    <td class="text-end ps-0">From 1000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$2000</td>
                    <td class="text-end text-center">3.5%</td>
                    <td class="text-end ps-0">From 2000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$5000</td>
                    <td class="text-end text-center">4%</td>
                    <td class="text-end ps-0">From 5000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$7000</td>
                    <td class="text-end text-center">4.5%</td>
                    <td class="text-end ps-0">From 7000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10000</td>
                    <td class="text-end text-center">5%</td>
                    <td class="text-end ps-0">From 10000 TH/s</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col pb-5">
        <div class="card wow fadeIn"
          data-wow-duration="1.5s"
          data-wow-delay="0.2s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 mb-4"><img src="{{asset('')}}assets/img/icon-kaspa.png" class="mx-auto me-4">KHeavyHash</div>
            
            <div class="table-responsive">
              <table class="table" style="font-size:.85rem;">
                <thead>
                  <tr style="font-size:.75rem;">
                    <th scope="col">Investment amount</th>
                    <th scope="col" class="text-end text-center">Daily profit</th>
                    <th scope="col" class="text-end" style="width:47%">Purchased hashrate</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td scope="row">$0</td>
                    <td class="text-end text-center">1%</td>
                    <td class="text-end ps-0">From 0 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10</td>
                    <td class="text-end text-center">1.2%</td>
                    <td class="text-end ps-0">From 100 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$50</td>
                    <td class="text-end text-center">1.5%</td>
                    <td class="text-end ps-0">From 500 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$100</td>
                    <td class="text-end text-center">2%</td>
                    <td class="text-end ps-0">From 1000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$300</td>
                    <td class="text-end text-center">2.2%</td>
                    <td class="text-end ps-0">From 3000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$500</td>
                    <td class="text-end text-center">2.5%</td>
                    <td class="text-end ps-0">From 5000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$1000</td>
                    <td class="text-end text-center">3%</td>
                    <td class="text-end ps-0">From 10000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$2000</td>
                    <td class="text-end text-center">3.5%</td>
                    <td class="text-end ps-0">From 20000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$5000</td>
                    <td class="text-end text-center">4%</td>
                    <td class="text-end ps-0">From 50000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$7000</td>
                    <td class="text-end text-center">4.5%</td>
                    <td class="text-end ps-0">From 70000 TH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10000</td>
                    <td class="text-end text-center">5%</td>
                    <td class="text-end ps-0">From 100000 TH/s</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col pb-5">
        <div class="card wow fadeInRight"
          data-wow-duration=".75s"
          data-wow-delay="0s">
          <div class="card-body">
            <div class="inter fw-semibold fs-2 mb-4"><img src="{{asset('')}}assets/img/icon-ltc.svg" class="mx-auto me-4">Scrypt</div>
            
            <div class="table-responsive">
              <table class="table" style="font-size:.85rem;">
                <thead>
                  <tr style="font-size:.75rem;">
                    <th scope="col">Investment amount</th>
                    <th scope="col" class="text-end text-center">Daily profit</th>
                    <th scope="col" class="text-end" style="width:46%">Purchased hashrate</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td scope="row">$0</td>
                    <td class="text-end text-center">1%</td>
                    <td class="text-end ps-0">From 0 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10</td>
                    <td class="text-end text-center">1.2%</td>
                    <td class="text-end ps-0">From 20 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$50</td>
                    <td class="text-end text-center">1.5%</td>
                    <td class="text-end ps-0">From 100 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$100</td>
                    <td class="text-end text-center">2%</td>
                    <td class="text-end ps-0">From 200 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$300</td>
                    <td class="text-end text-center">2.2%</td>
                    <td class="text-end ps-0">From 600 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$500</td>
                    <td class="text-end text-center">2.5%</td>
                    <td class="text-end ps-0">From 1000 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$1000</td>
                    <td class="text-end text-center">3%</td>
                    <td class="text-end ps-0">From 2000 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$2000</td>
                    <td class="text-end text-center">3.5%</td>
                    <td class="text-end ps-0">From 4000 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$5000</td>
                    <td class="text-end text-center">4%</td>
                    <td class="text-end ps-0">From 10000 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$7000</td>
                    <td class="text-end text-center">4.5%</td>
                    <td class="text-end ps-0">From 14000 GH/s</td>
                  </tr>
                                    <tr>
                    <td scope="row">$10000</td>
                    <td class="text-end text-center">5%</td>
                    <td class="text-end ps-0">From 20000 GH/s</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="calculation" class="mt-5 py-5">
  <div class="container pb-5">
    <div class="row justify-content-center">
      <div class="col my-5 ">
        <h3 class="title wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">
          Mining calculator
        </h3>
      </div>
      <div class="col position-relative">
        <img src="{{asset('')}}assets/img/calc-coins.png" class="position-absolute wow fadeIn"
          data-wow-duration="2s"
          data-wow-delay="1s" style="top:-10rem;width:100%;min-width:30rem;max-width:41.25rem;">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-4 pb-5">
        <div
          class="card wow fadeInLeft"
          data-wow-duration=".75s"
          data-wow-delay="0s"
        >
          <div class="card-body">
            <form action="signup/index.html" method="post">
              <input type="hidden" name="action" value="calculation">
              <input type="hidden" name="invest_currency" value="usd.epc">
              <input type="hidden" name="currency" value="btc">

              <div class="row">
                <div class="col-12">
                  <div class="mb-2">Investment currency:</div>
                  <div class="dropdown d-grid dropdown-currency invest_currency" data-name="invest_currency">
                    <button class="btn btn-tp p-3 invest_currency d-flex align-items-center justify-content-between" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <div><img src="{{asset('')}}assets/img/currencies/usd.epc.png" width="25" class="me-2" />ePayCore</div> <span class="opacity-50">USD</span>
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="btc"><div><img src="{{asset('')}}assets/img/currencies/btc.png" width="25" class="me-2" />Bitcoin</div><span class="opacity-50">BTC</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="bch"><div><img src="{{asset('')}}assets/img/currencies/bch.png" width="25" class="me-2" />Bitcoin Cash</div><span class="opacity-50">BCH</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="bnb"><div><img src="{{asset('')}}assets/img/currencies/bnb.png" width="25" class="me-2" />BNB Coin</div><span class="opacity-50">BNB</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="dash"><div><img src="{{asset('')}}assets/img/currencies/dash.png" width="25" class="me-2" />Dash</div><span class="opacity-50">DASH</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="doge"><div><img src="{{asset('')}}assets/img/currencies/doge.png" width="25" class="me-2" />Dogecoin</div><span class="opacity-50">DOGE</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="xec"><div><img src="{{asset('')}}assets/img/currencies/xec.png" width="25" class="me-2" />eCash</div><span class="opacity-50">XEC</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="kas"><div><img src="{{asset('')}}assets/img/currencies/kas.png" width="25" class="me-2" />Kaspa</div><span class="opacity-50">KAS</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="ltc"><div><img src="{{asset('')}}assets/img/currencies/ltc.png" width="25" class="me-2" />Litecoin</div><span class="opacity-50">LTC</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="trx"><div><img src="{{asset('')}}assets/img/currencies/trx.png" width="25" class="me-2" />Tron</div><span class="opacity-50">TRX</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item active d-flex align-items-center justify-content-between" data-value="usd.epc"><div><img src="{{asset('')}}assets/img/currencies/usd.epc.png" width="25" class="me-2" />ePayCore</div><span class="opacity-50">USD</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="usdt.bep20"><div><img src="{{asset('')}}assets/img/currencies/usdt.bep20.png" width="25" class="me-2" />Tether BEP20</div><span class="opacity-50">USDT</span></div>
                      </li>
                                            <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="usdt.trc20"><div><img src="{{asset('')}}assets/img/currencies/usdt.trc20.png" width="25" class="me-2" />Tether TRC20</div><span class="opacity-50">USDT</span></div>
                      </li>
                                          </ul>
                  </div>
                </div>

                <div class="col-12 my-4">
                  <div class="mb-2">Investment amount:</div>
                  <input type="text" name="amount" class="form-control px-3 text-center inter" value="1000.00">
                  <div class="amount_slider_div my-4">
                    <div id="amount_slider" class="amount_slider">
                      <input type="hidden" class='custom-slider-input' name="custom-slider-value" value="1000">
                    </div>
                  </div>
                </div>

                <div class="col-12">

                  <div class="mb-2">Mining currency:</div>
                  <div class="dropdown d-grid" data-name="currency">
                    <button class="btn btn-tp p-3 currency d-flex align-items-center justify-content-between" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <div><img src="{{asset('')}}assets/img/currencies/btc.png" width="25" class="me-2" />Bitcoin</div><span class="opacity-50">BTC</span>
                    </button>
                    <ul class="dropdown-menu" style="width:100%;">
                                                                      <li>
                          <div class="dropdown-item active d-flex align-items-center justify-content-between" data-value="btc" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/btc.png" width="25" class="me-2" />Bitcoin</div><span class="opacity-50">BTC</span></div>
                        </li>
                                                                                              <li>
                          <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="bch" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/bch.png" width="25" class="me-2" />Bitcoin Cash</div><span class="opacity-50">BCH</span></div>
                        </li>
                                                                                              <li>
                          <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="doge" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/doge.png" width="25" class="me-2" />Dogecoin</div><span class="opacity-50">DOGE</span></div>
                        </li>
                                                                                              <li>
                          <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="xec" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/xec.png" width="25" class="me-2" />eCash</div><span class="opacity-50">XEC</span></div>
                        </li>
                                                                                              <li>
                          <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="kas" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/kas.png" width="25" class="me-2" />Kaspa</div><span class="opacity-50">KAS</span></div>
                        </li>
                                                                                              <li>
                          <div class="dropdown-item d-flex align-items-center justify-content-between" data-value="ltc" onclick="" href=""><div><img src="{{asset('')}}assets/img/currencies/ltc.png" width="25" class="me-2" />Litecoin</div><span class="opacity-50">LTC</span></div>
                        </li>
                                                                  </ul>
                  </div>
                </div>
                
                <div class="col-12 mt-4">
                  <div class="mb-2">Days without withdrawal:</div>
                  <input type="text" name="days" class="form-control px-3 text-center inter" value="100">
                  <div class="days_slider_div my-4">
                    <div id="days_slider" class="days_slider">
                      <input type="hidden" class='custom-slider-input' name="custom-slider-value" value="100">
                    </div>
                  </div>
                </div>
              
                  <input type="checkbox" name="bonus_check" value="1" checked="checked" class="d-none">
                            </div>
            </form>
          </div>
        
        </div>
      </div>
      <div class="col-12 col-md-8 pb-5">
        <div
          class="card wow fadeInRight position-static"
          data-wow-duration=".75s"
          data-wow-delay="0s"
          
        >
          <div class="card-body">
            <div class="row justify-content-center">
              
              <div class="col-12">
                <div class="row">
                  <div class="col-12 mb-5">
                    <div class="mb-4 pb-2">Daily profitability</div>
                    <!-- <div class="lvl mt-5">
                      <div class="progress">
                        <div style="width:30%;"></div>
                      </div>
                      <div class="d-flex justify-content-between align-middle lvl-table">
                                              <div class="item ratio ratio-1x1 active" data-lvl="0">
                          <div>
                          <span>1%</span>
                          <span>0 Level</span>
                          </div>
                        </div>
                                              <div class="item ratio ratio-1x1 active" data-lvl="1">
                          <div>
                          <span>1.2%</span>
                          <span>1 Level</span>
                          </div>
                        </div>
                                              <div class="item ratio ratio-1x1 active" data-lvl="2">
                          <div>
                          <span>1.5%</span>
                          <span>2 Level</span>
                          </div>
                        </div>
                                              <div class="item ratio ratio-1x1 active" data-lvl="3">
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
                    </div> -->
                  </div>

                  <div class="col-6 mb-5 text-center">
                    Price 1 <span class="hashrate_unit"></span>
                    <div class="counter text-primary price">
                      <span class="count">1</span><small class="text-center">usd</small>
                    </div>
                  </div>
                  <div class="col-6 mb-5 text-center">
                    Hashrate
                    <div class="counter text-primary hashrate">
                      <span class="count">100</span><small class="text-center">Gh/s</small>
                    </div>
                  </div>
                  
                  <div class="col-6 col-md-4 mb-5 text-center">
                    Hourly profit
                    <div class="counter text-primary profit_hourly"></div>
                  </div>
                  <div class="col-6 col-md-4 mb-5 text-center">
                    Daily profit
                    <div class="counter text-primary profit_daily"></div>
                  </div>
                  <div class="col-6 col-md-4 mb-5 text-center">
                    Weekly profit
                    <div class="counter text-primary profit_weekly"></div>
                  </div>
                  <div class="col-6 text-center">
                    Monthly profit
                    <div class="counter text-primary profit_monthly"></div>
                  </div>
                  <div class="col text-center">
                    Annual profit
                    <div class="counter text-primary profit_yearly"></div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!--====== TARIF PART ENDS ======-->


<section id="partners" class="position-relative py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mt-5 position-relative" style="z-index:2">
        <div
          class="pe-5 wow fadeInLeft"
          data-wow-duration=".75s"
          data-wow-delay="0s"
        >
          <h3 class="title">
            Invite friends and get rewards
          </h3>
          <p class="text my-5">Each user of the site is provided with a unique affiliate link, with which you can attract referrals. For each registration using such a link, the partner receives 0.05 TH/s for the SHA-256 algorithm, which is equal to $0.05. For each purchase of power by your referral, you receive a share of his purchased hashrate.</p>
          
          <a href="signup/index.html" class="btn btn-primary px-5 py-3">Become a partner</a>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-5">
        <div class="card mt-5 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay="0s" style="min-height:auto;">
          <div class="card-body d-flex my-2 align-items-center">
            <div>
              <div class="spin">5%</div>
            </div>
            <div class="ms-4">
              <div class="fs-5 inter">1 Level</div>
              <div>
              From the purchased power by level 1 referrals
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-4 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay=".15s" style="min-height:auto;">
          <div class="card-body d-flex my-2 align-items-center">
            <div>
              <div class="spin spin-2">5%</div>
            </div>
            <div class="ms-4">
              <div class="fs-5 inter">2 Level</div>
              <div>
              From the purchased power by level 2 referrals
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-4 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay=".3s" style="min-height:auto;">
          <div class="card-body d-flex my-2 align-items-center">
            <div>
              <div class="spin spin-3">5%</div>
            </div>
            <div class="ms-4">
              <div class="fs-5 inter">3 Level</div>
              <div>
              From the purchased power by level 3 referrals
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row -->
  </div>
</section>

<!--====== VIDEO COUNTER PART START ======-->
<section id="statistics" class="mb-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-12 position-relative">
        <h3 class="title position-relative mt-5 wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s" style="z-index:2">Statistics</h3>
        <img src="{{asset('')}}assets/img/index-stat.png" width="40%" class="position-absolute wow fadeIn"
          data-wow-duration="2s"
          data-wow-delay="1s" style="top:-13rem;left:15%">
      </div>
    
      <div class="col-6 col-md-3 mt-4 my-md-5 wow fadeInLeft"
          data-wow-duration=".5s"
          data-wow-delay=".2s">
        <div class="card">
          <div class="card-body ratio ratio-1x1">
            <div class="p-3 p-lg-4">
              <div class="position-relative">
              <div class="position-absolute top-0 end-0">
                                <i class="fa-duotone fa-solid fa-calendar-days" style="color:rgba(63, 171, 214, 1);font-size:3.125rem;"></i>
              </div>
            Days online
            </div>
            <div class="counter">{{ $settings->days_online }}</div>
                
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-3 mt-4 my-md-5 wow fadeInLeft"
          data-wow-duration=".5s"
          data-wow-delay="0s">
        <div class="card">
          <div class="card-body ratio ratio-1x1">
            <div class="p-3 p-lg-4">
              <div class="position-relative">
              <div class="position-absolute top-0 end-0">
                <img src="{{asset('')}}assets/img/icon-user-check.svg" width="50">
              </div>
            Users
            </div>
            <div class="counter">{{ $settings->users }}</div>
                
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 my-4 my-md-5 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay="0s">
        <div class="card">
          <div class="card-body ratio ratio-1x1">
            <div class="p-3 p-lg-4">
              <div class="position-relative">
              <div class="position-absolute top-0 end-0">
                <img src="{{asset('')}}assets/img/icon-inbox.svg" width="50">
              </div>
            Total deposits
            </div>
            <div class="counter">{{ $settings->total_deposit }}</div>
                
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 my-4 my-md-5 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay=".2s">
        <div class="card">
          <div class="card-body ratio ratio-1x1">
            <div class="p-3 p-lg-4">
              <div class="position-relative">
              <div class="position-absolute top-0 end-0">
                <img src="{{asset('')}}assets/img/icon-dollar.svg" width="50">
              </div>
            Total withdrawals
            </div>
            <div class="counter">{{$settings->total_withdraw}}</div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="statistics2" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col title position-relative my-5">
        <div class="wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">Hashrate sold</div>
        <img src="{{asset('')}}assets/img/index-stat-2.png" width="50%" class="position-absolute end-0 wow fadeIn"
          data-wow-duration="2s"
          data-wow-delay="1s" style="top:-15rem">
      </div>
    </div>
    <div class="row inter">
      <div class="col-12 col-md-6 mb-5 d-none d-md-block">
        <div class="card wow fadeInLeft"
          data-wow-duration=".5s"
          data-wow-delay="0s" style="min-height:100%;">
          <div class="card-body">
            <div class="fw-semibold fs-4"><img src="{{asset('')}}assets/img/icon-btc.svg" class="mx-auto me-4">SHA-256</div>
            <div class="counter text-primary">46,285 <small>TH/s</small></div>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6 mb-5">
        <div class="card mb-4 d-md-none wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay="0s">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div class="fw-semibold fs-4"><img src="{{asset('')}}assets/img/icon-btc.svg" class="me-4">SHA-256</div>
            <div class="counter fw-bold fs-3">46,285 <small>TH/s</small></div>
          </div>
        </div>
        <div class="card wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay=".15s">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div class="fw-semibold fs-4"><img src="{{asset('')}}assets/img/icon-kaspa.png" class="me-4">KHeavyHash</div>
            <div class="counter fw-bold fs-3">326,780 <small>TH/s</small></div>
          </div>
        </div>
        <div class="card mt-4 wow fadeInRight"
          data-wow-duration=".5s"
          data-wow-delay=".3s">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div class="fw-semibold fs-4"><img src="{{asset('')}}assets/img/icon-ltc.svg" class="me-4">Scrypt</div>
            <div class="counter fw-bold fs-3">81,578 <small>GH/s</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section id="statistics3" class="py-5">
  <div class="lt"></div>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12 col-md-6 mb-5">
        <div class="fs-2 mb-5 wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">Latest deposits</div>
        <div class="card overflow-hidden wow fadeInLeft"
          data-wow-duration=".75s"
          data-wow-delay="0s" style="min-height: auto;">
<table class="table table-lg table-striped mb-0">
  <thead>
    <tr>
      <th class="ps-2 ps-sm-4">Username</th>
      <th class="text-end">Amount</th>
            <th class="text-end pe-2 pe-sm-4">Date</th>
    </tr>
  </thead>
  <tbody>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">tunita87</div><div class="d-inline-block d-sm-none">tunit...</div></td>
      <td class="text-end">
                            0.04695740 LTC
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 07:45</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">skreetbus</div><div class="d-inline-block d-sm-none">skree...</div></td>
      <td class="text-end">
                            10.00000000 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 06:04</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">anbaby</div><div class="d-inline-block d-sm-none">anbab...</div></td>
      <td class="text-end">
                            10.00000000 TRX
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 04:04</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">shoeib68</div><div class="d-inline-block d-sm-none">shoei...</div></td>
      <td class="text-end">
                            0.01939922 BCH
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 03:35</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">frankiss-nyke</div><div class="d-inline-block d-sm-none">frank...</div></td>
      <td class="text-end">
                            59.56112870 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 01:38</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">frankiss-nyke</div><div class="d-inline-block d-sm-none">frank...</div></td>
      <td class="text-end">
                            20.44723680 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 01:00</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">denis198722</div><div class="d-inline-block d-sm-none">denis...</div></td>
      <td class="text-end">
                  10.00 USD
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 00:14</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">eduardo</div><div class="d-inline-block d-sm-none">eduar...</div></td>
      <td class="text-end">
                            59.42693616 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">19.05.2025 21:35</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">1lus10n</div><div class="d-inline-block d-sm-none">1lus1...</div></td>
      <td class="text-end">
                            0.00053287 BTC
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">19.05.2025 21:34</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">ak85</div><div class="d-inline-block d-sm-none">ak85...</div></td>
      <td class="text-end">
                  11.12 USD
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">19.05.2025 20:31</td>
    </tr>
      </tbody>
</table>
        </div>
      </div>
      
      
      <div class="col-12 col-md-6 mb-5">
        <div class="fs-2 mb-5 wow fadeInUp"
          data-wow-duration="1s"
          data-wow-delay="0s">Latest withdrawals</div>
      
        <div class="card overflow-hidden wow fadeInRight"
          data-wow-duration=".75s"
          data-wow-delay="0s" style="min-height: auto;">
<table class="table table-lg table-striped mb-0">
  <thead>
    <tr>
      <th class="ps-2 ps-sm-4">Username</th>
      <th class="text-end">Amount</th>
            <th class="text-end pe-2 pe-sm-4">Date</th>
    </tr>
  </thead>
  <tbody>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">danay</div><div class="d-inline-block d-sm-none">danay...</div></td>
      <td class="text-end">
                            33.00000000 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 09:46</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">sqmonitor</div><div class="d-inline-block d-sm-none">sqmon...</div></td>
      <td class="text-end">
                            10.00000000 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 09:22</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">dimakiev</div><div class="d-inline-block d-sm-none">dimak...</div></td>
      <td class="text-end">
                            634.13611467 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 09:12</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">dimakiev</div><div class="d-inline-block d-sm-none">dimak...</div></td>
      <td class="text-end">
                            50.00000000 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 08:18</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">matt</div><div class="d-inline-block d-sm-none">matt...</div></td>
      <td class="text-end">
                            0.01000000 BCH
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 07:37</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">ncs</div><div class="d-inline-block d-sm-none">ncs...</div></td>
      <td class="text-end">
                            0.37100000 LTC
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 05:02</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">ddoulove012</div><div class="d-inline-block d-sm-none">ddoul...</div></td>
      <td class="text-end">
                            27.59491146 TRX
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 03:55</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">amphy</div><div class="d-inline-block d-sm-none">amphy...</div></td>
      <td class="text-end">
                            0.13490044 LTC
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 02:53</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">tunita87</div><div class="d-inline-block d-sm-none">tunit...</div></td>
      <td class="text-end">
                            16.53521913 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 02:12</td>
    </tr>
        <tr>
      <td width="33%" class="ps-2 ps-sm-4"><div class="d-none d-sm-inline-block">naale</div><div class="d-inline-block d-sm-none">naale...</div></td>
      <td class="text-end">
                            59.60000000 DOGE
              </td>
      <td class="text-end pe-2 pe-sm-4" width="33%">20.05.2025 01:21</td>
    </tr>
      </tbody>
</table>
        </div>
      </div>
    </div>
  </div>
</section>
	 -->
</div>

@include('layouts.mainsite.footer')