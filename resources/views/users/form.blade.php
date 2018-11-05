<div class="form-row">
    <div class="form-group col-md-6  {{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="control-label">First Name</label>
        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="last_name" class="control-label">Last Name</label>
        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('gender') ? ' has-error' : '' }}">
        <label for="gender" class="control-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
            <label class="form-check-label" for="gender">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
            <label class="form-check-label" for="gender">Female</label>
        </div>
        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('dob') ? ' has-error' : '' }}">
        <label for="dob" class="control-label">Date of Birth</label>
        <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>
        @if ($errors->has('dob'))
            <span class="help-block">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('email_address') ? ' has-error' : '' }}">
        <label for="email_address" class="control-label">Email:</label>
        <input id="email_address" type="text" class="form-control" name="email_address" value="{{ old('email_address') }}" required autofocus>
        @if ($errors->has('email_address'))
            <span class="help-block">
                    <strong>{{ $errors->first('email_address') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required autofocus>
        @if ($errors->has('password'))
            <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autofocus>
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('Role') !!}<br />
        {!! Form::select('role',
            ($roles),
                null,
                ['class' => 'form-control', 'id' => 'role', 'name' => 'roles[]']) !!}
    </div>

</div>
