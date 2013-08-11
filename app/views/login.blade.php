
@section('title')

@endsection

@section('content')
  {{-- Carga el controlador de analitics, etc. Carga controlador de cosas globales --}}
  <div style="display: none;" ng-controller="AppCtrl"></div>

  <div class="container" ng-include="'/views/accounts/login.html'"></div>



@endsection