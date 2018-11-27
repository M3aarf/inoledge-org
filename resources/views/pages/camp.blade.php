@extends('default')
@section('page-title')مواعيد الكورسات @endsection
@section('content')
    <?php $page = 'camp'; ?>
    <div class="row dir-r">
     
            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> معاد جديد </a>
            </div>
        @foreach($camps as $camp)
        <div class="col-lg-12" >
               <h3>{{courseTitle($camp->course_id)}}</h3><br>
             <a href="{{\Request::url('')}}/{{$camp->id}}">
                 
                 <div class="con-box">
                    <div class="camp">
                        <div class="row">
                           
                            <div class="col-lg-3 col-xs-12 order-last">
                                <div class="calend">
                                    <div class="text-center"></div>
                                    <div class="date"><b>{{$camp->camp_date}}</b></div>
                                    <div class="start-end"><b>{{$camp->start_end}}</b></div>
                                    <div class="day"><b>{{$camp->day}}</b></div>
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
                                    <div> {{$camp->instructor}}</div>
                                    <div>المحاضر</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
             </a>
        </div>
        @endforeach
        

    </div>
@endsection