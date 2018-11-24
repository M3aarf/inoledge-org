@extends('default')
@section('content')
    <?php $page = 'courses'; ?>
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">تعديل بيانات كورس</h4>
        </div>
        <div class="card">

            <div class="content">
                {!! Form::open(['url' => route('update_course', $course->id), 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">

                            <input value="{{$course->title}}" type="text" name="title" required="required" class="form-control" placeholder="عنوان الكورس" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="number" value="{{$course->hours}}" name="hours" required="required" class="form-control" placeholder="عدد ساعات الكورس">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>محتوي الكورس</label>
                            <textarea class="form-control" required="required" name="content" id="summary-ckeditor"> {{$course->content}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">

                            <label>هدف الكورس</label>
                            <textarea rows="3" class="form-control"required="required"  id="summary-ckeditor1" name="target" placeholder="هدف الكورس" > {{$course->target}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>متطلبات الكورس</label>
                            <textarea rows="3" class="form-control" required="required" id="summary-ckeditor2" name="requir" placeholder="متطلبات الكورس" > {{$course->requir}}</textarea>
                        </div>
                    </div>
                </div>
                        <input type="hidden" value="{{$course->id}}" name="id">
                <button type="submit" class="btn btn-info btn-fill pull-right">تعديل الكورس</button>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection