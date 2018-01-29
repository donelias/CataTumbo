<!DOCTYPE html>
<html lang="es" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Cata-Tumbo Registro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<div class="login-container lightmode">
    <div class="login-box animated fadeInDown">
        @if(\Session::has('flash_message'))
            <div class="alert alert-info alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('flash_message') }}</h4>
            </div>
        @endif
        <div class="login-body">
            <div class="login-title"><strong>Creacion de Cuenta</strong></div>
            <form class="form-horizontal" method="POST" action="{{ url('/admin/user') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <div class="col-md-5">
                        <span for="type" class="add-on"><i class="icon-list-alt"></i></span><select name="type" class="form-control" id="type" required  autofocus value="{{ old('type') }}">
                            <option>Selecciona Tipo</option>
                            <option value="1">V- Venezolano(a)</option>
                            <option value="2">E- Extranjero</option>
                            <option value="3">J- Juridico</option>
                            <option value="4">G- Gubernamental</option>
                        </select>
                        @if ($errors->has('type'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                    <div class="col-md-7">
                        <input id="identity" type="text" class="form-control" name="identity" value="{{ old('identity') }}" required autofocus placeholder="Cedula o Rif">
                        @if ($errors->has('identity'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('identity') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="user" type="text" class="form-control" name="user" value="{{ old('user') }}" required autofocus placeholder="Usuario">
                        @if ($errors->has('user'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('user') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="btn btn-info btn-block" type="submit"><i class="fa fa-sign-in"></i> Registrarse</button>
                    </div>
                </div>
                <div class="login-or">OR</div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                    </div>
                </div>
                <div class="login-subtitle">
                    Ya tienes una cuenta? <a href="{{route('login')}}">Iniciar</a>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2018 App Cata-Tumbo
            </div>
            <div class="pull-right">
                <a href="#">Nosotros</a> |
                <a href="#">Contactos</a>
            </div>
        </div>
        <br>
    </div>
</div>
    </body>
    </html>
