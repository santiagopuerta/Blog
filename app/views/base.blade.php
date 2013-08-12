<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title')</title>

  <!-- concat:css /styles/blog.css -->
    <link rel="stylesheet" href="/styles/bootstrap.css">
    <link rel="stylesheet" href="/styles/app.css">
  <!-- endconcat -->

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700"
      rel="stylesheet" type="text/css">

  <style type="text/css"> .ng-cloak { display: none; } </style>

  @if(!App::environment('local') && Config::get('analytics.google') != '')
    <script>
      var _gaq=[['_setAccount','{{ Config::get('analytics.google') }}']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  @endif

  @yield('header')

</head>
<body ng-app="app" class="default-layout">

  @yield('content')

  <div ng-controller="ErrorCtrl">
    <div modal="!ErrorRegister.isNull()" close="close()" options="opts"
      style="display: none;">
      <div class="modal-header">
        <button class="close" ng-click="close()">&times;</button>
        <h4>Error en la conexión</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-error">Ha ocurrido un error mientras se
          sincronizaban los datos de la aplicación con el servidor.</div>
        <p>Comprueba que sigues conectado correctamente a Internet y prueba de nuevo.
          Si el error persiste puedes probar a
          <a href="javascript:location.reload();">recargar la página</a>.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" ng-click="close()">Cerrar</button>
      </div>
    </div>
  </div>
  <div id="global-msg" style="display: none;">
    <div class="inline-block label label-warning">
      Cargando datos...
    </div>
  </div>
  <div id="notifications" class="notifications"></div>

  <!-- concat:js /scripts/ie.js -->
    <!--[if lt IE 9]>
      <script src="/components/es5-shim/es5-shim.min.js"></script>
      <script src="/components/json3/lib/json3.min.js"></script>
      <script> var concat_script_here; </script>
    <![endif]-->
  <!-- endconcat -->

  <!-- min --><script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script>
    window.jQuery || document.write('<script src="/components/jquery/jquery.min.js">' +
      '<\/script>');
  </script>

  <!-- concat:js /scripts/blog.js -->
    <!-- min --><script src="/components/bower-angular/angular.js"></script>
    <!-- min --><script src="/components/bower-angular/angular-sanitize.js"></script>

    <!-- compile /scripts/vendor.js -->
      <script src="/components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
      <script src="/components/bootstrap-notify/js/bootstrap-notify.js"></script>
      <script src="/components/bootstrap/js/bootstrap-alert.js"></script>
      <script src="/components/bootstrap/js/bootstrap-transition.js"></script>
    <!-- endcompile -->

    <!-- compile /scripts/scripts.js -->
      <script src="/scripts/app.js"></script>
      <script src="/scripts/controllers/accounts.js"></script>
      <script src="/scripts/controllers/global.js"></script>
      <script src="/scripts/controllers/home.js"></script>
      <script src="/scripts/directives/match.js"></script>
      <script src="/scripts/error-handler.js"></script>
      <script src="/scripts/http-interceptor.js"></script>
      <script src="/scripts/services/global.js"></script>
    <!-- endcompile -->
  <!-- endconcat -->

  @if (false)
    <!-- compile /scripts/test.js -->
      <script src="components/bower-angular/angular-mocks.js"></script>      
      <script src="scripts/app.test.js"></script>
    <!-- endcompile -->
  @endif

  <script type="text/javascript">
    @foreach($data as $d)
      angular.module('{{ $d['module'] }}').constant('{{ $d['name'] }}',
          {{ json_encode($d['value']) }});
    @endforeach
  </script>

  @yield('scripts')

</body>
</html>
