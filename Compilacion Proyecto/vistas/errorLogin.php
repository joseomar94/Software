<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHYLINE </title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="../img/icono.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body>
	<!-- Static navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">PhyLine</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="about.php">Acerca de</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
            <!-- Static navbar -->


		<hr class="featurette-divider">

            <div class="container">
				<div class="login-container">
			            <div id="output"></div>
			            <div class="avatar"></div>
			            <div class="form-box">
                            Error de autenticación Vuelva a intentarlo
			                <form name='form1' action="../controladores/cor_Login.php" method="post">
			                    <input required name="user" type="text" placeholder="username">
			                    <input required name="password" type="password" placeholder="password">
			                    <button class="btn btn-info btn-block login" type="submit">Login</button>
			                </form>
			            </div>
			        </div>
			        
			</div>


		<hr class="featurette-divider">


            <!-- +++++ Footer Section +++++ -->

            <div id="footer">
                    <div class="container">
                        

                            <div class="row">
                                    <div class="col-lg-4">
                                            <h4>Elaborado por FastSoft</h4>
                                            <p>
                                                   &copy; CopyRight UniSimon,<br/>
                                                    +57 3218461698, <br/>
                                                    Malambo, Colombia.
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Paginas</h4>
                                            <p>
                                                    <a href="https://www.facebook.com/jcabarcasguti">Facebook</a><br/>
                                                    <a href="https://twitter.com/joseomar94">Twitter</a>
                                            </p>
                                    </div><!-- /col-lg-4 -->

                                    <div class="col-lg-4">
                                            <h4>Acerca de PhyLine</h4>
                                            <p>Sistema encargado de la evaluación de test psicológicos.</p>
                                    </div><!-- /col-lg-4 -->

                            </div>

                    </div>
            </div>




    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- <script src="../js/login.js"></script> -->

</body>
</html>