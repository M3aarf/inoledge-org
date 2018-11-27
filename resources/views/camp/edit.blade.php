@extends('default')
@section('content')
    <?php $page = 'camp'; ?>
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">تعديل معاد</h4>
        </div>
        <div class="card">
              
            <div class="content">
               {!! Form::open(['url' => route('edit_camp'), 'method' => 'POST']) !!}
                <input type="hidden" name="id" value="{{$camp->id}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>اختيار الكورس</label>
                                <select  name="course_id" class="form-control" id="sel1">
                                      <option value="{{$camp->course_id}}">{{courseTitle($camp->course_id)}}</option>
                                      @foreach ($courses as $course)
                                       
                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                            @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>معاد الكورس</label>
                                <input value="{{$camp->camp_date}}" name="camp_date" type="date" class="form-control" placeholder="معاد الكورس" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>كام محاضرة في الاسبوع</label>
                                <input value="{{$camp->sessions_num}}" name="sessions_num" type="number" class="form-control" placeholder="كام محاضرة في الاسبوع">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>المحاضرة كام ساعة</label>
                                <input  value="{{$camp->hours}}" name="hours" type="number" class="form-control" placeholder="المحاضرة كام ساعة">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>بداية و نهاية المحاضرة  الساعه كام</label>
                                <input  value="{{$camp->start_end}}" name="start_end" type="text" class="form-control" placeholder="بداية  و نهاية المحاضرة الساعة كام">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>رسوم الكورس</label>
                                <input  value="{{$camp->cost}}" name="cost" type="text" class="form-control" placeholder="رسوم الكورس">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>يوم الكورس الاسبوعي</label>
                                <input  value="{{$camp->day}}" name="day" type="text" class="form-control" placeholder="يوم الكورس الاسبوعي">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>المحاضر</label>
                                <select  name="instructor" class="form-control" id="sel1">
                                    <option>{{$camp->instructor}}</option>
                                    <option value="حمزة نبيل">حمزة نبيل</option>
                                    <option value="محمود الجيزاوي">محمود الجيزاوي</option>
                                    <option value="عبد الحميد">عبد الحميد</option>
                                    <option value="أحمد ناصر">أحمد ناصر</option>
                                </select>
                            </div>

                        </div>

                    </div>
                    
                    <button type="submit" class="btn btn-info btn-fill pull-right">تعديل   الكورس</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection