
@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Roles</a></li>
            <li class="active">Detalle</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right">Roles-Detalle General</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Role {{ $role->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-xs btn-rounded"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/roles/' . $role->id . '/edit') }}" title="Edit Role"><button class="btn btn-success btn-xs btn-rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/roles' . '/' . $role->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-rounded btn-xs" title="Delete Role" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $role->id }}</td>
                                </tr>
                                <tr><th> Rol </th><td> {{ $role->role }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

