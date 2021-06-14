<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       
       <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <!-- Styles -->
      
        <style>
          
        </style>
       
    </head>
    <body>
        <div >
            @if (Route::has('login'))
                <div class="nav">
                   <div class="logo"> <div>{{ __('SZYMON CZOPEK PROJECT') }}</div></div>
                    <div class="log-reg-big">
                        <div class="log-reg">
                            <a href="{{ route('order.index') }}">{{ __('Orders') }}</a>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                        </div>
                        </div>
                </div>
            @endif

            
        </div>
    </body>
</html>
