@extends('default')
@section('content')

    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">إضافة كورس جديد</h4>
        </div>
        <div class="card">

            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="عنوان الكورس" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="عدد ساعات الكورس">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="summary-ckeditor"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control" placeholder="هدف الكورس" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="3" class="form-control" placeholder="متطلبات الكورس" ></textarea>
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