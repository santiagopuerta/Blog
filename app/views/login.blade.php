
@section('title')

@endsection

@section('content')
  {{-- Carga el controlador de analitics, etc. Carga controlador de cosas globales --}}
  <div style="display: none;" ng-controller="AppCtrl"></div>

  <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Iniciar sesión.</h2>
        <input type="text" class="input-block-level" placeholder="Dirección de email" >
        <input type="password" class="input-block-level" placeholder="Contraseña">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
        <button class="btn btn-large btn-primary" type="submit">Entrar</button>
      </form>

  </div>



@endsection