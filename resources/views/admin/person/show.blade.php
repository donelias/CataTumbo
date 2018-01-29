@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Clientes</a></li>
            <li class="active">Detalles</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Cliente Detalles</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">Cliente {{ $person->id }}</div>
                        <div class="col-md-12">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="{{ asset('assets/images/users/user3.jpg')}}" alt="{{$person->name}}"/>
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">{{$person->name}}</div>

                                </div>
                                <div class="profile-controls">
                                    <a href="{{ url('/admin/customers/' . $person->id . '/edit') }}" class="profile-control-left"><span class="fa fa-edit"></span></a>
                                    <a type="button" data-toggle="modal" data-target="#exampleModalLong" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-info btn-rounded btn-block"><span class="fa fa-check"></span> Datos de Usuario</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-rounded btn-block"><span class="fa fa-comments"></span> Obras Asignadas</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body list-group border-bottom">
                                <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Informacion Del Cliente</a>
                                <a href="#" class="list-group-item"><span class="fa fa-user"></span> Razon Social: {{$person->name}}</a>
                                <a href="#" class="list-group-item"><span class="fa fa-credit-card"></span>Rif: {{$person->type->type_person}}{{$person->identity}}</a>
                                <a href="#" class="list-group-item active"><span class="fa fa-map-marker"></span> Ubicacion del Cliente</a>
                                <a href="#" class="list-group-item"><span class="fa fa-location-arrow"></span> Direccion: {{$person->address}}</a>
                                <a href="#" class="list-group-item"><span class="fa fa-map-marker"></span> Sector: {{$person->sector->sector}} </a>
                                <a href="#" class="list-group-item"><span class="fa fa-location-arrow"></span> Parroquia: {{$person->sector->parish->parish}} </a>
                                <a href="#" class="list-group-item"><span class="fa fa-map-marker"></span> Municipio: {{$person->sector->parish->municipality->municipality}}</a>
                                <a href="#" class="list-group-item"><span class="fa fa-location-arrow"></span> Estado: {{$person->sector->parish->municipality->state->state}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DEFAULT TABLE EXPORT -->
            </div>
        </div>
    </div>
    <!-- Modal User -->
    @include('admin.person.partials.modalUser')
    <!-- END Modal -->
    <!-- Modal Phone-->
    @include('admin.person.partials.modalPhone')
    <!-- Modal -->
@endsection

