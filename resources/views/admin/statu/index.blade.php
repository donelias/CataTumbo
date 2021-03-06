@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Status</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Status</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- START DEFAULT TABLE EXPORT -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Listado General de Status</h3>
                        <div class="pull-right">
                            <button class="btn btn-danger toggle" data-toggle="exportTable"><i class="fa fa-bars"></i> Exportar Satos</button>
                        </div>
                    </div>
                    <div class="panel-body" id="exportTable" style="display: none;">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="list-group border-bottom">
                                    <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'png',escape:'false'});"><img src="{{ asset('img/icons/png.png')}}" width="24"/> PNG</a>
                                    <a href="#" class="list-group-item" onClick ="$('#customers').tableExport({type:'pdf',escape:'false'});"><img src="{{ asset('img/icons/pdf.png')}}" width="24"/> PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a href="{{ url('/admin/statu/create') }}" class="btn btn-success btn-sm" title="Add New Statu">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/admin/statu') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                        <div class="col-md-12">
                            <table id="customers" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th><th>Statu</th><th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($statu as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->statu }}</td>
                                        <td>
                                            <a href="{{ url('/admin/statu/' . $item->id) }}" title="View Statu"><button class="btn btn-info btn-rounded btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/statu/' . $item->id . '/edit') }}" title="Edit Statu"><button class="btn btn-primary btn-rounded btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/statu' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs btn-rounded " title="Delete Statu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-wrapper"> {!! $statu->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                </div>
                <!-- END DEFAULT TABLE EXPORT -->
            </div>
        </div>
    </div>
@endsection

