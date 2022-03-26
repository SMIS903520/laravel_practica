<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Listado</title>
    <style>
        body{
                background: url("https://www.tuoptometrista.com/wp-content/uploads/2020/09/aula-escuela-fondo-borroso-joven-estudiante-vista-borrosa-sala-clase-primaria-nino-o-profesor-sillas-mesas-campus-imagenes-estilo-efecto-vintage_1253-1375.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
        }
        .tab{
            margin: 0 auto;
            width: 60%;
            padding: 50px;
        }
        .right {
            position: absolute;
            right: 0px;
            width: 340px;
            padding: 5px;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark" style="background-color: #024A86;">
  <div class="container-fluid">
    <a class="navbar-brand" color="white">Students</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ url('/Alumnos') }}">LISTADO</a>
        <a class="nav-link" href="{{ url('/Alumnos/create') }}">CREAR REGISTRO</a>
      </div>
    </div>
  </div>
</nav>
    <center><h1>Listado de Alumnos</h1></center>
        <div class="position-absolute top-50 start-50 translate-middle">
                <div class="row">
                <div class="col-xs-12 col-md-8">
                <table class="table table-dark table-striped" >
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>lastName</th>
                            <th>Age</th>
                            <th>Section</th>
                            <th>Actions</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($alumnos as $Alumnos)
                        <tr>
                            <td>{{ $Alumnos->id }}</td>
                            <td>{{ $Alumnos->name }}</td>
                            <td>{{ $Alumnos->lastname }}</td>
                            <td>{{ $Alumnos->age }}</td>
                            <td>{{ $Alumnos->section }}</td>
                            <form action="{{ url('/Alumnos/'.$Alumnos->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <td><button type="submit" class="btn btn-light"
                                onclick="return confirm('Desea eliminar el registro')">DEL</buttom></td>
                            </form>
                            <form action method="post">
                            <td><button type="submit" class="btn btn-light">
                               <a href="{{ url('/Alumnos/'.$Alumnos->id.'/edit') }}">Edit</a></buttom></td>
                                
                            </form>
                                                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
                </div>
        </div>
        <div class="position-absolute top-50 end-0 translate-middle-y">
            <div class="card" style="width: 18rem;">
                <img src="http://www.icorp.com.mx/blog/wp-content/uploads/2020/04/estudiantes_empresa_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Listado del total de alumnos almacenados en la base de datos escolar.</p>
                </div>
            </div>

        </div>
       
       

</body>
</html>
