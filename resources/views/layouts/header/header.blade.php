<!-- begin:: Header -->
<style>
    button:focus {
    outline: 0;
}

.navbar .dropdown-menu .form-control {
    width: 200px;
}
</style>

<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
    <!-- begin:: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
            class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">

            <div class="kt-aside__brand-logo">
                <a href="{{ url('/') }}">
                    <img alt="Logo" src="{{ URL::asset('assets/media/company-logos/logo_gcdmx.png')}}" width="30%"> <!--logo secretraira Administracion y fiannazas-->
                    <img alt="Logo" src="{{ URL::asset('assets/media/company-logos/logo_cdmx_saf.png')}}" width="25%"> <!--logo gobierno de la ciudad de mexico  -->
                </a>
                
            </div>
            <!--
               <ul class="kt-menu__nav ">
            
                  <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                  <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <span class="kt-menu__link-text">General</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                     <ul class="kt-menu__subnav">
                        <li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                           <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                              <span class="kt-menu__link-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                       <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" id="Combined-Shape" fill="#000000"></path>
                                       <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                    </g>
                                 </svg>
                              </span>
                              <span class="kt-menu__link-text">Deployment Center</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  </li>
               </ul>
            -->
        </div>
    </div>
    <!-- end:: Header Menu -->
    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
        <!--begin: Search -->
        {{-- <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path
                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                id="Path" fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                    <form method="get" class="kt-quick-search__form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="flaticon2-search-1"></i></span></div>
                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                            <div class="input-group-append"><span class="input-group-text"><i
                                        class="la la-close kt-quick-search__close"></i></span></div>
                        </div>
                    </form>
                    <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true" data-height="300"
                        data-mobile-height="200">
                        <div class="ps__rail-x">
                            <div class="ps__thumb-x" tabindex="0"></div>
                        </div>
                        <div class="ps__rail-y">
                            <div class="ps__thumb-y" tabindex="0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end: Search -->
        <!--begin: Notifications -->
        {{-- <div class="kt-header__topbar-item dropdown">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
                <span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <path
                                d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                            <path
                                d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                id="Combined-Shape" fill="#000000"></path>
                        </g>
                    </svg>
                    <span class="kt-pulse__ring"></span>
                </span>
                <!--
                           Use dot badge instead of animated pulse effect: 
                           <span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
                           -->
            </div>
        </div> --}}
        <!--end: Notifications -->
       


        <!--begin: User Bar -->
       
        @guest
        <div class="kt-header__topbar-item kt-header__topbar-item--user" >
            
                <div class="kt-header__topbar-user" id="btnClick">
                    
                       <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="p-3">
                            <form action="{{ url('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="emailInput">Email address</label>
                                    <input type="email" class="form-control" id="emailInput" placeholder="email@example.com"  name="email" value="{{old('email')}}">
                                    @error('email')<div style="color:red">{{$message}}</div>@enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="passwordInput">Password</label>
                                    <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password">
                                    @error('password') <div style="color:red">{{$message}}</div>@enderror
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input"  name="remember" id="rememberm">
                                    <label class="form-check-label" for="rememberm">
                                      Recuerdame
                                    </label>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>                                  
                            </form>
                        </li>
                    </ul>
                                                                                                                      
                </div>
                       
        </div>
        @endguest

        @auth
        <div class="kt-header__topbar-item kt-header__topbar-item--user" >
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user" id="btnClick">
                    <li class="dropdown order-1">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-1">
                          <li class="p-3">

                                                                                                           
                            <form style="display: inline" action="{{ url('/logout') }}" method="POST" >
                                @csrf
                                <a  onclick="this.closest('form').submit()">Desloguear</a>
                            </form>
                            </li>
                        </ul>
                    </li>                                                                                                    
                </div>
            </div>            
        </div>
            
        @endauth
        <!--end: User Bar -->
</div>
    </div>
    <!-- end:: Header Topbar -->
   
<!-- end:: Header -->








