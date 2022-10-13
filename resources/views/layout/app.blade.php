<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-blue">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="static/css/AdminLTE.min.css" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- custom styling -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link type="text/css" href="{{asset('/')}}assets/css/themes/blue/vendor-fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="{{asset('/')}}assets/css/themes/blue/vendor-weathericons.css" rel="stylesheet">
    <link type="text/css" href="{{asset('/')}}assets/css/themes/blue/vendor-bootstrap-datepicker.css" rel="stylesheet">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{asset('/')}}assets/vendor/simplebar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('/')}}assets/css/themes/blue/app.css" rel="stylesheet">
    @yield('styles')

</head>

<body>
    <div class="d-flex flex-column position-relative h-100">

    @include('partial.topbar')

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
                <!-- CONTENT BODY -->

             @yield('content')

                    
            </div>
            @include('partial.sidebar')
          
    </div>

    <!-- jQuery -->
    <script src="{{asset('/')}}assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{asset('/')}}assets/vendor/popper.js"></script>
    <script src="{{asset('/')}}assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="{{asset('/')}}assets/vendor/simplebar.js"></script>


    <script src="{{asset('/')}}assets/vendor/moment.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/dateformat.js"></script>
    <script src="{{asset('/')}}assets/vendor/bootstrap-datepicker.min.js"></script>

    <script>
        window.theme = "blue";
    </script>
    <script src="{{asset('/')}}assets/js/color_variables.js"></script>
    <script src="{{asset('/')}}assets/js/app.js"></script>


    <script src="{{asset('/')}}assets/vendor/dom-factory.js"></script>
    <!-- DOM Factory -->
    <script src="{{asset('/')}}assets/vendor/material-design-kit.js"></script>
    <!-- MDK -->



    <script>
        (function() {
            'use strict';

            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()

            // Connect button(s) to drawer(s)
            var sidebarToggle = Array.prototype.slice.call(document.querySelectorAll('[data-toggle="sidebar"]'))

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#blue-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        drawer.mdkDrawer.toggle()
                    }
                })
            })

            //////////////////////////////////////////
            // BREAK OUT OF ENVATO LIVE DEMO IFRAME //
            //////////////////////////////////////////

            window.top.location.hostname !== window.location.hostname && (window.top.location = window.location)

        })();
    </script>

    <script src="{{asset('/')}}assets/vendor/fullcalendar.min.js"></script>
    <script src="{{asset('/')}}assets/js/calendars.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('scripts')
    
 
    <script>
        @if (Session::has('messege'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>

    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
</body>

</html>