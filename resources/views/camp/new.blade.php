@extends('default')
@section('content')
    <?php $page = 'camp'; ?>
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">إضافة معاد جديد</h4>
        </div>
        <div class="card">
              
            <div class="content">
               {!! Form::open(['url' => route('add_new_camp'), 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select  name="course_id" class="form-control" id="sel1">
                                      @foreach ($courses as $course)
                                       
                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <input name="camp_date" type="date" class="form-control" placeholder="معاد الكورس" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="sessions_num" type="number" class="form-control" placeholder="كام محاضرة في الاسبوع">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  name="hours" type="number" class="form-control" placeholder="المحاضرة كام ساعة">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  name="start_end" type="text" class="form-control" placeholder="بداية  و نهاية المحاضرة الساعة كام">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  name="cost" type="text" class="form-control" placeholder="رسوم الكورس">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  name="day" type="text" class="form-control" placeholder="يوم الكورس الاسبوعي">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select  name="instructor" class="form-control" id="sel1">
                                    <option >محاضر الكورس</option>
                                    <option value="حمزة نبيل">حمزة نبيل</option>
                                    <option value="محمود الجيزاوي">محمود الجيزاوي</option>
                                    <option value="عبد الحميد">عبد الحميد</option>
                                    <option value="أحمد ناصر">أحمد ناصر</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">إضافة الكورس</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection