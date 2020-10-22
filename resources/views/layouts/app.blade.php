<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('scss/app.scss')}}">

        <title>{{config('app.name', 'LSAPP')}}</title>


    </head>
        <body>
         @include('inc.navbar');
          <div class="container">
            @if (Request::is('/'))
               @include('inc.showcase');
            @endif
              
             <div class="row"> 
                  <div class="col-md-8 col-lg-8">
                         @yield('content')
                  </div>
                  <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                 </div>
                 
            </div>    
         <footer id="footer" class="text-center">
          <p>Copyright 2020 &copy; Eduonix</p>   
        </footer>               
      </body>
</html>
