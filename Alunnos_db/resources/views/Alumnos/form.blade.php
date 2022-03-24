Name:
<input type="text" name="name" id="name" value="{{ isset($Alumno->name)?$Alumno->name:'' }}" />
lastname:
<input type="text" name="lastname" id="lastname" value="{{ isset($Alumno->lastname)?$Alumno->lastname:'' }}" />
Age:
<input type="number" name="age" id="age" value="{{ isset($Alumno->age)?$Alumno->age:'' }}" />
Section:
<input type="text" name="section" id="section" value="{{ isset($Alumno->section)?$Alumno->section:'' }}" />
<button type="submit">Save</button>
