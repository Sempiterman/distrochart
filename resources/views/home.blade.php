@extends('layouts.cuentas')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Sistema de control de documentacion y personal de proceso electoral 2018</div>

    <div class="container">    
    </div>
    <div class="container">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="container">
            
          </div>

          <div class="list-group">
{{-- ################################################################################################# --}}
              <br><br>
              <div class="panel panel-info">
                  <div class="panel-heading">
                    <div>
                    <h4 class="panel-title">
                      <a href="#personal" data-toggle="collapse" class="collapsed" aria-expanded="true">
                        <span aria-hidden="true"></span>PERSONAL
                      </a>
                    </h4>
                  </div>
                  <div id="personal" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="{{ route('personal.index') }}"><h4><span class="label label-info">EMPLEADOS</span></h4></a>
                        <a href="{{ route('cuentas.index') }}"><h4><span class="label label-info">CUENTAS</span></h4></a>
                        <a href="{{ route('dispositivos.index') }}"><h4><span class="label label-info">EQUIPOS MOVILES</span></h4></a>
                        </div>
                    </div>
                  </div>
              </div>


 {{-- ############################################################################################### --}}  
            <div class="panel panel-info">
                  <div class="panel-heading">
                    <div>
                    <h4 class="panel-title">
                      <a href="#documentos" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <span aria-hidden="true"></span>DOCUMENTOS
                      </a>
                    </h4>
                  </div>

                  <div id="documentos" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="{{ route('cartas.index') }}"><h4><span class="label label-info">CARTAS DE NOTIFICACION</span></h4></a>
                        <a href="{{ route('moviles.index') }}"><h4><span class="label label-info">ACUSES DE MOVILES</span></h4></a>
                        <a href="{{ route('equipos.index') }}"><h4><span class="label label-info">ACUSES DE EQUIPOS</span></h4></a>
                        </div>
                    </div>
                  </div>
              </div>
{{-- ################################################################################################# --}}
              {{-- <div class="panel panel-info">
                  <div class="panel-heading">
                    <div>
                    <h4 class="panel-title">
                      <a href="#enrolar" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <span aria-hidden="true"></span>USUARIOS
                      </a>
                    </h4>
                  </div>

                  <div id="enrolar" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#"><h4><span class="label label-info">PERMISOS</span></h4></a>
                        <a href="#"><h4><span class="label label-info">ROLES</span></h4></a>
                        <a href="{{ route('usuarios.index') }}"><h4><span class="label label-info">USUARIOS</span></h4></a>
                        </div>
                    </div>
                  </div>
              </div> --}}
{{-- ################################################################################################# --}}

          </div>
        </div><!--/.sidebar-offcanvas-->
{{-- ///////////////////////////////////////////////////////////////////////////////////////////////// --}}
{{-- ///////////////////////////////////////////////////////////////////////////////////////////////// --}}
      <div class="row row-offcanvas row-offcanvas-">
        <div class="row">
            <br><br><br><br>

                <a href="{{ route('posts.index') }}">
                <div class="col-lg-3">
                  <img class="img-circle" src="{{ asset('img/notificacion.png') }}" alt="Generic placeholder image" width="118" height="118">
                  <h2>AVISOS</h2>
                  <p>Publicar avisos para los SE y CAE.</p><br>
                  {{-- <p><a class="btn btn-default" href="{{ url('/posts') }}" role="button">Ver detalles</a></p> --}}
                </div><!-- /.col-lg-4 -->    
                </a>
                
                <a href="{{ url('mail') }}">
                <div class="col-lg-3">
                  <img class="img-circle" src="{{ asset('img/mail.png') }}" alt="Generic placeholder image" width="118" height="118">
                  <h2>NOTIFICACIONES</h2>
                  <p>Enviar notificaciones de correo electronico a usuarios.</p>
                  {{-- <p><a class="btn btn-default" href="#" role="button">Ver detalles</a></p> --}}
                </div><!-- /.col-lg-4 -->    
                </a>
                
                <a href="{{ url('chartemploy') }}">
                <div class="col-lg-2">
                  <img class="img-circle" src="{{ asset('img/estadisticas.png') }}"  alt="Generic placeholder image" width="118" height="118">
                  <h2>REPORTES</h2>
                  <p>Ver reportes estadisticos de los datos obtenidos durante el PE.</p>
                  {{-- <p><a class="btn btn-default" href="#" role="button">Ver detalles</a></p> --}}
                </div><!-- /.col-lg-4 -->    
                </a>
                
        </div><!-- /.row -->
      </div><!--/row-->
    </div>

    </div>
</div>
    {{-- @include('layouts.footer') --}}
@endsection
