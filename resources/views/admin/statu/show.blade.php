@extends('layouts.app')

@section('content')
    <<!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="{{url('admin/statu')}}">Status</a></li>
            <li class="active">Detalle</li>
        </ul>
        <!-- END BREADCRUMB -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-right"><span class="fa fa-arrow-circle-o-left"></span> Status-Detalles</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Statu {{ $statu->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/statu') }}" title="Back"><button class="btn btn-warning btn-xs btn-rounded"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/statu/' . $statu->id . '/edit') }}" title="Edit Statu"><button class="btn btn-primary btn-xs btn-rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/statu' . '/' . $statu->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-rounded btn-xs" title="Delete Statu" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $statu->id }}</td>
                                </tr>
                                <tr><th> Statu </th><td> {{ $statu->statu }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

