@extends('main')
@section('content')

{{-- Banner --}}
@include('partials.banner.banner')
@include('partials.cards.latest-section')
@include('partials.banner.advertise')
@include('partials.cards.popular')

@endsection()