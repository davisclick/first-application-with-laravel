<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FLOSSPA Asistencia Evento </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/registry.css')}}">
    
  </head>
  <body>
    <div class="container">
    <img alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}">
    
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
    <form method="post" action="{{url('registries')}}" id="formRegistry">
    {{csrf_field()}}
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Nombre:</label>
            <input type="text" class="form-control" name="first_name"  value={{old('first_name')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Nombre:</label>
            <input type="text" class="form-control" name="second_name" value={{old('second_name')}}>
          </div>
        </div>
         <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Primer Apellido:</label>
            <input type="text" class="form-control" name="surename" value={{old('surename')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Segundo Apellido:</label>
            <input type="text" class="form-control" name="second_surename" value={{old('second_surename')}}>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email"  value={{old('email')}}>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Edad:</label>
            <input type="text" class="form-control" name="age" value={{old('age')}}>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Télefono Residencial:</label>
            <input type="text" class="form-control" name="phone" value={{old('phone')}}> 
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
            <label for="name">Celular:</label>
            <input type="text" class="form-control" name="cell_phone" value={{old('cell_phone')}}>
          </div>
        </div>
        <div class="row">
        
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
          <label for="name">Desea recibir información de:</label>
          <div class="checkbox">
          
            <label> <input type="checkbox" name="flosspainfo" @if(old('flosspainfo') !== NULL ){{ 'checked' }}@endif> FLOSSPA</label>
          </div>
          <div class="checkbox">
            <label> <input type="checkbox" name="fedorainfo" @if(old('fedorainfo') !== NULL ){{ 'checked' }}@endif> FEDORA</label>
          </div>
          <div class="checkbox disabled">
            <label> <input type="checkbox" name="latansecinfo" @if(old('latansecinfo') !== NULL ){{ 'checked' }}@endif> LATANSEC</label>
          </div>
          </div>
          
        </div>
        
        <div class="row">
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <label for="name">Comentarios:</label>
            <textarea class="form-control" rows="5" name="coments" >{{old('coments')}}</textarea>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-success">Agregar Asistencia</button>
          </div>
        </div>
      </form>
    </div>
    <div id="toast-container" class="toast-top-right">
    </div
  </body>
</html>