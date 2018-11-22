@extends('default')
@section('page-title')الكورسات @endsection
@section('content')
    <div class="row dir-r">
        <div class="col-lg-12 ">
            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> كورس جديد </a>



            </div>
        </div>
     </div>
@endsection