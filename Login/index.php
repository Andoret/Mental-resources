<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="container-sm">
        <div class="col-md-5">
            <div class="col-md-7"> 
            <h1 class="text-center subtitle"><b>Inicio de sesión<b></h1>
            </div>
            <form action=".sesion.php" method="post">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text"  class="form-control bg-transparent text-black" name="user" placeholder="Usuario">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10">
                    <input type="password" class="form-control bg-transparent text-black" name="pass" placeholder="Contraseña">
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-10">
                    <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div></div>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>