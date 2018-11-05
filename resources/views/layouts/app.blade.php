<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('Vitamin Stock app')}}</title>
        <!-- Fonts -->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
        <meta class="foundation-mq">
    </head>
    <body>

        <!-- Start Top Bar -->
        <div class="top-bar">
          <div class="row">
            <div class="top-bar-left">
              <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
                <li role="menuitem"><a href="{{ route('dashboard') }}">Home</a></li>
                <li role="menuitem"><a href="{{ route('products') }}">{{__('Products')}}</a></li>
                <li role="menuitem"><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                               Logout
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               {{ csrf_field() }}
                                           </form></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

@yield('content')

        <div class="column column">
          <hr>
          <ul class="menu align-right">
            <li class="float-right">Copyright 2018</li>
          </ul>
        </div>
            <script src="{{ asset('js/vendor/jquery.js') }}"></script>
            <script src="{{ asset('js/vendor/what-input.js') }}"></script>
            <script src="{{ asset('js/vendor/foundation.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
            <script>
              $(document).foundation();
            </script>
        <br>
    </body>
</html>
