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
    <div class="form-group col-md-6 {{ $errors->has('contact') ? ' has-error' : '' }}">
        <label for="contact" class="control-label">Contact:</label>
        <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autofocus>
        @if ($errors->has('contact'))
            <span class="help-block">
                    <strong>{{ $errors->first('contact') }}</strong>
                </span>
        @endif
    </div>
</div>
