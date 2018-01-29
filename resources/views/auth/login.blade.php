<!DOCTYPE html>
<html lang="es" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Cata-Tumbo Login</title>
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
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Inicio Session</strong> con su Cuenta</div>
                <form class="form-horizontal"method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
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
                        <div class="col-md-6">
                            <a href="{{ route('password.request') }}" class="btn btn-link btn-block">Olvido su Clave!</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" type="submit"><i class="fa fa-sign-in"></i> Iniciar</button>
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
                        No tienes una cuenta? <a href="{{route('register')}}">Crear Cuenta</a>
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

