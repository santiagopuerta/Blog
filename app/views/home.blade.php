
@section('title')
  Hi!
@endsection

{{-- ##################################################################### --}}

@section('content')

  <div style="display: none;" ng-controller="AppCtrl"></div>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner"><div class="container">
      <a href="#/" class="brand">Hi!</a>
    </div></div>
  </div>

  <div id="wrap" class="container container-fluid">
    <!--[if lt IE 8]>
      <p class="chromeframe">
        Estás usando una versión <strong>antigua</strong> de tu navegador
        y te expones a peligros importantes de seguridad.<br>
        Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> o
        <a href="http://www.google.com/chromeframe/?redirect=true">activa
        Google Chrome Frame</a> para ver correctamente este sitio.
      </p>
    <![endif]-->

    <div class="row-fluid">
      <div ng-view></div>
    </div>
    <div id="push"></div>
  </div>

  <footer>
    <div class="container"><div class="row">
      <div class="span4">
        <h5>Contacto</h5>
        <hr>
        <i class="icon-envelope-alt"></i>
        <a href="mailto:example@example.com"> example@example.com</a>
      </div>
    </div></div>
  </footer>

@endsection

