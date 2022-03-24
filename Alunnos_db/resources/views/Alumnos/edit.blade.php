Edit Alumno

<form action="{{ url('/Alumnos/'.$Alumnos->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('Alumnos.form')
</form>