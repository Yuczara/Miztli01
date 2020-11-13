<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Proyecto Miztli</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #b2d7e5;
        }
        
        .row {
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        
        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        
        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        
        .btn1:hover {
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>
</head>

<body>

    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="imagenes/art6.PNG" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Miztli</h1>
                    <h4>Registrate</h4>
                    <form action="registro.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="realname" placeholder="Ingresa tu nombre" class="form-control my-3 p-4" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" id='nick' name="nick" required placeholder="Ingresa mail" class="form-control my-3 p-4" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="pass" placeholder="Ingresa contraseña" class="form-control my-3 p-4" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="rpass" required placeholder="repite contraseña" class="form-control my-3 p-4" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input class="btn1 mt-3 mb-5" type="submit" name="submit" value="Registrarse" />
                            </div>
                        </div>
                    </form>    
                    <?php
    if(isset($_POST['submit'])){
        require("registro.php");
    }
?>                
                </div>
            </div>
        </div>
    </section>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>