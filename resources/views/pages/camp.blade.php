@extends('default')
@section('page-title')مواعيد الكورسات @endsection
@section('content')
    <div class="row dir-r">

            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> معاد جديد </a>
            </div>

        <div class="col-lg-10" >
             <a href="">
              <div class="con-box">
                    <div class="camp">
                        <div class="row">
                            <div class="col-lg-3 col-xs-12 order-last">
                                <div class="calend">
                                    <div class="text-center"><i class="fas fa-calendar-alt"></i></div>
                                    <div><b>25/10</b></div>
                                    <div><b>1 ظهرا</b></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 text-center">
                                <div class="camp-info">
                                    <div>12</div>
                                    <div>طالب</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 text-center">
                                <div class="camp-info">
                                    <div>7</div>
                                    <div>باقي رسوم</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 text-center">
                                <div class="camp-info">
                                    <div> حمزة</div>
                                    <div>المحاضر</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
             </a>
        </div>

    </div>
@endsection