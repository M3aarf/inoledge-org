@extends('default')
@section('content')

    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">إنشاء فاتورة جديدة</h4>
        </div>
        <div class="card">

            <div class="content">

                    <div class="row">
                        <div class="col-lg-12">
                            <h5>خانة اختيار الطالب بالرقم او الاسم</h5>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="رقم الطالب" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="selectpicker"  data-live-search="true">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Barbecue</option>
                                    <option>Barbecue</option>
                                    <option>Barbecue</option>
                                </select>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="card">

            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>معاد الكورس</option>
                                    <option>تصميم مواقع</option>
                                    <option>اندرويد</option>
                                    <option>جافا</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">حفظ الفاتورة</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection