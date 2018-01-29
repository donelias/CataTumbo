@if(Route::is('sector-new'))
<div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
    <label for="state_id" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        {!! Form::select('state_id', $states, old('state_id'), ['id' => 'state', 'class' => 'form-control', 'required']) !!}
        {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : ''}}">
    <label for="municipality_id" class="col-md-4 control-label">{{ 'Municipio' }}</label>
    <div class="col-md-6">
        {!! Form::select('municipality_id', ['plaseholder' => 'Selecciona'], old('municipality_id'), ['id' => 'municipality', 'class' => 'form-control', 'required']) !!}
        {!! $errors->first('municipality_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('parish_id') ? 'has-error' : ''}}">
    <label for="parish_id" class="col-md-4 control-label">{{ 'Parroquia' }}</label>
    <div class="col-md-6">
        {!! Form::select('parish_id', ['plaseholder' => 'Selecciona'], old('parish_id'), ['id' => 'parish', 'class' => 'form-control', 'required']) !!}
        {!! $errors->first('parish_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif
<div class="form-group {{ $errors->has('sector') ? 'has-error' : ''}}">
    <label for="sector" class="col-md-4 control-label">{{ 'Sector' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sector" type="text" id="sector" value="{{ $sector->sector or ''}}" >
        {!! $errors->first('sector', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-success" type="submit" value="{{ $submitButtonText or 'Crear Sector' }}">
    </div>
</div>
