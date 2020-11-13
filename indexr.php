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
            background:#b2d7e5;
            
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
<body >

	<section class="form my-4 mx-5">
    
         <div class="container">
            <div class="row no-gutters">
            <div class="col-lg-5">
                    <img src="assets/imagenes/art6.PNG" alt="" class="img-fluid">
             </div>
                 <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Miztli</h1>
                    <h4>Ingresa a tu centa</h4>
						<form action="validar.php" method="POST">
						<div class="form-row">
                            <div class="col-lg-7">							
						 	<input  style="border-radius:15px;" type="text" name="nick" placeholder="Email-Adress" class="form-control my-3 p-4">
							 </div>
                        </div>
						<div class="form-row">
                            <div class="col-lg-7">	 
							<input style="border-radius:15px;" type="password" name="pass" placeholder="******" class="form-control  my-3 p-4">
							</div>
						</div>
						<div class="form-row">
                            <div class="col-lg-7">
                            <button class="btn1 mt-3" type="submit" >Aceptar</button>
                            <p>¿Aún no tienes una cuenta?<a href="registrate.php">Registrate aquí</a></p>
							</div>
                           </div> 
                            <div class="form-row">
                            <div class="col-lg-7">
                            <center>
                            <div type="submit" class="fb-login-button mb-5" data-size="large" data-scope="public_profile,email" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" onlogin="checkLoginState();" data-use-continue-as="true" data-width="" class="form-control my-3 p-4"></div><br>
                            </center>
                            </div>
						</div>
						
						

                        <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&autoLogAppEvents=1&version=v8.0&appId=684635098851881" nonce="7wxH5D3l"></script>

    <script>
        function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
            console.log('statusChangeCallback');
            console.log(response); // The current login status of the person.
            if (response.status === 'connected') { // Logged into your webpage and Facebook.
                testAPI();
            } else { // Not logged into your webpage or we are unable to tell.
               // document.getElementById('status').innerHTML = 'Por favor, ' +
                  //  'Inicia sesión con tu cuenta.';
            }
        }


        function checkLoginState() { // Called when a person is finished with the Login Button.
            FB.getLoginStatus(function(response) { // See the onlogin handler
                statusChangeCallback(response);
            });
        }


        window.fbAsyncInit = function() {
            FB.init({
                appId: '1049037895539213',
                cookie: true, // Enable cookies to allow the server to access the session.
                xfbml: true, // Parse social plugins on this webpage.
                version: 'v8.0' // Use this Graph API version for this call.
            });


            FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
                statusChangeCallback(response); // Returns the login status.
            });
        };

        function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
            console.log('Bienvenido!  Recuperando su informaión.... ');
            location.href = "index2.php";
            FB.api('/me', {
                fields: 'name,email,picture.type(large)'
            }, function(response) {
                console.log('Inicio exitoso para: ' + response.name);

                document.getElementById('status').innerHTML =
                    'Gracias por loguearte como, ' + response.name;
            });
        }
    </script>

    </div>
    <form class="form-signin">
        


        <!--
        <div class="checkbox mb-3">
            <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
        </div>
-->

       
        <br>
        
        <br>
        <div id="status"></div>
        <!--  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>-->
        
        <!--<p class="mt-3 mb-3 text-muted">¿Olvidaste tu contraseña?</p>-->
     

    </form>
    <!--Button de login -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Load the JS SDK asynchronously -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
                        
						</form>
			    </div>
            </div>
         </div>
    </section>

   

   


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>