@extends('base')

@section('title','About As')

@section('content')
    {{-- expr --}}
     <p>Built with 💄 Jean Lionel</p>

     <img src="{{ asset('images/burundi.png') }}"  width="200" alt="Le drapeau du burundi">
 

        <p>
            <a href="/">Revenir vers la page d'accueil</a>
        </p>

@endsection