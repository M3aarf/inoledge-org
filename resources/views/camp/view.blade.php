@extends('default')
@section('content')
    <?php $page = 'camp'; ?>
   
        <div class="col-lg-12 dir-r" >
            <br>
               <h3 class="text-center">{{courseTitle($camp->course_id)}}</h3><br>
           
                 <a href="{{\Request::url('')}}/edit" class="view-controles"><i class="fas fa-edit"></i></a>
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
                 
        
        </div>
        <div class="col-lg-6 dir-r">
                <div class="students-list">
                    <h3>طلاب الكورس</h3> <br>
                     <ul>
                     <li> <a href="{{url('/student/')}}">محمد احمد علي</a> </li>
                     <li> <a href="">محمد احمد علي</a> </li>
                     <li> <a href="">محمد احمد علي</a> </li>
                     <li> <a href="">محمد احمد علي</a> </li>
                     </ul>
                 </div>
        </div>
@endsection