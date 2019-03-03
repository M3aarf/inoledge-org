@extends('default')
@section('page-title')قائمة الاعمال @endsection
@section('content')
    <?php $page = 'todo'; ?>
    <div class="row dir-r">
     
            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> معاد جديد </a>
            </div>
            <div class="">
                <ul>
                    <li>
                    
                    </li>
                </ul>
            </div>
  
        

    </div>
@endsection