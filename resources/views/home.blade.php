@extends('layouts.app')

@section('content')
<<!-- PAGE CONTENT -->
<div class="page-content">

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Inicio</a></li>
        <li class="active">Dashboard</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-4">

            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Su Información</h3>
                    </div>
                </div>
                <div class="panel-body padding-0">
                    <div class="widget-data">
                        <a class="list-group-item"><span class="fa fa-user"></span> Nombre Usuario: <span class="widget-title">{{$user->user}}</span></a>
                        <a class="list-group-item"><span class="fa fa-caret-down"></span> {{$user->person->type->type_person}}{{$user->person->identity}} </a>
                        <a class="list-group-item"><span class="fa fa-building-o"></span> Razon Social: {{$user->person->name}} {{$user->person->last_name}}</a>
                        <a class="list-group-item"><span class="fa fa-cog"></span> Settings</a>
                    </div>
                </div>
            </div>
            <!-- END USERS ACTIVITY BLOCK -->

        </div>
        <div class="col-md-8">

            <!-- START VISITORS BLOCK -->
            <h2><strong>Bienvenido, {{$user->person->name}} </strong></h2>
            <div class="panel panel-info">
                <div class="panel-heading">

                        <div class="col-md-4">

                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET CLOCK -->

                        </div>
                        <div class="col-md-4">

                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>
                                        <div class="widget-title">Total Visitors</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>
                                        <div class="widget-title">Returned</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>
                                        <div class="widget-title">New</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET SLIDER -->

                        </div>
                        <div class="col-md-4">

                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                            <div class="widget-item-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">48</div>
                                <div class="widget-title">New messages</div>
                                <div class="widget-subtitle">In your mailbox</div>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->

                    </div>

                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">

                    <div class="col-md-4">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">375</div>
                                <div class="widget-title">Registred users</div>
                                <div class="widget-subtitle">On your website</div>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>


                </div>
            </div>
            <!-- END VISITORS BLOCK -->

        </div>
    </div>
    <!-- END WIDGETS -->
</div>
<!-- END PAGE CONTENT -->
@endsection
