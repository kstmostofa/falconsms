<div id="header" class="app-header">
            <!-- BEGIN desktop-toggler -->
            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
                    data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- BEGIN desktop-toggler -->

            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
                    data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <a href="#" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme width-">FD</span>
                    </span>
                    <span class="brand-text">DYNAMIC PORTAL</span>
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="/assets/img/user/profile.jpg" alt="Profile" height="60" />
                        </div>
                        <div class="menu-text d-sm-block d-none">{{ Auth::user()->email }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">LOGOUT <i
                                class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
