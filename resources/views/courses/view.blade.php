@extends('default')
@section('content')
    <?php $page = 'courses'; ?>
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">{{$course->title}} <a  class="pull-left" href="{{url('/courses')}}/edit/{{$course->id}}"><i class="fas fa-edi"></i><span class="white">Edit</span></a></h4>
        </div>
        <div class="card">

            <div class="content">
                <h5>محتوي الكورس</h5>
                {!! $course->content !!}
            </div>
        </div>
        <div class="card">

            <div class="content">
                <h5>متطلبات الكورس</h5>
                {!! $course->requir !!}
            </div>
        </div>
        <div class="card">

            <div class="content">
                <h5>هدف الكورس</h5>
                {!! $course->target!!}
            </div>
        </div>
    </div>
@endsection