@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Tipo de Persona</a></li>
            <li class="active">Editar</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Tipo Persona Editar</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">Editar Tipo Persona #{{ $typeperson->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/type-person') }}" title="Back"><button class="btn btn-warning btn-rounded btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/type-person/' . $typeperson->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.type-person.form', ['submitButtonText' => 'Actualizar Tipo Persona'])

                        </form>

                    </div>
                </div>
                <!-- END DEFAULT TABLE EXPORT -->
            </div>
        </div>
    </div>
@endsection

