<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- START PANEL WITH CONTROL CLASSES -->
            <div class="panel panel-warning">
                <div class="panel-body">
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-xs btn-rounded"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/user/' . $person->user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-xs btn-rounded"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/user' . '/' . $person->user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs btn-rounded" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    @endif
                    <br/>
                    <br/>
                    <div class="panel-body list-group border-bottom">
                        <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Informacion Del Usuario</a>
                        <a href="#" class="list-group-item"><span class="fa fa-user"></span> Usuario: {{ $person->user->user }}</a>
                        <a href="#" class="list-group-item"><span class="fa fa-envelope-o"></span>Email: {{ $person->user->email }}</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-rounded btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- END PANEL WITH CONTROL CLASSES -->
        </div>
    </div>
</div>
<!-- Button trigger modal -->