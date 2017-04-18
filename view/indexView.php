<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo PHP Postgresql POO MVC</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        <form action="<?php echo $helper->url("prueba","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir usuario</h3>
            <hr/>
            Id: <input type="text" name="prueba_id" class="form-control"/>
            Nombre: <input type="text" name="prueba_nombre" class="form-control"/>
            <input type="submit" value="agregar" class="btn btn-success"/>
        </form>
         
        <div class="col-lg-7">
            <h3>Prueba</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allpruebas as $prueba) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $prueba->prueba_id; ?> -
                <?php echo $prueba->prueba_nombre; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("prueba","borrar"); ?>&id=<?php echo $prueba->prueba_id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
        <footer class="col-lg-12">
            <hr/>
           Ejemplo PHP Postgresql POO MVC - Jhoan Franco - Copyright &copy; <?php echo  date("Y"); ?>
        </footer>
    </body>
</html>