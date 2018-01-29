@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="{{'admin/type-person'}}">Sector</a></li>
            <li class="active">Nuevo</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Sector Nuevo</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">Crear Nuevo Sector</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/sector') }}" title="Back"><button class="btn btn-warning btn-rounded btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {{--
                        <form method="GET" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" id="search">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
                                {!! Form::label('state_id', 'Estado', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::select('state_id', $state, old('state_id'), ['class' => 'form-control', 'id' => 'search', 'required']) !!}
                                    {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : ''}}">
                                <label for="municipality_id" class="col-md-4 control-label">{{ 'Parroquia' }}</label>
                                <div class="col-md-6">
                                    {!! Form::select('municipality_id', $municipality, old('municipality_id'), ['class' => 'form-control', 'required']) !!}
                                    {!! $errors->first('municipality_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('parish_id') ? 'has-error' : ''}}">
                                <label for="parish_id" class="col-md-4 control-label">{{ 'Parroquia' }}</label>
                                <div class="col-md-6">
                                    {!! Form::select('parish_id', $parish, old('parish_id'), ['class' => 'form-control', 'id' => 'select', 'required']) !!}
                                    {!! $errors->first('parish_id', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                        </form>
                        --}}

                        <form method="POST" action="{{ url('/admin/sector') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" id="search">
                            {{ csrf_field() }}

                            @include ('admin.sector.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>

@endsection

