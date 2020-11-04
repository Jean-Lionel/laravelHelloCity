@extends('base')
@section('title','Home')

@section('content')
    {{-- expr --}}
    <h1>Hello from BUJUMBURA</h1>

    <img src="{{ asset('images/hacker.jpg') }}" width="200" alt="Le hacker">
    <p>It is currentkly {{ date('h:i A')}}</p>
@endsection