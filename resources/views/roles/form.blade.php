<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">{{ __('Role Name') }}</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Role">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="display_name">{{ __('Display Name') }}</label>
        <input type="text" name="display_name" class="form-control" id="display_name">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="description">{{ __('Role Description') }}</label>
        <input type="text" name="description" class="form-control" id="description">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="permissions">{{ __('Permissions') }}</label>
        <div class="">
            @foreach ($permissions as $key => $permission)
                <input type="checkbox"  value="{{$key}}" name="permissions[]" id="permissions"> {{$permission}}<br>
            @endforeach

            @if ($errors->has('permissions'))
                <span class="help-block">
                    <strong>{{ $errors->first('permissions') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
