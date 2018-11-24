@extends('default')
@section('content')
    <?php $page = 'student';
    $status = 0;
    ?>
    <div class="row dir-r">

        <div class="header @if($status == '0') status-red @endif">
            <h4 class="title text-center">{{$name}}</h4>
        </div>
        <div class="col-md-12 con-box">
            <?php echo Form::open(array('route' => 'update_student'))
            ?>



                <div class="content">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الاسم</label>
                                    <input name="ar-name" type="text" class="form-control" placeholder="Username" value="{{$name}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">الاسم باللغة الإنجليزية</label>
                                    <input name="en-name" type="text" class="form-control" placeholder="الاسم بالانجليزي" value="{{$enname}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>رقم الموبايل</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Company" value="{{$phone}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الايميل</label>
                                    <input type="email" name="email"  class="form-control" placeholder="Last Name" value="{{$email}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>المسافة</label>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" name="loction">
                                            <option class="gray">{{$howfar}}</option>
                                            <option>أقل من ساعة</option>
                                            <option>من ساعه لساعة ونص </option>
                                            <option>أكتر من ساعتين</option>
                                            <option>خارج القاهرة الكبرى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>مجال العمل</label>
                                    <input type="text"  name="field" class="form-control" placeholder="City" value="{{$field}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>عرفت الاكاديميه ازاى</label>
                                    <select class="form-control" id="sel1" name="connec">
                                        <option  >{{$connec}}</option>
                                        <option >إعلان فيديو علي الفيس بوك</option>
                                        <option >إعلان مكتوب على الفيس بوك</option>
                                        <option>من صديق </option>
                                        <option >اخرى </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>تاريخ تسجيل الطالب</label>
                                    <input type="date"  name="" class="form-control disabled" disabled="disabled" value="{{$created}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>تاريخ الميلاد</label>
                                    <input type="date" name="dob" class="form-control" placeholder="Here can be your description" value="{{$birth}}" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label>العمل</label><br>
                                    <label class="radio-inline">
                                        <input type="radio"   name="career" value="مدرسة" @if($career == 'مدرسة') checked="checked" @endif>مدرسة
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio"   name="career" value="معهد"  @if($career == 'معهد') checked="checked" @endif>معهد
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio"   name="career" value="كلية"  @if($career == 'كلية') checked="checked" @endif>كلية
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio"   name="career" value="موظف"  @if($career == 'موظف') checked="checked" @endif>موظف
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>ملاحظات</label>
                                    <input name="notes"  type="text" class="form-control" placeholder="Here can be your description" value="{{$notes}}" >
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{$id}}" name="id">
                        <button type="submit" class="btn btn-info btn-fill pull-right">تعديل بيانات الطالب</button>
                        <div class="clearfix"></div>



             </form>
        </div>
        </div>
        <div class="col-lg-12 con-box">
                <h4 class="title ">كورسات الطالب : <span class="gray">كورس 21-10 تصميم مواقع</span></h4>

        </div>
        <div class="col-lg-12 con-box">
                <h4 class="title ">فواتير الطالب : </h4>
                <a href="#" class="invoice-link"> <i class="fas fa-file-invoice-dollar"></i> <span>فاتورة بمبلغ </span>  <span>  1000 ج</span></a>
                <a href="#" class="invoice-link"> <i class="fas fa-file-invoice-dollar"></i> <span>فاتورة بمبلغ </span>  <span>  1000 ج</span></a>
                     <br><br>
                <h4 class="title ">رسوم مستحقة بالسالب : <span class="text-danger"> 500 </span></h4>
        </div>

    </div>



@endsection