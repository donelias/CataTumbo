<div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
    <label for="user" class="col-md-4 control-label">{{ 'User' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user" type="text" id="user" value="{{ $user->user or ''}}" >
        {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $user->email or ''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="text" id="password" value="{{ $user->password or ''}}" >
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    <label for="role_id" class="col-md-4 control-label">{{ 'Role Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="role_id" type="number" id="role_id" value="{{ $user->role_id or ''}}" >
        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('statu_id') ? 'has-error' : ''}}">
    <label for="statu_id" class="col-md-4 control-label">{{ 'Statu Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="statu_id" type="number" id="statu_id" value="{{ $user->statu_id or ''}}" >
        {!! $errors->first('statu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
