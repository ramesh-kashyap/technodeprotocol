 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 w-100">
    <li class="nav-item">
        <a href="{{route('user.dashboard')}}">Account</a>
    </li>
    <li class="nav-item">
        <a href="{{route('user.invest')}}">Top Up</a>
    </li>
    <li class="nav-item">
        <a href="{{route('user.deposit')}}">Deposit</a>
    </li>
    <li class="nav-item">
        <a href="{{route('user.Withdraw')}}">Withdraw</a>
    </li>
    <li class="nav-item">
        <a href="{{route('user.level-team')}}">Partners</a>
    </li>
    <li class="nav-item">
        <a href="{{route('user.DepositHistory')}}">Transaction</a>
    </li>

    <li class="nav-item ms-auto">
    <form method="POST" action="{{ route('logout') }}" style="margin-top: 17px; font-size: 17px;">
        @csrf
        <button type="submit" class="nav-link" style="background: none; border: none; display: flex; align-items: center; gap: 5px;">
            <i class="fas fa-sign-out-alt" title="Logout"></i>
            <span>Logout</span>
        </button>
    </form>
</li>


</ul>

              </div>