 <footer>

 	 <footer>
           <p class="text-grey-500">&copy;Copyright {{ date('Y')}} &middot;
    
            @if (!Route::is('about'))
                {{-- expr --}}
                    <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-500 underline">About as</a>
            @endif

              </p>
       </footer>

  </footer>