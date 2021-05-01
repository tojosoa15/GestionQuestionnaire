@extends('admin.layouts.app')

@section('content_sign')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">{{__('Utilisateur')}}</a></li>
            <li class="breadcrumb-item "><span>{{__('Modification Profil')}}</span>
                </li>

        </ol>
    </nav>
    @include('admin.notifications.status_message')
    <section class="content ">

        <div class="row justify-content-center">
            <div class="col-lg-6  align-items-stretch grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{__('Modification profil')}}</h4>
                         <form class="cmxform " role="form" id="valideForm" method="post"  action="{{route('admin.auth.register_edit')}}">
                            <fieldset>
                                {{ csrf_field() }}
                                <input type="text" name="id_user" id="id_user" value="{{$profil->id}}" hidden="">
                                <div class="form-group">
                                    <label for="username_profil">{{trans('user.username')}}</label>
                                    <input id="username_profil" class="form-control border border-dark" name="username_profil" type="text" value="{{$profil->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="email_profil">{{trans('user.email')}}</label>
                                    <input id="email_profil" class="form-control  border border-dark" name="email_profil" type="email" value="{{$profil->email}}">
                                </div>

                                <div class="form-group form-check-inline">
                                    <input type="checkbox" id="editMdp" value="">
                                    <label class="form-check-label" for="editMdp" style="padding-left: 10px;">{{__("Changer mot de passe")}}</label>
                                </div>

                                <div class="form-group" id="password-old" hidden="">
                                    <label for="password_profil">{{__("Votre mot de passe")}}</label>
                                    <input id="password_profil" class="form-control  border border-dark" name="password_profil" type="password">
                                </div>

                                <div class="form-group" id="password-edit" hidden="">
                                    <label for="new_password">{{__("Nouveau mot de passe")}}</label>
                                    <input id="new_password" class="form-control  border border-dark" name="new_password" type="password">
                                </div>

                                <div class="form-group" id="password-edit-confirm"  hidden="">
                                    <label for="confirm_password_profil">{{trans('user.confirm_password')}}</label>
                                    <input id="confirm_password_profil" class="form-control border border-dark" name="confirm_password_profil" type="password">
                                </div>
                                <br>
                                <div class="pull-right">
                                    <button type="submit" class=" btn btn-primary">  {{trans('button.register_button')}} </button>
                                    <button type="reset" class="btn btn-default"> {{trans('button.cancel_button')}} </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  align-items-stretch grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-xs-12 ">

                            <img class="img-thumbnail" src="{{$filename}}"  style="width:140px;background-size: cover;height: 140px;">

                        </div>
                        <div class="form-group col-xs-12 ">
                             <span class="btn btn-primary btn-file">
                                 <i class="fa fa-camera"></i>
                                 Modifier
                                <form method="post" id="form_file" enctype="multipart/form-data" action="{{route('admin.auth.change_image',Auth::guard('admin')->user()->id)}}">
                                    {{csrf_field()}}
                                    <input  type="file" onchange="document.getElementById('form_file').submit()" name="change_photo" accept="image/*" size="1024">

                                </form>

                             </span>
                            <div class="wrapper mb-5 mt-4">
                                <span class="badge badge-warning text-white">Note : </span>
                                <p class="d-inline ml-3 text-muted">{{__("La taille de l'image ne doit pas depasser 1MB")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('admin.auth.script_user')
@endsection
