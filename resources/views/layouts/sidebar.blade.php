@if (Auth::user()->type == 'admin')
    <div id="sidebar" class="app-sidebar">
        <!-- BEGIN scrollbar -->
        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-header">Navigation</div>
                <div class="menu-item active">
                    <a href="{{ route('home') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('users') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">User</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('gateways') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">Gateway</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('balance') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">Balance</span>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-cart"></i>
                        </span>
                        <span class="menu-text">Settings</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{ route('service') }}" class="menu-link">
                                <span class="menu-text">Service</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('paymentMethod') }}" class="menu-link">
                                <span class="menu-text">Payment Method</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('orderHistory') }}" class="menu-link">
                                <span class="menu-text">Order History</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END scrollbar -->
    </div>
@endif

@if (Auth::user()->type == 'user')
    <div id="sidebar" class="app-sidebar">
        <!-- BEGIN scrollbar -->
        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-header">Navigation</div>
                <div class="menu-item active">
                    <a href="{{ route('home') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">Dashboard XS</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('order') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">Order</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('orderHistory') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">Order History</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('myProfile') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">My Profile</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('topup') }}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">TopUp</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- END scrollbar -->
    </div>
@endif
