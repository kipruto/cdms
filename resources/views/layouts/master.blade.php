<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('partials.topbar')

    @include('partials.sidebar')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"> @yield('header') </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>

    <script>
        $(document).ready(function() {
            // show the alert
            $(".fades").delay(1500).slideUp(1500, function() {
                $(this).alert('close');
            });
        });

        $('#edit_user').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget); // Button that triggered the modal

            let id = button.data('id'); // Extract info from data-* attributes
            let first_name = button.data('first_name');
            let last_name = button.data('last_name');
            let gender = button.data('gender');
            let dob = button.data('dob');
            let email_address = button.data('email_address');
            let password = button.data('password');

            let modal = $(this);

            modal.find('.modal-title').text('Editing ' + first_name + ' '+ last_name);

            modal.find('.modal-body #user_id').val(id);
            modal.find('.modal-body #first_name').val(first_name);
            modal.find('.modal-body #last_name').val(last_name);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #dob').val(dob);
            modal.find('.modal-body #email_address').val(email_address);
            modal.find('.modal-body #password').val(password);
        });

        $('#delete_user').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #user_id').val(id);
        });

        $('#edit_subcounty').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let subcounty_name = button.data('subcounty_name');
            let number_of_stations = button.data('number_of_stations');

            let modal = $(this);
            modal.find('.modal-title').text('Editing ' + subcounty_name);
            modal.find('.modal-body #subcounty_id').val(id);
            modal.find('.modal-body #subcounty_name').val(subcounty_name);
            modal.find('.modal-body #number_of_stations').val(number_of_stations);
        });

        $('#delete_subcounty').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #subcounty_id').val(id);
        });

        $('#edit_station').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);

            let id = button.data('id');
            let station_name = button.data('station_name');

            let modal = $(this);
            modal.find('.modal-title').text('Editing ' + station_name);

            modal.find('.modal-body #station_id').val(id);
            modal.find('.modal-body #station_name').val(station_name);
        });
        $('#delete_station').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #station_id').val(id);
        });

        $('#edit_role').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);

            let id = button.data('id');
            let name = button.data('name');
            let display_name = button.data('display_name');
            let description = button.data('description');

            let modal = $(this);
            modal.find('.modal-title').text('Editing ' + display_name + ' Role');

            modal.find('.modal-body #role_id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #display_name').val(display_name);
            modal.find('.modal-body #description').val(description);
        });

        $('#delete_role').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #role_id').val(id);
        });

        $('#edit_patient').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget); // Button that triggered the modal

            let id = button.data('id'); // Extract info from data-* attributes
            let first_name = button.data('first_name');
            let last_name = button.data('last_name');
            let gender = button.data('gender');
            let dob = button.data('dob');
            let contact = button.data('contact');

            let modal = $(this);

            modal.find('.modal-title').text('Editing ' + first_name + ' '+ last_name);

            modal.find('.modal-body #patient_id').val(id);
            modal.find('.modal-body #first_name').val(first_name);
            modal.find('.modal-body #last_name').val(last_name);
            modal.find('.modal-body #gender').val(gender);
            modal.find('.modal-body #dob').val(dob);
            modal.find('.modal-body #contact').val(contact);
        });

        $('#delete_patient').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #patient_id').val(id);
        });

        $('#delete_sample').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let modal = $(this);
            modal.find('.modal-body #sample_id').val(id);
        });

        $('#sample_result').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget);

            let sample_id = button.data('sample_id');
            let patient_id = button.data('patient_id');
            let first_name = button.data('first_name');
            let last_name = button.data('last_name');

            let modal = $(this);
            modal.find('.modal-title').text('Submitting Results for ' + first_name + ' '+last_name);

            modal.find('.modal-body #sample_id').val(sample_id);
            modal.find('.modal-body #patient_id').val(patient_id);
            modal.find('.modal-body #first_name').val(first_name);
            modal.find('.modal-body #last_name').val(last_name);
        });
    </script>
</div>
</body>
</html>
