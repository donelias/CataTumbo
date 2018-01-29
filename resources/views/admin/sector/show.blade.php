@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Sector</a></li>
            <li class="active">Detalles</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Sector Detalles</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">Sector {{ $sector->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/sector') }}" title="Back"><button class="btn btn-warning btn-rounded btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/admin/sector/' . $sector->id . '/edit') }}" title="Edit Sector"><button class="btn btn-primary btn-rounded btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/sector' . '/' . $sector->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-rounded btn-xs" title="Delete Sector" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $sector->id }}</td>
                                </tr>
                                <tr><th> Sector </th><td> {{ $sector->sector }} </td></tr>
                                <tr><th> Parroquia </th><td> {{ $sector->parish->parish }} </td></tr>
                                <tr><th> Estado </th><td> {{ $sector->parish->municipality->state->state }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- END DEFAULT TABLE EXPORT -->
            </div>
        </div>
    </div>
@endsection

