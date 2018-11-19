@extends('default')
@section('page-title')الفواتير @endsection
@section('content')
    <div class="row dir-r">
        <div class="col-lg-12 ">
            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> فاتورة جديدة </a>

                <a href="{{\Request::url('')}}/reports" class="btn-new options-color"><i class="fa fa-chart-bar "></i>عرض التقارير</a>
            </div>
        </div>

    </div>
@endsection