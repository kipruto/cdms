<div class="form-row">
    <div class="form-group col-md-6">
        <label for="sample_id">{{ __('Sample ID') }}</label>
        <input type="text" name="sample_id" class="form-control" id="sample_id" placeholder="Sample ID" disabled>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="patient_id">{{ __('Patient ID') }}</label>
        <input type="text" name="patient_id" class="form-control" id="patient_id" placeholder="Patient ID" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="first_name">{{ __('First Name') }}</label>
        <input type="text" name="first_name" class="form-control" id="first_name" disabled>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="last_name">{{ __('Last Name') }}</label>
        <input type="text" name="last_name" class="form-control" id="last_name" disabled>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('Sample Location') !!}<br />
        {!! Form::select('sample_location_id', ['' => 'Please select...'] + $sample_locations, 1, ['class' => 'form-control', 'id' => 'sample_location_id', 'readonly' => true]) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('Preliminary TB Results') !!}<br />
        {!! Form::select('preliminary_status_id', ['0' => 'Please select...'] + $preliminary_statuses, null, ['class' => 'form-control', 'id' => 'preliminary_status_id', 'autofocus'=>'autofocus']) !!}
    </div>
</div>
