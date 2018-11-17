@section('navbar')

    <nav class="navbar navbar-default navbar-fixed">
        <div class="">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">@yield('page-title')</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <p class="hidden-lg hidden-md">أكاديميه انولدج</p>
                        </a>
                    </li>

                </ul>


            </div>
        </div>
    </nav>

@endsection