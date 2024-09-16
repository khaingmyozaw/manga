@extends('main')
@section('content')
    <x-register-form-component/>
@endsection
@push('script')
    <script>
        // $('#dob').flatpickr(
        //     {
        //         enableTime: true,
        //         dateFormat: "Y-m-d H:i",
        //     });
    </script>
@endpush