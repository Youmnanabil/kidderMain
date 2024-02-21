@extends('main.layouts.pages')

@section('title')
Classes
@endsection

@section('content')

  @include('main.includes.header')
  @include('main.includes.Classes')
  @include('main.includes.Appointment')
  @include('main.includes.Testimonial')

@endsection