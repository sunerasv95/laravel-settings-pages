<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#!" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/anangel-logo-md.png') }}" alt="" height="80">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/anangel-logo.png') }}" alt="" height="111">
                    </span>
                </a>
            </div>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line dark-color-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3 customapp-seach">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line dark-color-1"></i>
                </button>
            </div>
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <img src="{{ asset('assets/images/cart-icon.svg') }}">
                    <span class="noti-dot"></span>
                </button>
            </div>
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-message-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/msg-icon.svg') }}">
                    <span class=" noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-lg-custom-noti custom-notification-section message-noti dropdown-menu-right p-0" aria-labelledby="page-header-message-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0"> Message <span class="count">3</span> </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small color-red"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <form class="app-search d-none d-lg-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="ri-search-line"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar class="maxH-270">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#friends" role="tab">
                                    <span class="d-sm-block">Friends</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#suggestedfriends" role="tab">
                                    <span class="d-sm-block">Suggested Friends</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="friends" role="tabpanel">
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">RAMJEE KHESHAVE KUMAR</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">3 min ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">AJAYDOTCOM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">Yesterday</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">ANNACAD2591</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">BALOONARIUM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod
                                                    tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">JONATHON</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="suggestedfriends" role="tabpanel">
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">RAMJEE KHESHAVE KUMAR</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">3 min ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod tempor
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">AJAYDOTCOM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">Yesterday</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod tempor
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">ANNACAD2591</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">BALOONARIUM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing elit, sed do eiusmod tempor
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">JONATHON</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/notification-icon.svg') }}">
                    <span class="noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-lg-custom-noti custom-notification-section dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0"> Notifications <span class="count">6</span> </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small color-red"> View All</a>
                            </div>
                        </div>
                    </div>

                    <div data-simplebar class="maxH-240">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#today" role="tab">
                                    <span class="d-sm-block">Today</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#archived" role="tab">
                                    <span class="d-sm-block">Archived</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="today" role="tabpanel">
                                <div class="text-reset notification-item ">
                                    <div class="media current">

                                        <div class="media-body">
                                            <p class="mb-3 time">2 weeks ago</p>
                                            <h6 class="mt-2 mb-3"><span>PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                        Clelebration Day"</a></span></h6>
                                            <h6 class="mt-2 mb-3"><span>Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</span></h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">3 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                    Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">4 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                    Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="archived" role="tabpanel">
                                <div class="text-reset notification-item ">
                                    <div class="media">

                                        <div class="media-body">
                                            <p class="mb-3 time">8 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                    Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">9 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                    Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">10 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy - AnAngel
                                                    Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn dark-color-1 header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar-4.png') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1">John</span>
                    <i class="mdi mdi-chevron-down"></i>
                    <!-- d-none d-lg-none d-xl-none" -->

                </button>
                <div class="dropdown-menu dropdown-menu-right user-downdown-custom">
                    <!-- d-none d-lg-none d-xl-none -->
                    <!-- item-->
                    <div class="dropdown-section-wrap">
                        <a class="dropdown-item user-profile-menu" href="#">Profile</a>
                        <a class="dropdown-item user-activities-menu" href="#">Activities</a>
                        <a class="dropdown-item d-block user-management-menu" href="#">Management</a>
                        <a class="dropdown-item d-block user-Wallet-menu" href="#">Wallet</a>

                        <div class="dropdown-divider"></div>

                        <div class="change-role-panel">
                            <h5>Change Role</h5>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" id="customRadio1" name="individual" class="custom-control-input individual" checked>
                                <label class="custom-control-label" for="customRadio1">Individual</label>
                            </div>
                            <div class="individual-element">
                                <select class="form-control mb-4" id="Individual">
                                    <option>Select Org.</option>
                                    <option>Organization</option>
                                    <option>Organization</option>
                                </select>
                                <button type="button" class="btn btn-light waves-effect compare"></button>
                            </div>


                            <div class="custom-control custom-radio custom-control-left mt-3 mb-2">
                                <input type="radio" id="customRadio2" name="organisation" class="custom-control-input organisation">
                                <label class="custom-control-label" for="customRadio2">Organisation</label>
                            </div>
                            <div class="organisation-element">
                                <select class="form-control" id="Organisation">
                                    <option>Select Org.</option>
                                    <option>Organization</option>
                                    <option>Organization</option>
                                </select>
                                <button type="button" class="btn btn-light waves-effect compare"></button>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row user-level">
                            <div class="col-8">
                                <h5>Level 1</h5>
                            </div>
                            <div class="col-4 text-right">
                                <div><span class="count">10 anA</span></div>
                                <div><span class="count">200 KmA</span></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>

                        <div id="multi-item-example" class="carousel slide carousel-multi-item sdgs-section" data-ride="carousel" data-interval="false">

                            <div class="row">
                                <div class="col-8">
                                    <h5>Selected SDGS</h5>
                                </div>

                                <div class="col-4 text-right">
                                    <!--Controls-->
                                    <!-- <div class="controls-top">
                                                 <a class="btn-floating line" href="#multi-item-example" data-slide="prev"><i class="ri-arrow-left-s-fill"></i></a>
                                        
                                                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="ri-arrow-right-s-fill"></i></a>
                                            </div> -->
                                    <!--/.Controls-->
                                </div>
                            </div>



                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/gal-1.jpg') }}" alt="Card image cap">

                                            </div>
                                        </div>

                                        <div class="col-md-4 clearfix d-md-block">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/gal-2.jpg') }}" alt="Card image cap">


                                            </div>
                                        </div>

                                        <div class="col-md-4 clearfix d-md-block">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/gal-3.jpg') }}" alt="Card image cap">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/img-industry-innovation.svg') }}" alt="Card image cap">
                                                <p>Industry, Innovations & Infrastructure</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4 clearfix d-md-block">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/sustainable-cities.svg') }}" alt="Card image cap">
                                                <p>Sustainable Cities & Communities</p>

                                            </div>
                                        </div>

                                        <div class="col-md-4 clearfix d-md-block">
                                            <div class="card mb-2">
                                                <img class="card-img-top" src="{{ asset('assets/images/img-responsible-production.svg') }}" alt="Card image cap">
                                                <p>Responsible Production & Consumption</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Second slide-->



                            </div>
                            <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item user-settings-menu" href="#">Settings</a>

                    </div>
                    <div class="dropdown-divider"></div>

                    <div class="user-logout">
                        <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle mr-1 text-danger"></i>Logout</a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item language waves-effect dark-color-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EN
                    <i class="mdi mdi-chevron-down d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-pt align-middle mr-1"></span> <span class="align-middle">PT</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-es align-middle mr-1"></span> <span class="align-middle">SP</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-fr align-middle mr-1"></span> <span class="align-middle">FR</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-de align-middle mr-1"></span> <span class="align-middle">DE</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-it align-middle mr-1"></span> <span class="align-middle">IT</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <span class="flag flag-ru align-middle mr-1"></span> <span class="align-middle">RU</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</header>