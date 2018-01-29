<div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
    <label for="type_id" class="col-md-4 control-label">{{ 'Tipo' }}</label>
    <div class="col-md-1">
        {!! Form::select('type_id', $type, old('type_id'), ['class' => 'form-control', 'required' ]) !!}
        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('identity') ? 'has-error' : ''}}">
    <label for="identity" class="col-md-4 control-label">{{ 'Rif o C.I.' }}</label>
    <div class="col-md-3">
        <input class="form-control" name="identity" type="text" id="identity" value="{{ $person->identity or ''}}" required  @if(Route::is('customers-edit')) readonly @endif>
        {!! $errors->first('identity', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Razon Social' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="name" type="text" id="name" value="{{ $person->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@if(Route::is('customers-new'))
    <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
        <label for="state_id" class="col-md-4 control-label">{{ 'Estado' }}</label>
        <div class="col-md-4">
            {!! Form::select('state_id', $states, old('state_id'), ['id' => 'state', 'class' => 'form-control', 'required']) !!}
            {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : ''}}">
        <label for="municipality_id" class="col-md-4 control-label">{{ 'Municipio' }}</label>
        <div class="col-md-4">
            {!! Form::select('municipality_id', ['plaseholder' => 'Selecciona'], old('municipality_id'), ['id' => 'municipality', 'class' => 'form-control', 'required']) !!}
            {!! $errors->first('municipality_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('parish_id') ? 'has-error' : ''}}">
        <label for="parish_id" class="col-md-4 control-label">{{ 'Parroquia' }}</label>
        <div class="col-md-4">
            {!! Form::select('parish_id', ['plaseholder' => 'Selecciona'], old('parish_id'), ['id' => 'parish', 'class' => 'form-control', 'required']) !!}
            {!! $errors->first('parish_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('sector_id') ? 'has-error' : ''}}">
        <label for="sector_id" class="col-md-4 control-label">{{ 'Sector' }}</label>
        <div class="col-md-4">
            {!! Form::select('sector_id', ['plaseholder' => 'Selecciona'], old('sector_id'), ['id' => 'sector', 'class' => 'form-control', 'required']) !!}
            {!! $errors->first('sector_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Address' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="address" type="text" id="address" value="{{ $person->address or ''}}" required>
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone_nomber') ? 'has-error' : ''}}">
    <label for="phone_nomber" class="col-md-4 control-label">{{ 'Telefono Local' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="phone_nomber" type="text" id="phone_nomber" value="{{ $person->phone_nomber or ''}}" required>
        {!! $errors->first('phone_nomber', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cellphone') ? 'has-error' : ''}}">
    <label for="cellphone" class="col-md-4 control-label">{{ 'Otro Telefono' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="cellphone" type="text" id="cellphone" value="{{ $person->cellphone or ''}}" required>
        {!! $errors->first('cellphone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if(Route::is('employees-new'))
    <div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
        <label for="role_id" class="col-md-4 control-label">{{ 'Role Id' }}</label>
        <div class="col-md-6">
            {!! Form::select('role_id', $role, old('role_id'), ['class' => 'form-control', 'required']) !!}
            <input class="form-control" name="role_id" type="number" id="role_id" value="{{ $person->role_id or ''}}" required>
            {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-success" type="submit" value="{{ $submitButtonText or 'Crear Nuevo Cliente' }}">
    </div>
</div>
<script>

$('select').select2({
allowClear: true,
placeholder: {
id: "",
text: 'Seleccione Una Opcion'
}
});
</script>