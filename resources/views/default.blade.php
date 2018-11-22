@include('layout.header')
@include('layout.sidebar')
@include('layout.navbar')
@yield('header')
<body>
<div class="wrapper">

    @yield('sidebar')
    <div class="main-panel">
        @yield('navbar')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>

</div>


</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('assets\js\demo.js')}}"></script>


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
  /*
        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: 'info',
            timer: 4000
        });
*/
         if($('#summary-ckeditor'))
        {
                CKEDITOR.replace( 'summary-ckeditor' );
                $('select').selectpicker();
        }
    });

</script> 
@yield('script')
</html>
 