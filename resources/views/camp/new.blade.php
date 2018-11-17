@extends('default')
@section('content')

    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">إضافة معاد جديد</h4>
        </div>
        <div class="card">

            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>الكورس</option>
                                    <option>كورس تصميم مواقع</option>
                                    <option>كورس اندرويد</option>
                                    <option>كورس جافا</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <input type="date" class="form-control" placeholder="معاد الكورس" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="كام محاضرة في الاسبوع">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="المحاضرة كام ساعة">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="بداية  و نهاية المحاضرة الساعة كام">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="رسوم الكورس">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="يوم الكورس الاسبوعي">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>محاضر الكورس</option>
                                    <option>حمزة نبيل</option>
                                    <option>محمود الجيزاوي</option>
                                    <option>عبد الحميد</option>
                                    <option>أحمد ناصر</option>
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