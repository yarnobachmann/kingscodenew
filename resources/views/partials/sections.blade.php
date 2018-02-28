@section('css')
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}" />
@endsection

@extends('layout')
@section('content')

    <div class="section d-none">@include('partials.sections.home')</div>
    <div class="section d-none">@include('partials.sections.yarno')</div>
    <div class="section d-none">@include('partials.sections.collin')</div>

@endsection

@section('js')
    <script src="{{ asset('/js/fullpage.js') }}"></script>
@endsection
