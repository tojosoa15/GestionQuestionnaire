@extends('admin.layouts.app')
@section('menu_utilisateur_active','active')
@section('menu_utilisateur_show','show')
@section('menu_utilisateur_users','active')

@section('content_sign')

    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
            <li class="breadcrumb-item " aria-current="page"><span>Liste utilisateurs</span></li>
        </ol>
    </nav>
    <section class="content ">
        <div class="row justify-content-center">
            <div class="col-lg-12 align-items-stretch grid-margin">
                <div class="alert alert-dismissable taxo-msg tablebio hide">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <span id="msg-contet-vv"></span>
                </div>
            </div>
            <div class="col-lg-12 align-items-stretch grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Liste utilisateurs</h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="table_user" class="table display">
                                        <thead>
                                        <tr>
                                            <th class="col-xs-4">{{__('Identifiant')}}</th>
                                            <!-- <th class="col-xs-3">{{__('Groupe')}}</th> -->
                                            <th class="col-xs-4">Email</th>
                                            <th class="col-xs-1"><center>Actions</center></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
    @include('admin.auth.script_user')
    @include('admin.auth.modal_edit_user')
    @include('admin.auth.modal_delete_user')
@endsection
