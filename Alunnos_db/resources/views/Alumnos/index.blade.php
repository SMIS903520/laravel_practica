<h1>Listado de Alumnos</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>lastName</th>
            <th>Age</th>
            <th>Section</th>
            <th>Actions</th>
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
                <td><input type="submit"
                onclick="return confirm('Desea eliminar el registro')"
                value="Del"/></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
