@extends('main.layouts.pages')

@section('title')
About Us
@endsection

@section('content')

  @include('main.includes.header')
  @include('main.includes.About')
  @include('main.includes.CallToAction')
  @include('main.includes.Team')

@endsection