@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post">

                        @csrf

                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="user_type">{{ __('Employee Role') }}</label>
                                <select id="user_type" class="form-control" name="user_type">
                                    <option selected>{{ __('Choose...') }}</option>
                                    <option value="1">{{ __('System Administrator') }}</option>
                                    <option value="2">{{ __('Manager') }}</option>
                                    <option value="3">{{ __('Laboratory Technician') }}</option>
                                    <option value="4">{{ __('Field Officer') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">{{ __('First Name') }}</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">{{ __('Last Name') }}</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                            </div>
                        </div>

                        <label for="gender">{{ __('Gender') }}</label>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                                    <label class="form-check-label" for="gender">{{ __('Male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                    <label class="form-check-label" for="gender">{{ __('Female') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="dob">{{ __('Date of Birth') }}</label>
                                <input type="date" name="dob" class="form-control" id="dob">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email_address">{{ __('Email Address') }}</label>
                                <input type="email" name="email_address" class="form-control" id="email_address">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
