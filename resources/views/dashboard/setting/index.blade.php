@extends('dashboard\layouts\layouts')
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Setting</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route("shippingMethod.index")}}">
                        <div class="card w_data_1">
                            <div class="body">
                                <div class="w_icon indigo"><i class="zmdi zmdi-truck"></i></div>
                                <h4 class="mt-3"></h4>
                                <span class="text-muted">Shipping Methods</span>
                                <div class="w_description text-success">
                                    <span>Show Info</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
