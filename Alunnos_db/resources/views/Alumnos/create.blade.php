<form action="{{ url('/Alumnos') }}" method="post">
    @csrf
    @include('Alumnos.form')
</form>