@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Tipo de Persona</a></li>
            <li class="active">Detalles</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Tipo Persona Detalles</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">Tipo Persona {{ $typeperson->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/type-person') }}" title="Back"><button class="btn btn-warning btn-xs btn-rounded"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regrear</button></a>
                        <a href="{{ url('/admin/type-person/' . $typeperson->id . '/edit') }}" title="Edit TypePerson"><button class="btn btn-primary btn-xs btn-rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/typeperson' . '/' . $typeperson->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs btn-rounded" title="Delete TypePerson" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $typeperson->id }}</td>
                                </tr>
                                <tr><th> Type Person </th><td> {{ $typeperson->type_person }} </td></tr>
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

