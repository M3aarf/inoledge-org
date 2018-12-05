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


<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<script>
    var path = window.location.pathname;
    if(path.includes('student'))
    {
        $(".nav li .student").addClass("active");
    }
</script>
   <script src="{{asset('assets/js/app.js')}}"></script>

</html>
 