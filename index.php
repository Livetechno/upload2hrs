<?php 
/*
// Llamada a configuracion
*/

require_once('class/class.general.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload 2HRS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Upload 2HRS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="usuario.php">Usuarios</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">

            <?php
                echo $general->estado($_GET["log"], $_GET["msg"]);
            ?>

                <h1>Upload 2HRS</h1>
                <p class="lead">Por favor, seleccione un archivo a subir.</p>
                <form action="inc/upload.php" method="post" enctype="multipart/form-data" role="form">
                      <div class="form-group">
                        <label for="file">Archivo a subir:</label>
                        <input type="file" class="form-control" name="archivo" required>
                      </div>
                      <div class="form-group">
                        <label for="privado">Privado:</label>
                        <input type="checkbox" name="privado" value="1">
                      </div>
                      <button type="submit" class="btn btn-default">Cargar archivo</button>
                </form>
                <br>
                <table class="table table-bordered">
                    
                    <?php 
                        $lista  =   $general->listaUpload();
                        foreach ($lista as $key => $value) {
                    ?>
                    <tr>
                        <td><img width="150" height="150" src="upload/<?php echo $value['file']; ?>"></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </table>


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
