<!DOCTYPE html>
<html lang="es">
<!-- begin::Head -->
<head>
    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../">
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema | General</title>
     
    {{-- jquery de forma local --}}
    <script src="{{URL::asset('jquery/jquery-3.6.4.js')}}"></script>    
    
<script src="{{ URL::asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />


    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('assets/media/logos/favicon.ico') }}" sizes="48X16">
    <!--begin::Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700"> --}}
    <!--end::Fonts -->

    @include('layouts/css/css')
    @yield('styles')
</head>
@guest



<body
    <?php /* class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" */?>
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-aside--enabled kt-aside--fixed kt-page--loading" >
    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="/home">
                <img alt="Logo" src="{{ URL::asset('assets/media/logos/logo-light.png')}}" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->


    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <!-- begin:: Aside -->
            @include('layouts/navbar/navbar')
            <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                @include('layouts/header/header')
                <!-- end:: Header -->
                <!-- begin: Content -->

             

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        @yield('content')
                    </div>
                    <!-- end:: Content -->
                </div>
                <!-- begin:: Footer -->
                @include('layouts/footer/footer')
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
    </div>
    @include('layouts/scripts/scripts')
    
    <script src="{{ URL::asset('js/layout.js') }}" type="text/javascript"></script>
    

    <script type="text/javascript">
   
        // var global URL
        var url = '{!! URL::asset('') !!}';

        </script>
    <!-- end:: Page -->

    @yield('scripts')
</body>
<!-- end::Body -->
@endguest

</html>
