@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Roles</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right">Roles</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Listado General de Roles</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/roles/create') }}" class="btn btn-success btn-sm" title="Add New Role">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>

                        <form method="GET" action="{{ url('/admin/roles') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br/>
                        <br/>

                        <div class="panel-body panel-body-table">
                            <table id="customers" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th><th>Nombre Rol</th><th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            <a href="{{ url('/admin/roles/' . $item->id) }}" title="View Role"><button class="btn btn-info btn-xs btn-rounded"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/roles/' . $item->id . '/edit') }}" title="Edit Role"><button class="btn btn-success btn-rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/roles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs btn-rounded" title="Delete Role" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $roles->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
