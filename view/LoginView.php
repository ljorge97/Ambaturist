<?php
    ini_get('register_globals'); 
    if(isset($_SESSION['error'])){
        echo '<script language="javascript">';
        $error=$_SESSION['error'];
        echo "alert('$error');";
        echo '</script>';
        unset($_SESSION['error']);
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Ambato</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet"> 
    <style>body{margin-top:35px}.navbar-brand{text-shadow:0px 0px 1px yellow}a{outline:0;text-decoration:none}nav a:hover{text-shadow:0px 0px 1px yellow}.col-2{text-align: center;padding: 26px 20px 18px 20px}h2{padding-top: 50px;font-family: 'Kalam', cursive;}.col-4{margin: 4px}.form-control{border: 1px solid  #ffb617 }</style>
  </head>
  <body style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">
  <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: green;">
            <a class="navbar-brand" href="<?php echo $helper->url("usuario","index"); ?>"><b>Ambato</b></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $helper->url("usuario","index"); ?>">Atras</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
            <div class="row justify-content-center">
                <H2>¡BIENVENIDO!</H2>
            </div>
            <form method="POST" style="padding-top: 20px" action="<?php echo $helper->url("usuario","ingresar"); ?>">
            <div class="row justify-content-center">
                <input class="col-4 form-control" style="border-color: green;" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="row justify-content-center">
                <input class="col-4 form-control" style="border-color: green;" type="password" name="pass" placeholder="Password" required>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <input type="submit" value="Iniciar Sesión" name="login" class="btn btn-success">
                </div>
            </div>
        </form>
        
        <div class="row justify-content-center">
            <img src="https://www.voxlocalis.net/media/cache/10/99/10992a46591a9b07183652fc7a714082.jpg">
        </div>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>