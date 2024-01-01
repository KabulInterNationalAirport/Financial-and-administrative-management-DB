

    <!DOCTYPE html>
<html lang="arabic" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <title>KIA MIS</title>
    <!--FAVICON -->
    <link rel="icon" href="assets/images/brand/logo 2.png" type="image/x-png" />

    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/plugins.css" rel="stylesheet" />

    <!-- ANIMATE CSS -->
    <link href="assets/css/animated.css" rel="stylesheet" />

    <!---ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet" />


    <!-- INTERNAL SWITCHER CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/switcher/demo.css" rel="stylesheet" />

</head>

<body class="login-img">

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
    <!-- END SWITCHER -->
    <div class="page  responsive-log login-bg">
        <div class="dropdown custom-layout">
            <div class="demo-icon nav-link  icon  float-end mt-5 me-5">
                <i class="fe fe-settings fa-spin text_primary"></i>
            </div>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="main-proifle ">
                                    <div class=" text-center">
                                        <img src="{{ asset('assets/images/brand/log2.png') }}" alt="Bg-Image"
                                            id="login2">
                                        <p class=" font-weight-bold text-xl">{{__('auth.register-form')}}</p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label class="form-label font-weight-bold font-weight-bold">Name</label>
                                            <div class="input-group mb-4">
                                                    <input type="name" id="name" class="form-control "
                                                        name="name" :value="old('name')" required autofocus autocomplete="name">
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <label class="form-label font-weight-bold font-weight-bold">Email</label>
                                            <div class="input-group mb-4">
                                                    <input type="email" id="email" class="form-control "
                                                    name="email" :value="old('email')" required autocomplete="username" >
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label class="form-label font-weight-bold font-weight-bold">Password</label>
                                            <div class="input-group mb-4">
                                                    <input type="password" id="password" class="form-control "
                                                     type="password"
                                                    name="password"
                                                    required autocomplete="new-password" >
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <label class="form-label font-weight-bold font-weight-bold">Confirm Password</label>
                                            <div class="input-group mb-4">
                                                    <input type="password" id="password_confirmation" class="form-control " type="password"
                                                    name="password_confirmation" required autocomplete="new-password"  >
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                        <div class="footer">
                                            <Button class="ml-4 btn btn-primary" >
                                                {{ __('Register') }}
                                            </Button>
                                        </div>
                                    </form>
                                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JQUERY JS -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>

        <!-- BOOTSTRAP JS-->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SELECT2 JS -->
        <script src="assets/plugins/select2/select2.full.min.js"></script>

        <!-- P-SCROLL JS -->
        <script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>


        <!--STICKY JS -->
        <script src="assets/js/sticky.js"></script>

        <!-- COLOR THEME JS-->
        <script src="assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="assets/js/custom.js"></script>
        <!-- SWITCHER -->
        <script src="assets/switcher/js/switcher.js"></script>
</body>

</html>

