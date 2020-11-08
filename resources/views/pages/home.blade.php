@extends('layouts.base')

@section('content')
    {{-- expr --}}
    <h1>Hello from BUJUMBURA</h1>

    <img src="{{ asset('images/hacker.jpg') }}" class="mt-12" width="200" alt="Le hacker">
    <p class="text-indigo-500 font-semibold text-3xl">
    	Hello From Bujumbura !!
    </p>
    <p class="text-gray-800 text-lg">It is currentkly {{ date('h:i A')}}</p>
@endsection