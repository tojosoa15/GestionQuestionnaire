@extends('admin.layouts.login_layout')

@section('content')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper" >
            <div class="row">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth " >
                    <div class="row w-100">
                        <div class="col-lg-4 mx-auto">
                            <div  class="auth-form-dark text-left p-5">
                                <div class="logo text-center" > <a href="#">LOGO  </a> </div>

                                <form class="pt-5" role="form" method="POST" action="{{ route('admin.auth.login') }}">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <!--label for="exampleInputEmail1">Identifiant</label-->
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required autofocus>
                                        <i class="mdi mdi-account"></i>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <!--label for="exampleInputPassword1">Mot de passe</label-->
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe">
                                        <i class="mdi mdi-eye"></i>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>


                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"  name="remember" id="remember"  {{ old('remember') ? 'checked' : ''}}>
                                            Se souvenir de moi
                                        </label>
                                    </div>

                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-block  btn-warning btn-lg font-weight-medium" >Se Connecter</button>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <a href="#" class="auth-link text-white">Obtenir mot de passe</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
