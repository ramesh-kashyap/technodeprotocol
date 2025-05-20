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

            <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block"> Level Income</span>

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



    <script language=javascript>
        function go(p) {
            document.opts.page.value = p;
            document.opts.submit();
        }

    </script>


    <div class="card mt-3 mb-4">
        <div class="card-header">
            <h3>Filter Transactions</h3>
        </div>
        <div class="card-body">
            <form method=post name=opts><input type="hidden" name="form_id" value="17471373813072"><input type="hidden"
                    name="form_token" value="093f914d8d95a4a85b1344f0ce4e2fdb">
                <input type=hidden name=a value=history>
                <input type=hidden name=page value=1>

                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="form-group">
  <label class="form-label">Transaction Type</label>
    <select class="form-control" onchange="if(this.value) window.location.href=this.value;">
    <option style="background-color: #1f1f1f;" value="{{ route('user.DepositHistory') }}" 
        {{ Request::routeIs('user.DepositHistory') ? 'selected' : '' }}>Deposit</option>

    <option style="background-color: #1f1f1f;" value="{{ route('user.Withdraw-History') }}" 
        {{ Request::routeIs('user.Withdraw-History') ? 'selected' : '' }}>Withdrawal</option>

    <option style="background-color: #1f1f1f;" value="{{ route('user.level-income') }}" 
        {{ Request::routeIs('user.level-income') ? 'selected' : '' }}>Level Income</option>

    <option style="background-color: #1f1f1f;" value="{{ route('user.roi-bonus') }}" 
        {{ Request::routeIs('user.roi-bonus') ? 'selected' : '' }}>Trading Income</option>

    <option style="background-color: #1f1f1f;" value="{{ route('user.reward-bonus') }}" 
        {{ Request::routeIs('user.reward-bonus') ? 'selected' : '' }}>Direct Income</option> 
           <option style="background-color: #1f1f1f;" value="{{ route('user.activitiesBonus') }}" 
        {{ Request::routeIs('user.activitiesBonus') ? 'selected' : '' }}>Rank & Reward Income</option>

    <option style="background-color: #1f1f1f;" value="{{ route('user.dailyIncentive') }}" 
        {{ Request::routeIs('user.dailyIncentive') ? 'selected' : '' }}>Royalty Income</option>  
</select>
</div>

<!-- 
                        <div class="form-group mt-3">
                            <label class="form-label">Currency</label>
                            <select name=ec class="form-control">
                                <option value=-1>All eCurrencies</option>
                                <option value=48>Bitcoin</option>
                                <option value=68>Litecoin</option>
                                <option value=85>Tron</option>
                                <option value=92>Tether TRC20</option>
                                <option value=102>Tether BEP20</option>
                            </select>
                        </div> -->
                    </div>

                    <!-- <div class="col-md-12">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">From</label>
                                <div class="d-flex gap-2">
                                    <select name=month_from class="form-control">
                                        <option value=1>Jan</option>
                                        <option value=2>Feb</option>
                                        <option value=3>Mar</option>
                                        <option value=4>Apr</option>
                                        <option value=5 selected>May</option>
                                        <option value=6>Jun</option>
                                        <option value=7>Jul</option>
                                        <option value=8>Aug</option>
                                        <option value=9>Sep</option>
                                        <option value=10>Oct</option>
                                        <option value=11>Nov</option>
                                        <option value=12>Dec</option>
                                    </select>
                                    <select name=day_from class="form-control">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                        <option value=6>6</option>
                                        <option value=7>7</option>
                                        <option value=8>8</option>
                                        <option value=9>9</option>
                                        <option value=10>10</option>
                                        <option value=11>11</option>
                                        <option value=12 selected>12</option>
                                        <option value=13>13</option>
                                        <option value=14>14</option>
                                        <option value=15>15</option>
                                        <option value=16>16</option>
                                        <option value=17>17</option>
                                        <option value=18>18</option>
                                        <option value=19>19</option>
                                        <option value=20>20</option>
                                        <option value=21>21</option>
                                        <option value=22>22</option>
                                        <option value=23>23</option>
                                        <option value=24>24</option>
                                        <option value=25>25</option>
                                        <option value=26>26</option>
                                        <option value=27>27</option>
                                        <option value=28>28</option>
                                        <option value=29>29</option>
                                        <option value=30>30</option>
                                        <option value=31>31</option>
                                    </select>
                                    <select name=year_from class="form-control">
                                        <option value=2025 selected>2025</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">To</label>
                                <div class="d-flex gap-2">
                                    <select name=month_to class="form-control">
                                        <option value=1>Jan</option>
                                        <option value=2>Feb</option>
                                        <option value=3>Mar</option>
                                        <option value=4>Apr</option>
                                        <option value=5 selected>May</option>
                                        <option value=6>Jun</option>
                                        <option value=7>Jul</option>
                                        <option value=8>Aug</option>
                                        <option value=9>Sep</option>
                                        <option value=10>Oct</option>
                                        <option value=11>Nov</option>
                                        <option value=12>Dec</option>
                                    </select>
                                    <select name=day_to class="form-control">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=4>4</option>
                                        <option value=5>5</option>
                                        <option value=6>6</option>
                                        <option value=7>7</option>
                                        <option value=8>8</option>
                                        <option value=9>9</option>
                                        <option value=10>10</option>
                                        <option value=11>11</option>
                                        <option value=12>12</option>
                                        <option value=13 selected>13</option>
                                        <option value=14>14</option>
                                        <option value=15>15</option>
                                        <option value=16>16</option>
                                        <option value=17>17</option>
                                        <option value=18>18</option>
                                        <option value=19>19</option>
                                        <option value=20>20</option>
                                        <option value=21>21</option>
                                        <option value=22>22</option>
                                        <option value=23>23</option>
                                        <option value=24>24</option>
                                        <option value=25>25</option>
                                        <option value=26>26</option>
                                        <option value=27>27</option>
                                        <option value=28>28</option>
                                        <option value=29>29</option>
                                        <option value=30>30</option>
                                        <option value=31>31</option>
                                    </select>
                                    <select name=year_to class="form-control">
                                        <option value=2025 selected>2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-12">
                        <label class="form-label d-block">&nbsp;</label>
                        <button type="submit" class="sbmt w-100">Filter</button>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
<div class="d-flex justify-content-between align-items-center mb-3">

    <form action="{{ route('user.level-income') }}" method="GET" class="d-flex ms-auto" style="width: 300px;">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
</div>
    <div class="row g-3">
    @forelse($level_income as $income)
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h5 class="mb-1">Level Income</h5>
                            <div class="small">User ID: {{ $income->rname }}</div>
                        </div>
                        <div class="text-end">
                            <div class="d-flex align-items-center justify-content-end">
                                <h4 class="mb-0 me-2">${{ number_format($income->comm, 2) }}</h4>
                                <img src="{{ asset('assets/images/102.png') }}" height="17">
                            </div>
                            <small>{{ \Carbon\Carbon::parse($income->created_at)->format('M-d-Y h:i:s A') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
                No Level Income data found.
        </div>
    @endforelse
</div>


    {{-- Custom Pagination --}}
    @if ($level_income->lastPage() > 1)
    <div class="pagination justify-content-center mt-4">
        <ul class="pagination">

            {{-- Previous Page Link --}}
            <li class="page-item {{ $level_income->onFirstPage() ? 'disabled' : '' }}">
                <a class="prev page-link" href="{{ $level_income->previousPageUrl() ?? '#' }}">&lt;&lt;</a>
            </li>

            {{-- Page Number Links --}}
            @for ($i = 1; $i <= $level_income->lastPage(); $i++)
                <li class="page-item {{ $level_income->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $level_income->url($i) }}">{{ $i }}</a>
                </li>
                @endfor

                {{-- Next Page Link --}}
                <li class="page-item {{ $level_income->currentPage() == $level_income->lastPage() ? 'disabled' : '' }}">
                    <a class="next page-link" href="{{ $level_income->nextPageUrl() ?? '#' }}">&gt;&gt;</a>
                </li>

        </ul>
    </div>
    @endif


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
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-warning" title="Logout" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="fas fa-sign-out-alt fa-fw"></i><span class="sidebar-text ms-2">Logout</span>
                    </a>
                </li>
                </ul>
            </div>
</div>
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
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                    .opacity === '0') {
                    preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
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
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity ===
                '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example

</script>

</body>

</html>
