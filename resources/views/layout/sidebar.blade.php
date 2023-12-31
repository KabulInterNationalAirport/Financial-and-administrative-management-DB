    <!-- APP-SIDEBAR -->
    <div class="sticky" id="app-sidebar-togglee">
        <aside class="app-sidebar ">
            <div class="app-sidebar3 mt-4">
                <div class="">
                    <div class="app-sidebar__user mt-2">
                            <a class="dropdown  text-center text-white " href="/">
                                <h2 class="">{{__('layout-Financial.kabul-airport1')}}<i class="fa-solid fa-plane-departure"></i></h2>
                            </a>
                    </div>
                </div>
                <ul class="side-menu">
                    <li class="side-item side-item-category mt-4"></li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/financial">
                            <i class="fa-solid fa-house-laptop sidemenu_icon"></i>
                            <span
                                class="side-menu__label">{{ __('layout-Financial.financial-and-administrative') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-envelopes-bulk sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.department-office') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-person-arrow-down-to-line sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.ground-handling') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-person-military-rifle sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.security-aviation') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-brands fa-redhat sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.operational-m') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-gears sidemenu_icon"></i>
                            <span class="side-menu__label"> {{ __('layout-Financial.technical m') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-crown sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.vip') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="">
                            <i class="fa-solid fa-microchip sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.it') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="/report-index">
                            <i class="fa-regular fa-newspaper sidemenu_icon"></i>
                            <span class="side-menu__label">{{ __('layout-Financial.daily-report') }}</span><i
                                class="angle fa fa-angle-right"></i></a>
                    </li>
                    <li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
											<i class="feather feather-airplay sidemenu_icon"></i>
											<span class="side-menu__label">{{ __('Users Management') }}</span><i class="angle fa fa-angle-right"></i>
										</a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">{{ __('all.General_Admin') }}</a></li>
											<li><a href="{{route('users.index')}}" class="slide-item">{{ __('users') }}</a></li>
											<li><a href="{{route('roles.index')}}" class="slide-item">{{ __('role') }}</a></li>
											<li><a href="{{route('permissions.index')}}" class="slide-item">{{ __('permission') }}</a></li>
										</li>	
            </div>
        </aside>
    </div>
    <!-- APP-SIDEBAR CLOSED -->
    <div style="height: 100px">

    </div>
