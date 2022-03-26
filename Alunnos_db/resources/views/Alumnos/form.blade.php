<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Registrar</title>
    <style>
        body{
            background-color: #659FB9;
        }
        .abs {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            }
    </style>
</head>
<body>
<center><h1 class="display-5">REGISTRAR ALUMNO</h1></center>
    <div class="container">
        <div class="abs">
                <form  style="text-align: center;">
                    <div class="col-md-4">
                        <label for="input2" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ isset($Alumnos->name)?$Alumnos->name:'' }}" />
                    </div>

                    <div class="col-md-4">
                        <label for="input3" class="form-label">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ isset($Alumnos->lastname)?$Alumnos->lastname:'' }}" />
                    </div>

                    <div class="col-md-2">
                        <label for="input4" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age" value="{{ isset($Alumnos->age)?$Alumnos->age:'' }}" />
                                
                    </div>

                    <div class="col-md-2">
                        <label for="input5" class="form-label">Section</Section></label>
                        <input type="text"class="form-control"  name="section" id="section" value="{{ isset($Alumnos->section)?$Alumnos->section:'' }}" />
                    </div></br>

                    <div class="col-12">
                    <button type="submit" class="btn btn-dark btn-lg"> SAVE</button>
                    </div>
            </form>

        </div>

    </div>
    
   
</body>
</html>

