<div class="form-group {{ $errors->has('type_person') ? 'has-error' : ''}}">
    <label for="type_person" class="col-md-4 control-label">{{ 'Tipo Persona' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="type_person" type="text" id="type_person" value="{{ $typeperson->type_person or ''}}" >
        {!! $errors->first('type_person', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-success" type="submit" value="{{ $submitButtonText or 'Crear Tipo Persona' }}">
    </div>
</div>
