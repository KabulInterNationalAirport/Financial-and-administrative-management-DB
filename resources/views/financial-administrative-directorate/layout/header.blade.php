<body class="app sidebar-mini rtl">
    <!-- SWITCHER -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto mt-2">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto mt-2">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Bg-Image Style</h4>
                            <div class="skin-body switch_section">
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img4" href="javascript:void(0);"><img
                                            src="assets/images/photos/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch8"
                                                id="myonoffswitch22" class="onoffswitch2-checkbox" checked>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch8"
                                                id="myonoffswitch23" class="onoffswitch2-checkbox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft  header-styles">
                            <h4>Header Styles Mode</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Light Header</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="background1" class="onoffswitch2-checkbox" checked>
                                            <label for="background1" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="background3" class="onoffswitch2-checkbox">
                                            <label for="background3" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft  menu-styles">
                            <h4>Leftmenu Styles Mode</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Light Menu</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="background4" class="onoffswitch2-checkbox">
                                            <label for="background4" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="background6" class="onoffswitch2-checkbox" checked>
                                            <label for="background6" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block" id="resetAll" type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="page-main">
            <!-- APP-HEADER -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">

                        <div class="mt-0">
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search"
                                        placeholder="{{ __('layout-Financial.search') }}..." aria-label="Search"
                                        tabindex="1">
                                    <button class="btn btn-primary-color">
                                        <i class="feather feather-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div><!-- SEARCH -->
                        <div class="d-flex order-lg-2 my-auto ms-auto">
                            <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto"
                                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                            </button>
                            <div
                                class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex ms-auto">
                                        <a class="nav-link  icon p-0 nav-link-lg d-lg-none navsearch"
                                            href="javascript:void(0);" data-bs-toggle="search">
                                            <i class="feather feather-search search-icon header-icon"></i>
                                        </a>
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        &nbsp;&nbsp;
                                        <div class="dropdown ">
                                            <a class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-language"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                                <ul class="list-group">
                                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li>
                                                            <a class="list-group-item" rel="alternate"
                                                                hreflang="{{ $localeCode }}"
                                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;
                                        <div class="dropdown header-fullscreen">
                                            <a class="nav-link icon full-screen-link">
                                                <i
                                                    class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
                                                <i
                                                    class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown profile-dropdown">
                                            <a href="javascript:void(0);" class="nav-link pe-1 ps-0 leading-none"
                                                data-bs-toggle="dropdown">
                                                <span>
                                                    <img src="assets/images/users/16.jpg" alt="img"
                                                        class="avatar avatar-md bradius">
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                                <div class="p-3 text-center border-bottom">
                                                    <a href="profile.html"
                                                        class="text-center user pb-0 font-weight-bold">Abdul Saboor
                                                        Hemat</a>
                                                    <p class="text-center user-semi-title">Manager of system developmet
                                                    </p>
                                                </div>
                                                <a class="dropdown-item d-flex" href="profile.html">
                                                    <i class="feather feather-user me-3 fs-16 my-auto"></i>
                                                    <div class="mt-1">Profile</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#changepasswordnmodal">
                                                    <i class="feather feather-edit-2 me-3 fs-16 my-auto"></i>
                                                    <div class="mt-1">Change Password</div>
                                                </a>
                                                <a class="dropdown-item d-flex" href="login.html">
                                                    <i class="feather feather-power me-3 fs-16 my-auto"></i>
                                                    <div class="mt-1">Sign Out</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex header-setting-icon">
                                <a class="nav-link icon demo-icon" href="javascript:void(0);">
                                    <i class="feather feather-settings  fe-spin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- APP-HEADER CLOSED -->
