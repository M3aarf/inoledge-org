@extends('default')
@section('page-title')الكورسات @endsection
@section('content')
    <?php $page = 'courses'; ?>
    <div class="row dir-r">
        <div class="col-xs-12 ">
            <div class="con-box">
                <a href="{{\Request::url('')}}/new " class="btn-new"><i class="fa fa-plus"></i> كورس جديد </a>



            </div>
        </div>
        <div class="col-lg-12 ">
                <ul>
                    @foreach($courses as $course)
                    <li><a class="link-list" href="{{\Request::url('')}}/view/{{$course->id}}">  <i class="fas fa-chalkboard-teacher"></i> {{$course->title}} </a></li>
                    @endforeach
                </ul>

        </div>
     </div>
@endsection
