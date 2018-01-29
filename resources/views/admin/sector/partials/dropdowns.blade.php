
    {!! Form::model($countryForm, ['method' => 'GET', 'class' => 'form-horizontal', 'id' => 'search']) !!}
        <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
            <label for="state_id" class="col-md-4 control-label">{{ 'Estado' }}</label>
            <div class="col-md-6">
                {!! Form::select('state_id', $states, ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : ''}}">
            <label for="municipality_id" class="col-md-4 control-label">{{ 'Municipio' }}</label>
            <div class="col-md-6">
                {!! Form::select('municipality_id', $municipalities, ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('municipality_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('parish_id') ? 'has-error' : ''}}">
            <label for="parish_id" class="col-md-4 control-label">{{ 'Parroquia' }}</label>
            <div class="col-md-6">
                {!! Form::select('parish_id', $parish, old('parish_id'), ['class' => 'form-control', 'required']) !!}
                {!! $errors->first('parish_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <br>
    {!! Form::close() !!}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
