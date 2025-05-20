<style>
    .button {
        cursor: pointer;
        font-size: 1.4rem;
        border-radius: 16px;
        border: none;
        padding: 2px;
        background: radial-gradient(circle 80px at 80% -10%, #ffffff, #181b1b);
        position: relative;
    }

    .button::after {
        content: "";
        position: absolute;
        width: 65%;
        height: 60%;
        border-radius: 120px;
        top: 0;
        right: 0;
        box-shadow: 0 0 20px #ffffff38;
        z-index: -1;
    }

    .blob1 {
        position: absolute;
        width: 70px;
        height: 70%;
        border-radius: 16px;
        bottom: 0;
        left: 0;
        background: radial-gradient(circle 60px at 0% 100%,
                #3fe9ff,
                #0000ff80,
                transparent);
        box-shadow: -10px 10px 30px #0051ff2d;
    }

    .inner {
        padding: 5px 25px;
        border-radius: 14px;
        color: #fff;
        z-index: 3;
        position: relative;
        background: radial-gradient(circle 80px at 80% -50%, #777777, #0f1111);
    }

    .inner::before {
        content: "";
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        border-radius: 14px;
        background: radial-gradient(circle 60px at 0% 100%,
                #00e1ff1a,
                #0000ff11,
                transparent);
        position: absolute;
    }

</style>
<div id="main-content" class="flex-grow-1 m-3">
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
        <div class="container-fluid">
            <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <i class="fas fa-bars"></i>
            </button>

            <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                <i class="fas fa-bars"></i>
            </button>

            <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">account</span>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item mb-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <li><a class="dropdown-item" href="?a=support"><i
                                    class="fas fa-headset fa-fw me-2"></i>Support</a></li>
                        <li><a class="dropdown-item" href="?a=edit_account"><i
                                    class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                        <li><a class="dropdown-item" href="?a=security"><i
                                    class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="?a=logout"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div class="top-video">
                <video class="top" src="{{asset('')}}assets/video/top.mp4" type="video/mp4" muted autoplay loop plays-inline
                    poster="video/poster.png"></video>
            </div> -->



    <div class="row mt-3">
        <!-- Account Security Card -->
        <!-- <div class="col-12 mb-4 security-notice">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-shield-alt me-2"></i>Security Notices</h4>
                        </div>
                        <div class="card-body">

                            <div class="alert alert-warning mb-0">
                                <h5>Two Factor Authentication Not Enabled</h5>
                                <p>Enhance your account security by activating Two Factor Authentication.</p>
                                <a href="?a=security" class="sbmt">Enable 2FA</a>
                            </div>
                        </div>
                    </div>
                </div> -->

        <?php
            
            $quantifiable_count = 0;
            $vip = 0;
            if ($balance >= 10 ) {
                $quantifiable_count = 3;
                $vip = 1;
            } 
            if ($balance >= 210  && $userDirect >= 5) {
                $quantifiable_count = 4;
                $vip = 2;
            } 
            if ($balance >= 510 && $userDirect >= 10) {
                $quantifiable_count = 6;
                $vip = 3;
            } 
            // dd($userDirect);
            ?>
        <div class="col-md-6 mb-4  account-overview">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>Trade Center</h4>
                </div>
                <div class="card-body">
                    <!-- Junior Agent Logo / Title -->
                    <h2 style="font-family: 'Arial Black', sans-serif; letter-spacing: 2px;">
                        <span style="color:rgb(255, 255, 255);">VIP{{ $vip }}</span>

                    </h2>


                    @php
                    $progress = $quantifiable_count > 0 ? ($todaysRoi / $quantifiable_count) * 100 : 0;
                    @endphp

                    <!-- Progress Bar -->
                    <div class="progress my-3"
                        style="height: 20px; border-radius: 50px; background-color: rgba(255,255,255,0.3);">
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $progress }}%; background:  #6e0daf; border-radius: 50px;"
                            aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <!-- Assigned Orders -->
                    <p class="mt-2" style="font-size: 16px;">Daily Assigned Trades:</p>
                    <h4><b>{{ $todaysRoi }}/{{ $quantifiable_count }}</b></h4>

                    <!-- Buttons -->





                    @if (Auth::user()->last_trade != null)

                    <?php
                                    
                                    $hourdiff = round((strtotime(date('Y-m-d H:i:s')) - strtotime(Auth::user()->last_trade)) / 3600);
                                    
                                    // echo $hourdiff;
                                    
                                    // echo $hourdiff;
                                    
                                    ?>


                    @if ($hourdiff >= 24)
                    <div class="btns d-flex justify-content-center mt-3 gap-2">
                        <a href="{{ route('user.tradeOn') }}" class="button"
                            style="display: block; width: 100%; max-width: 500px; text-decoration: none;">
                            <div class="blob1"></div>
                            <div class="blob2"></div>
                            <div class="inner"
                                style="background: radial-gradient(circle 80px at 80% -50%, #a020f0, #4b0082); text-align: center; width: 100%;">
                                Start Quantization
                            </div>
                        </a>
                    </div> @else
                    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>


                    <?php
                                        
                                        $date1 = Auth::user()->last_trade;
                                        $date1 = strtotime($date1);
                                        $date1 = strtotime(' + 24 hours', $date1);
                                        $new_date1 = date('Y-m-d H:i:s', $date1);
                                        
                                        //   echo $new_date1;
                                        
                                        ?>

                    <script>
                        // Set the date we're counting down to
                        timer = setInterval(function () {
                            countdownTimeStart();

                        }, 1000);


                        function countdownTimeStart() {

                            var countDownDate = new Date("{{ $new_date1 }}").getTime();

                            // Get todays date and time
                            // var now = new Date().getTime();
                            var now = new Date(new Date().toLocaleString('en-US', {
                                timeZone: 'Asia/Kolkata'
                            }))

                            // Find the distance between now an the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Output the result in an element with id="demo"



                            document.getElementById("tiles").innerHTML = "<span>" + hours + "h:</span><span>" +
                                minutes + "m:</span><span>" +
                                seconds + "s</span>";
                            //   $('#left_time').html('Hello');

                            // If the count down is over, write some text 
                            if (distance < 0) {
                                clearInterval(timer);
                                document.getElementById("tiles").innerHTML = "EXPIRED";
                            }

                        }

                    </script>



                    @if(!isset($_GET['trade']))


                    <div class="btns d-flex justify-content-center mt-3 gap-2">
                        <a class="button" style="display: block; width: 100%; max-width: 500px; text-decoration: none;">
                            <div class="blob1"></div>
                            <div class="blob2"></div>
                            <div class="inner"
                                style="background: radial-gradient(circle 80px at 80% -50%,rgb(82, 81, 82),rgb(82, 81, 82)); text-align: center; width: 100%;">
                                Next Quantization <span id="tiles"></span>
                            </div>
                        </a>
                    </div>
                    @endif


                    @endif
                    @else
                    <div class="btns d-flex justify-content-center mt-3 gap-2">
                        <a href="{{ route('user.tradeOn') }}" class="button"
                            style="display: block; width: 100%; max-width: 500px; text-decoration: none;">
                            <div class="blob1"></div>
                            <div class="blob2"></div>
                            <div class="inner"
                                style="background: radial-gradient(circle 80px at 80% -50%, #a020f0, #4b0082); text-align: center; width: 100%;">
                                Start Quantization
                            </div>
                        </a>
                    </div>


                    @endif


                    <?php
                                $status = false;
                                $trade = false;
                                
                                $u_id = Auth::user()->id;
                                if (isset($_GET['trade'])) {
                                    $trade = true;
                                    $trade_row = \DB::table('contract')->where('user_id', $u_id)->where('c_status', 1)->orderBy('created_at', 'DESC')->first();
                                    if (!$trade_row) {
                                        $status = true;
                                    }
                                    if ($status == true) {
                                        header('Location: dashboard?notrade');
                                        exit();
                                    }
                                }
                                
                                ?>

                    @if ($trade === true)
                    <div id="zscooProcess" class="quantify-execute mt-4"
                        style="display: block; width: 100%; max-width: 500px;">
                        <div class="process-box">
                            <h3 style="font-size: 16px;">@lang('Helix Fund Run Panel Process') <span
                                    class="spinner">⏳</span></h3>
                            <div id="stepsLog"></div>
                        </div>
                    </div>

                    <style>
                        .spinner {
                            animation: spin 1s linear infinite;
                            display: inline-block;
                            font-size: 18px;
                            margin-left: 5px;
                        }

                        @keyframes spin {
                            0% {
                                transform: rotate(0deg);
                            }

                            100% {
                                transform: rotate(360deg);
                            }
                        }

                        .process-box {
                            background: #222423;
                            padding: 20px 25px;
                            border-radius: 10px;
                            font-family: 'Segoe UI', sans-serif;
                            max-width: 450px;
                            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
                            margin: 30px auto;
                        }

                        #stepsLog p {
                            margin: 8px 0;
                            font-size: 14px;
                            color: #fff;
                            line-height: 1.4;
                        }

                        .quantify-execute {
                            margin-bottom: 80px;
                        }

                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', async () => {
                            const exchanges = ["BINANCE", "BITTREX", "KUCOIN", "HUOBI", "OKX"];
                            const coin = "{{ $trade_row->c_name ?? 'SOL' }}";
                            // Get random item from array
                            function getRandomExchange() {
                                return exchanges[Math.floor(Math.random() * exchanges.length)];
                            }
                            // Assign random exchanges
                            const buyExchange = getRandomExchange();
                            let sellExchange = getRandomExchange();

                            // Ensure buy and sell are not the same
                            while (sellExchange === buyExchange) {
                                sellExchange = getRandomExchange();
                            }

                            const steps = [
                                'Starting Helix Fund quantification',
                                'Start queuing...',
                                'Start capturing various exchange market prices',
                                `Start executing buy order ${coin} ${buyExchange}`,
                                `Start executing sell order ${coin} ${sellExchange}`,
                                'Start allocating commissions',
                                'The execution is completed and the commission distribution is successful'
                            ];

                            const stepsLog = document.getElementById('stepsLog');

                            for (let i = 0; i < steps.length; i++) {
                                await new Promise(resolve => setTimeout(resolve, 4000));
                                const p = document.createElement('p');
                                p.textContent = steps[i];
                                stepsLog.appendChild(p);
                            }

                            setTimeout(() => {
                                document.getElementById('zscooProcess').style.display = 'none';


                            }, 6000);

                            function closetrade() {
                                fetch("{{ route('user.close-trade') }}").then(response => response
                                        .json()) // Parse JSON response
                                    .then(data => {
                                        if (data.status) {
                                            const profit = data.profit ? ?
                                            "0.0000"; // fallback if no profit sent
                                            console.log(data);
                                            // Set the profit in the modal
                                            document.getElementById("profitAmount").textContent =
                                                `${profit} USDT`;

                                            // Show modal and overlay

                                            const popup = document.querySelector(".van-popup");
                                            popup.classList.add("show");

                                            // Show the popup by setting display to bloc


                                            setTimeout(() => {
                                                location
                                            .reload(); // ⬅️i this refreshes the page
                                            }, 3000);
                                            // Add the 'show' class to trigger transitions/animations (like Bootstrap modals)

                                            // Show execute button again
                                            $('.quantify-execute').css('display', 'block');



                                        } else {
                                            // exit
                                            $('.team-income').css('display', 'none')
                                        }
                                        // setTimeout(pollServer, 500000);
                                    })
                                    .catch((error) => {
                                        console.error("Error polling server:", {
                                            message: error.message,
                                            stack: error.stack,
                                            response: error.response,
                                        });
                                        // Retry polling after a delay (e.g., every 5 seconds)
                                        // 
                                    });

                            }
                            setTimeout(closetrade, 6000);


                        });

                    </script>
                    @endif









                    {{-- loader --}}




                </div>
            </div>
        </div>

        <!-- Popup Modal -->
        <div class="modal fade van-popup" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-white bg-dark rounded-4 p-4 position-relative text-center">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="position-relative mb-3">
                        <div class="bg-success bg-gradient rounded-circle mx-auto d-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white"
                                class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path
                                    d="M13.485 1.893a.75.75 0 0 1 1.06 1.06L6.56 11.939 1.453 6.828a.75.75 0 0 1 1.06-1.06l3.932 3.931L13.485 1.893z" />
                            </svg>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-1">Strategy Complete</h5>
                    <p class="mb-1">Congratulations To Get</p>
                    <h4 class="fw-bold mb-4" id="profitAmount">1.47773 USDT</h4>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-success px-4">View Order</a>
                        <a href="#" class="btn btn-success text-white px-4">Confirm</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Overview Card -->
        <div class="col-md-6 mb-4 account-overview">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0"><i class="fas fa-user me-2"></i>Account Information</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-user-circle me-2"></i>Username:</td>
                                    <td class="text-end">{{ $profile_data ? $profile_data->username : '' }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-calendar-alt me-2"></i>Activation Date:</td>
                                    <td class="text-end">{{ $profile_data ? $profile_data->jdate : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-clock me-2"></i>Last Access:</td>
                                    <td class="text-end">{{ $profile_data ? $profile_data->created_at : '' }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-link me-2"></i>Referral Link:</td>
                                    <td class="text-end">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="refLink"
                                                value="{{ asset('') }}register?ref={{ Auth::user()->username }}"
                                                readonly>
                                            <button class="sbmt" onclick="copyReferralLink()">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Financial Overview Card -->
        <div class="col-md-6 mb-4 account-overview">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>Financial Overview</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <!-- <tr>
                                            <td><i class="fas fa-wallet me-2"></i>Account Balance:</td>
                                            <td class="text-end">
                                                <h4 class="mb-1">$<b>{{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}  {{generalDetail()->cur_text}}</b></h4>
                                            </td>
                                        </tr> -->
                                <tr>
                                    <td><i class="fas fa-coins me-2"></i>Active Deposit:</td>
                                    <td class="text-end">
                                        $<b>{{ number_format(Auth::user()->Activeinvestment->sum('amount'), 2) }}
                                            {{generalDetail()->cur_text}}</b></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-hand-holding-usd me-2"></i>Earned Total:</td>
                                    <td class="text-end">
                                        $<b>{{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}
                                            {{generalDetail()->cur_text}}</b></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-hand-holding-usd me-2"></i>Available Balance:</td>
                                    <td class="text-end">
                                        $<b>{{ number_format(Auth::user()->available_balance(), 2) }}
                                            {{ generalDetail()->cur_text }}</b></td>
                                </tr>

                                <tr>
                                    <td><i class="fas fa-hourglass-half me-2"></i>Pending Withdrawal:</td>
                                    <td class="text-end">$<b>{{ number_format(Auth::user()->withdraw(), 2) }}
                                            {{generalDetail()->cur_text}}</b></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-money-bill-wave me-2"></i>withdrawtotal:</td>
                                    <td class="text-end">$<b>{{ number_format(Auth::user()->withdraw(), 2) }}
                                            {{generalDetail()->cur_text}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- Transaction History Card -->
        <div class="col-md-6 mb-4 account-overview">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0"><i class="fas fa-history me-2"></i>Recent Transactions</h4>
                </div>
                <div class="card-body">
                   <div class="row g-3">
                     @if (is_array($records) || $records)
                                    @foreach ($records as $value)
                <div class="col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h5 class="mb-1">{{ $value->type === 'contract' ? 'ORDER REVENUE' : ($value->type === 'investment' ? 'DEPOSIT' : strtoupper($value->type)) }}
</h5>
                       <div class="small" style="color: {{ in_array(strtolower($value->description), ['approved', 'active']) ? 'green' : 'inherit' }}">
    {{ strtolower($value->description) === 'approved' ? 'COMPLETED' : strtoupper($value->description) }}
    {{ $value->type === 'contract' ? '-USDT' : '' }}
</div>

                        </div>
                        <div class="text-end">
                            <div class="d-flex align-items-center justify-content-end">
                                <h4 class="mb-0 me-2">{{ number_format($value->amount, 2) }}</h4>
                                <img src="http://127.0.0.1:8000/assets/images/102.png" height="17">
                            </div>
                            <small>  {{ date('D, d M Y H:i:s', strtotime($value->date)) }}</small>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
               @endforeach
                                @else
                                    <p style="color: #000;">@lang('No bill history available.')</p>
                                @endif
            </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="offcanvas offcanvas-start text-white d-md-none" tabindex="-1" id="mobileMenu"
    aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="{{route('user.dashboard')}}" class="nav-link text-white">
                    <i class="fas fa-user fa-fw me-2"></i>Account
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.invest')}}" class="nav-link text-white">
                    <i class="fas fa-download fa-fw me-2"></i>Deposit
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.Withdraw')}}" class="nav-link text-white">
                    <i class="fas fa-upload fa-fw me-2"></i>Withdraw
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('user.DepositHistory')}}" class="nav-link text-white">
                    <i class="fas fa-history fa-fw me-2"></i>History
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.level-team')}}" class="nav-link text-white">
                    <i class="fas fa-users fa-fw me-2"></i>Referrals
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('user.ChangePass')}}" class="nav-link text-white">
                    <i class="fas fa-shield-alt fa-fw me-2"></i>Security
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.profile')}}" class="nav-link text-white">
                    <i class="fas fa-user-edit fa-fw me-2"></i>Edit Account
                </a>
            </li>
            <li class="nav-item mt-auto">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="nav-link text-warning" title="Logout" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-sign-out-alt fa-fw"></i><span class="sidebar-text ms-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>





<!---->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="{{asset('')}}assets/js/dash.js"></script>


<script>
    window.addEventListener('load', function () {
        // All resources (images, scripts, stylesheets, etc.) are loaded
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer) {
            // Add the 'hidden' class to trigger the fade-out animation
            preloaderContainer.classList.add('hidden');

            // Optional: If you want to completely remove the preloader from the DOM
            // after the transition, you can listen for the 'transitionend' event.
            preloaderContainer.addEventListener('transitionend', function () {
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(
                        preloaderContainer).opacity === '0') {
                    preloaderContainer.style.display =
                        'none'; // Or preloaderContainer.remove();
                }
            }, {
                once: true
            }); // {once: true} ensures the event listener is removed after it fires
        }

        if (content) {
            content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
            // If you used opacity for content:
            // content.style.opacity = '1';
            // content.style.visibility = 'visible';
        }
    });

    // Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
    // You might want to adjust the timeout duration
    setTimeout(function () {
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
            console.warn("Preloader timeout reached. Forcing hide.");
            preloaderContainer.classList.add('hidden');
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                .opacity === '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example

</script>
<script>
    function copyReferralLink() {
        const copyText = document.getElementById('refLink');
        navigator.clipboard.writeText(copyText.value).then(function () {
            alert("Link copied: " + copyText.value); // optional feedback
        }, function (err) {
            alert("Failed to copy link!");
        });
    }

</script>
</body>

</html>
