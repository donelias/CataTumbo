<div class="form-group {{ $errors->has('statu') ? 'has-error' : ''}}">
    <label for="statu" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="statu" type="text" id="statu" value="{{ $statu->statu or ''}}" >
        {!! $errors->first('statu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-success" type="submit" value="{{ $submitButtonText or 'Crear Nuevo Status' }}">
    </div>
</div>
