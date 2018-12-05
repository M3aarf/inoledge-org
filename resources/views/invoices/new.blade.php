@extends('default')
@section('content')

    <?php $page = 'invoices'; ?>
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
                                <select class="selectpicker"  data-live-search="true" id="selectpicker">
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
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="المبلغ المدفوع" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>طريقة الحجز</option>
                                    <option>فودافون كاش</option>
                                    <option>كورسيدا</option>
                                    <option>شحن اتصالات</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">حفظ الفاتورة</button>
                    <button type="submit" class="btn btn-info btn-fill pull-right">حفظ و طباعة الفاتورة</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        
       $('select').attr('data-live-search');
        
    </script>

@endsection