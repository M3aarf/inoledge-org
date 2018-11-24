@section('sidebar')
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{url('')}}" class="simple-text">
              أكاديمية انولدج
            </a>
        </div>

        <ul class="nav">
            <li class="<?php if($page=='home'){echo 'active';}?>">
                <a href="{{url('')}}">
                    <i class="pe-7s-graph"></i>
                    <p>الرئيسية</p>
                </a>
            </li>
            <li class="<?php if($page=='student'){echo 'active';}?>">
                <a href="{{url('/students')}}">
                    <i class="pe-7s-user"></i>
                    <p>الطلاب</p>
                </a>
            </li>
            <li class="<?php if($page=='courses'){echo 'active';}?>">
                <a href="{{url('/courses')}}">
                    <i class="pe-7s-note2"></i>
                    <p>الكورسات</p>
                </a>
            </li>
            <li class="<?php if($page=='camp'){echo 'active';}?>">
                <a href="{{url('/camp')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>مواعيد الكورسات</p>
                </a>
            </li>
            <li class="<?php if($page=='invoices'){echo 'active';}?>">
                <a href="{{url('/invoices')}}">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <p>الفواتير</p>
                </a>
            </li>

        
        </ul>
    </div>
</div>
@endsection