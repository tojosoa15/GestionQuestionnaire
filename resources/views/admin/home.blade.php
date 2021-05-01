@extends('admin.layouts.app')
@section('menu_dashboard','active')
@section('menu_dashboard_show','show')

@section('content_sign')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">{{__('Home')}}</a></li>
            <li  class="breadcrumb-item active" aria-current="page">
                <span>{{__('Library')}}</span>
            </li>
            <li  class="breadcrumb-item active" aria-current="page">
                <span>{{__('Data')}}</span>
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-account icon-lg text-success"></i>
                        <div class="ml-3">
                            <p class="mb-0">{{__('Nombre de visiteurs')}}</p>
                            <h6>1</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

