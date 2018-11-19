@extends('default')
@section('content')
 
                    <div class="col-md-12 dir-r">
                         <div class="header">
                                <h4 class="title">إضافة طالب جديد</h4>
                            </div>
                        <div class="card">
                           
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input type="text" class="form-control" placeholder="الاسم ثلاثي" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="الاسم باللغة الإنجليزية ثلاثي">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="رقم الموبايل">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="الايميل">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input  type="date" class="text-right form-control" placeholder="تاريخ الميلاد">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" checked>مدرسة
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">معهد
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">كلية
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio">موظف
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="مجال العمل او الدراسة">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>عرفت الأكاديميه عن طريق اى ؟</option>
                                                    <option>إعلان فيديو علي الفيس بوك</option>
                                                    <option>إعلان مكتوب على الفيس بوك</option>
                                                    <option>من صديق</option>
                                                    <option>اخرى</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option class="gray">مكان سكنك او عملك او درستك بعيد عن الكورس بوقت اد اى ؟</option>
                                                    <option>أقل من ساعة</option>
                                                    <option>من ساعه لساعة ونص </option>
                                                    <option>أكتر من ساعتين</option>
                                                    <option>خارج القاهرة الكبرى</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="3" class="form-control" placeholder="اى ملاحظات" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">إضافة الطالب</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection