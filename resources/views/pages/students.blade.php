@extends('default')
@section('page-title')الطلاب @endsection
@section('content')
<?php $page = 'student'; ?>
  <div class="row dir-r">
      <div class="col-lg-12 ">
          <div class="con-box">
              <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> طالب جديد </a>

                  <a href="{{\Request::url('')}}/reports" class="btn-new options-color"><i class="fa fa-chart-bar "></i>عرض التقارير</a>
                </div>
      </div>

         <div class="col-lg-12">
            <div class="con-box">
             <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>الاسم</th>
                                <th>رقم التليفون</th>
                                <th>مجال العمل</th>
                                <th>المسافة</th>
                                <th>خيارات</th>
                            </tr>
                        </thead>
            </table>
      </div>
        </div>
  </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('getStudents') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'arName', name: 'arName'},
            {data: 'phone', name: 'phone'},
            {data: 'carT', name: 'carT'},
            {data: 'howfar', name: 'howfar'},
            {data: 'action', name: 'action'},
        ],
        "language": {
            "search": "بحث بالاسم او رقم التليفون"
        }
    });
});
</script>
@endsection