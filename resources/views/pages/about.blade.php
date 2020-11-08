@extends('layouts.base',['title' => ' About Us'])



@section('content')
    {{-- expr --}}
    

     <img src="{{ asset('images/burundi.png') }}"  width="200" alt="Le drapeau du burundi">

      <p>Built with <span class="text-pink-500">&hearts;</span> Jean Lionel</p>
 

        <p>
            <a href="/">Revenir vers la page d'accueil</a>
        </p>

@endsection