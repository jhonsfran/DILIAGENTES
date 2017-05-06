
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

