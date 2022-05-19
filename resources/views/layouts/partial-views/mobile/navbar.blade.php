<div class="mobile-nav-panel d-lg-none d-xl-none">
    <div class="mobile-nav-bar">
        <div class="d-flex">

            <button type="button"
                class="btn btn-sm px-3 font-size-24 d-lg-none header-item dark-color-1 customTogglemenu"
                data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <img src="{{ asset('assets/images/cart-icon.svg') }}">
                    <span class="noti-dot"></span>
                </button>
            </div>

            <div class="dropdown message-nav d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-message-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="{{ asset('assets/images/msg-icon.svg') }}">
                    <span class="noti-dot"></span>
                </button>

                <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-lg-custom-noti custom-notification-section message-noti dropdown-menu-right p-0"
                    aria-labelledby="page-header-message-dropdown">
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
                                <form class="app-search d-lg-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="ri-search-line"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar class="maxH-210">
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#friends-mobile" role="tab">
                                    <span class="d-sm-block">Friends</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#suggestedfriends-mobile" role="tab">
                                    <span class="d-sm-block">Suggested Friends</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="friends-mobile" role="tabpanel">
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">RAMJEE KHESHAVE KUMAR</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">3 min ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">AJAYDOTCOM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">Yesterday</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
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
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">BALOONARIUM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
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
                            <div class="tab-pane" id="suggestedfriends-mobile" role="tabpanel">
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">RAMJEE KHESHAVE KUMAR</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">3 min ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item current">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">AJAYDOTCOM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time">Yesterday</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
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
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">BALOONARIUM</h6>
                                            <div class="font-size-13">
                                                <p class="mb-0 time"> 5 days ago</p>
                                                <p class="mb-1">Lorem Ipsum Dolor Sit Amet. Consectetur adipiscing
                                                    elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <img class="rounded-circle header-profile-user"
                                                    src="{{ asset('assets/images/avatar-4.png') }}"
                                                    alt="Header Avatar">
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
            <div class="dropdown notification-nav d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="{{ asset('assets/images/notification-icon.svg') }}">
                    <span class="noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg  dropdown-menu-lg-custom-noti custom-notification-section dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
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
                    <div data-simplebar class="maxH-220">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#today-mobile" role="tab">
                                    <span class="d-sm-block">Today</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#archived-mobile" role="tab">
                                    <span class="d-sm-block">Archived</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="today-mobile" role="tabpanel">
                                <div class="text-reset notification-item ">
                                    <div class="media current">

                                        <div class="media-body">
                                            <p class="mb-3 time">2 weeks ago</p>
                                            <h6 class="mt-2 mb-3"><span>PrashMohit participated in <a
                                                        href="#">"#Happy - AnAngel Clelebration Day"</a></span></h6>
                                            <h6 class="mt-2 mb-3"><span>Lorem Ipsum Dolor Sit Amet Dolor Sit
                                                    Amet</span></h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">3 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy -
                                                    AnAngel Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">4 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy -
                                                    AnAngel Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="archived-mobile" role="tabpanel">
                                <div class="text-reset notification-item ">
                                    <div class="media">

                                        <div class="media-body">
                                            <p class="mb-3 time">8 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy -
                                                    AnAngel Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">9 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy -
                                                    AnAngel Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-reset notification-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="mb-3 time">10 weeks ago</p>
                                            <h6 class="mt-2 mb-3">PrashMohit participated in <a href="#">"#Happy -
                                                    AnAngel Clelebration Day"</a></h6>
                                            <h6 class="mt-2 mb-3">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>