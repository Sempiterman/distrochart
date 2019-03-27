<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))            
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
<hr>
<footer class="container">
        <section><div class="row">
      
      <div class="col-xs-4 ">
      <b><h3 align="center">INE</h3></b>
        <br>
        © Derechos Reservados, Instituto Nacional Electoral, México.
      </div>

      <div class="col-xs-4 ">
      <b><h3 align="center">Oficinas centrales:</h3></b>
        <br>
        Viaducto Tlalpan No. 100 Col. Arenal Tepepan, Delegación Tlalpan, C.P. 14610, Ciudad de México.
      </div>

      <div class="col-xs-4 ">
      <b><h3 align="center">Llámanos:</h3></b>
        <br>
        Desde cualquier parte del país sin costo: <b>01 800 433 2000</b>.<br>
Desde Estados Unidos sin costo: <b>1 (866) 986 8306</b>.<br>
Desde otros países por cobrar: <b>+52 (55) 5481 9897</b>.<br>
      </div>
      </section>
      </footer>
</html>
