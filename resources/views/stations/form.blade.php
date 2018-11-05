<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('Subcounty') !!}<br />
        {!! Form::select('subcounty_id',
            (['0' => 'Choose...'] + $subcounties),
                null,
                ['class' => 'form-control', 'id' => 'subcounty_id']) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="station_name">{{ __('Station Name') }}</label>
        <input type="text" name="station_name" class="form-control" id="station_name" placeholder="Station Name">
    </div>
</div>
