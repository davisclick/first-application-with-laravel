<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FLOSSPA Editar Asistencia Evento </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/registry.css')}}">
    
  </head>
  <body>
    <div class="container">
    <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}">
    
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
    <form method="post" action="{{action('RegistryController@update', $id)}}" id="formRegistry">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Nombre:</label>
            <input type="text" class="form-control" name="first_name"  value="{{$registry->first_name}}" >
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Nombre:</label>
            <input type="text" class="form-control" name="second_name" value="{{$registry->second_name}}">
          </div>
        </div>
         <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Apellido:</label>
            <input type="text" class="form-control" name="surename" value="{{$registry->surename}}">
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Apellido:</label>
            <input type="text" class="form-control" name="second_surename" value="{{$registry->second_surename}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email"  value="{{$registry->email}}">
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Edad:</label>
            <input type="text" class="form-control" name="age" value="{{$registry->age}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Télefono Residencial:</label>
            <input type="text" class="form-control" name="phone" value="{{$registry->phone}}"> 
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Celular:</label>
            <input type="text" class="form-control" name="cell_phone" value="{{$registry->cell_phone}}">
          </div>
        </div>
        <div class="row">
        
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
          <label for="name">Desea recibir información de:</label>
          <div class="checkbox">
          
            <label> <input type="checkbox" name="flosspainfo" @if($registry->flosspainfo == true ){{ 'checked' }}@endif> FLOSSPA</label>
          </div>
          <div class="checkbox">
            <label> <input type="checkbox" name="fedorainfo" @if($registry->fedorainfo == true){{ 'checked' }}@endif> FEDORA</label>
          </div>
          <div class="checkbox disabled">
            <label> <input type="checkbox" name="latansecinfo" @if($registry->latansecinfo == true ){{ 'checked' }}@endif> LATANSEC</label>
          </div>
          </div>
          
        </div>
        
        <div class="row">
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <label for="name">Comentarios:</label>
            <textarea class="form-control" rows="5" name="coments" >{{$registry->coments}}</textarea>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
    <div id="toast-container" class="toast-top-right">
    </div
  </body>
</html>