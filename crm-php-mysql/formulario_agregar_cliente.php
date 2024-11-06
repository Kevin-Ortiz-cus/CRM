
<?php
include_once "encabezado.php";
include_once "funciones.php";
$ciudads = obtenerciudads();
?>
<div class="row">
    <div class="col-12">
        <h1>Agregar cliente</h1>
        <form action="guardar_cliente.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input required type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="ciudad">ciudad</label>
                <select class="form-control" name="ciudad" id="ciudad">
                    <?php foreach ($ciudads as $ciudad) { ?>
                        <option value="<?php echo $ciudad ?>"><?php echo $ciudad ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>