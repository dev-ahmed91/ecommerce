@extends('dashboard\layouts\layouts')
@section('content')
    <section class="content file_manager">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('settings.index')}}"> Setting</a></li>
                        <li class="breadcrumb-item active">Shipping Methods</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary float-right" type="button">Add New Method</button>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="a2018">
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <a href="javascript:void(0);" class="file">

                                                        <div class="image">
                                                            <img src="{{asset('assets/dashboard/images/image-gallery/1.jpg')}}" alt="img" class="img-fluid">
                                                        </div>
                                                        <div class="file-name">
                                                            <p class="m-b-5 text-muted">Aramex</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
