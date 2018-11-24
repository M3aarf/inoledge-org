@extends('default')
@section('content')
    <?php $page = 'student'; ?>
 <div class="row">
<div class="col-md-12 dir-r">
<div class="header">
<h4 class="title">إضافة طالب جديد</h4>
</div>
<div class="card">
<?php echo Form::open(array('route' => 'add_new_student'))
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">

                <input required="required" type="text" name="ar-name" class="form-control" placeholder="الاسم ثلاثي" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input  required="required" type="text" name="en-name"  class="form-control" placeholder="الاسم باللغة الإنجليزية ثلاثي">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input  required="required" type="text" name ="phone" class="form-control" placeholder="رقم الموبايل">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="الايميل">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input  type="date" name ="dob"class="text-right form-control" placeholder="تاريخ الميلاد">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="radio-inline">
                    <input type="radio"   name="field" value="مدرسة">مدرسة
                </label>
                <label class="radio-inline">
                    <input type="radio"   name="field" value="معهد">معهد
                </label>
                <label class="radio-inline">
                    <input type="radio"   name="field" value="كلية">كلية
                </label>
                <label class="radio-inline">
                    <input type="radio"   name="field" value="موظف">موظف
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input  required="required" type="text" class="form-control" name ="career" placeholder="مجال العمل او الدراسة">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <select  required="required" class="form-control" id="sel1" name="connec">
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
                <select  required="required" class="form-control" id="sel1" name="loction">
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
                <textarea rows="3" name="notes"class="form-control" placeholder="اى ملاحظات" ></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-info btn-fill pull-right">إضافة الطالب</button>
    <div class="clearfix"></div>

</div>
</form>
</div>
</div>
 </div>
@endsection


