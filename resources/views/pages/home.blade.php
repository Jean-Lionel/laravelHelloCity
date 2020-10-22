@extends('base')
@section('title','Home')

@section('content')
    {{-- expr --}}
    <h1>Hello from BUJUMBURA</h1>
    <p>It is currentkly {{ date('h:i A')}}</p>
@endsection