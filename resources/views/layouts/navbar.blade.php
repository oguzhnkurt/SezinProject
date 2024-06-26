    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
        <div class="container-fluid">
            <div class="d-flex d-lg-none me-2">
                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                    <i class="ph-list"></i>
                </button>
            </div>

            <div class="navbar-brand flex-1 flex-lg-0">
                <a href="index" class="d-inline-flex align-items-center">
                    <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                    <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
                </a>
            </div>

          

            <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
                <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                    <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                        <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search" data-bs-toggle="dropdown">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass"></i>
                        </div>
                        <div class="dropdown-menu w-100" data-color-theme="light">
                            <button type="button" class="dropdown-item">
                                <div class="text-center w-32px me-3">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                                <span>Arama <span class="fw-bold"></span> Yap</span>
                            </button>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-menu-scrollable-lg">
                                <div class="dropdown-header">
                                    Kişiler
                                    <a href="#" class="float-end">
                                        Tümünü Gör
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>

                                <div class="dropdown-item cursor-pointer">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Mehmet <mark></mark>Şen</div>
                                        <span class="fs-sm text-muted">mehmet.sen@sezintip.com</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-user-circle"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown-item cursor-pointer">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Görkem Orçun <mark></mark>Özçekiç</div>
                                        <span class="fs-sm text-muted">gorkemorcun.ozcekic@sezintip.com</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-user-circle"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="dropdown-header">
                                    Hastaneler
                                    <a href="#" class="float-end">
                                        Tümünü Gör
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>

                                <div class="dropdown-item cursor-pointer">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/brands/adobe.svg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Sadi <mark></mark>Konuk Devlet Hastanesi</div>
                                        <span class="fs-sm text-muted">MR</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown-item cursor-pointer">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/brands/holiday-inn.svg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Beyhekim <mark></mark>Araştırma Hastanesi</div>
                                        <span class="fs-sm text-muted">MR-TOMO</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown-item cursor-pointer">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/brands/ing.svg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold"><mark>Yüreğir </mark>Devlet Hastanesi</div>
                                        <span class="fs-sm text-muted">TOMO</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-faders-horizontal"></i>
                    </a>

                    <div class="dropdown-menu w-100 p-3">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Arama Seçenekleri</h6>
                            <a href="#" class="text-body rounded-pill ms-auto">
                                <i class="ph-clock-counter-clockwise"></i>
                            </a>
                        </div>

                        <div class="mb-3">
                            <label class="d-block form-label">Kategoriler</label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Faturalar</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Dosyalar</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Kullanıcılar</span>
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Addition</label>
                            <div class="input-group">
                                <select class="form-select w-auto flex-grow-0">
                                    <option value="1" selected>has</option>
                                    <option value="2">has not</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Enter the word(s)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="input-group">
                                <select class="form-select w-auto flex-grow-0">
                                    <option value="1" selected>is</option>
                                    <option value="2">is not</option>
                                </select>
                                <select class="form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="3">New</option>
                                    <option value="4">Expired</option>
                                    <option value="5">Pending</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex">
                            <button type="button" class="btn btn-light">Reset</button>

                            <div class="ms-auto">
                                <button type="button" class="btn btn-light">Cancel</button>
                                <button type="button" class="btn btn-primary ms-2">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                        <i class="ph-bell"></i>
                        <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                        <div class="status-indicator-container">
                            <img src="@if (Auth::user()->avatar != ''){{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.jpg') }}@endif" class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="d-none d-lg-inline-block mx-lg-2">{{Auth::user()->name}}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <i class="ph-user-circle me-2"></i>
                            My profile
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-currency-circle-dollar me-2"></i>
                            My subscription
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-shopping-cart me-2"></i>
                            My orders
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-envelope-open me-2"></i>
                            My inbox
                            <span class="badge bg-primary rounded-pill ms-auto">26</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="ph-gear me-2"></i>
                            Account settings
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ph-sign-out me-2"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
