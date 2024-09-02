@extends('main')
@section('content')

{{-- Banner --}}
@include('partials.banner.banner')
@include('partials.cards.latest-section')
@include('partials.banner.advertise')
@include('partials.cards.popular')
@include('partials.cards.all-releases')
@include('partials.cards.what_new')
@include('partials.forms.get-in-touch')

@endsection()