<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th >Email</th>
        <th >Teléfono</th>
        <th >Celular</th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registries as $registry)
      <tr>
        <td>{{$registry['id']}}</td>
        <td>{{$registry['first_name']}}</td>
        <td>{{$registry['surename']}}</td>
        <td>{{$registry['email']}}</td>
        <td>{{$registry['phone']}}</td>
        <td>{{$registry['cell_phone']}}</td>
        <td><a href="{{action('RegistryController@edit', $registry['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form  onsubmit="return confirm('Do you really want to delete?');" action="{{action('RegistryController@destroy', $registry['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html