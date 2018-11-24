@extends('default')
@section('content')

    <?php $page = 'student'; ?>
    <!--
    #number of complete invoices
    #number of uncomplete invoices
    #number of total invoices
    #number of total payments
    !-->
    <div class="col-md-12 dir-r">
        <div class="header">
            <h4 class="title">التقارير</h4>
        </div>

    </div>
   <section class="std-report">
       <div class="col-lg-12">

               <div class="row">
                   <div class="col-lg-3">
                       <div class="con-box text-center">
                           <h4>عدد طلاب الاكاديمية</h4>
                           <i class="fas fa-user-graduate"></i>
                           <div class="num" >360</div>
                       </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="con-box text-center">
                           <h4>عدد الشهادات</h4>
                           <i class="fas fa-trophy"></i>
                           <div class="num" >360</div>
                       </div>
                   </div>
               </div>


       </div>
   </section>

@endsection