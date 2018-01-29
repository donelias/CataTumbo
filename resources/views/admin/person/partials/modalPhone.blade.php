<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- START PANEL WITH CONTROL CLASSES -->
            <div class="panel panel-warning">
                <div class="panel-body">
                    <div class="panel-body list-group border-bottom">
                        <a href="#" class="list-group-item active"><span class="fa fa-phone-square"></span> Informacion Telefonica del Cliente</a>
                        <a href="#" class="list-group-item"><span class="fa fa-phone"></span>Telefono Principal: {{ $person->phone_nomber }}</a>
                        <a href="#" class="list-group-item"><span class="fa fa-phone-square"></span>Otro Telefono: {{ $person->cellphone }}</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-rounded btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- END PANEL WITH CONTROL CLASSES -->
        </div>
    </div>
</div>>
<!-- Button trigger modal -->