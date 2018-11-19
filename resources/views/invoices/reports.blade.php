@extends('default')
@section('content')

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
        <div class="camp">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="calend">
                            <div class="text-center"><i class="fas fa-calendar-alt"></i></div>
                            <div><b>25/10</b></div>
                            <div><b>1 ظهرا</b></div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="invoice-info">

                        </div>
                    </div>
                </div>
                <div>
                <span class="sep" ></span>
                <div class="calend">
                    <div class="text-center"><i class="fas fa-calendar-alt"></i></div>
                    <div><b>25/10</b></div>
                    <div><b>1 ظهرا</b></div>
                </div>
                </div>
        </div>
    </div>

@endsection