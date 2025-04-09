@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    @include('components.home.hero')
    @include('components.home.mission')
    @include('components.home.who-we-are')
    @include('components.home.what-we-do')
    @include('components.home.core-values')
    @include('components.home.community-impact')
    @include('components.home.get-involved')
    @include('components.home.location-impact')
    @include('components.home.statement')
    @include('components.home.success-stories')
    @include('components.home.contact')
@endsection