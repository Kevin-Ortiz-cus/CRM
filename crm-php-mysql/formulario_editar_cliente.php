
<?php
include_once "encabezado.php";
include_once "funciones.php";
$cliente = obtenerClientePorId($_GET["id"]);
$ciudads = obtenerciudads();
?>
<div class="row">
    <div class="col-12">
        <h1>Editar cliente</h1>
        <form action="actualizar_cliente.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente->id ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $cliente->nombre ?>" required type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input value="<?php echo $cliente->edad ?>" required type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
            </div>
            <div class="form-group">
                <label for="ciudad">ciudad</label>
                <select class="form-control" name="ciudad" id="ciudad">
                    <?php foreach ($ciudads as $ciudad) { ?>
                        <option <?php
                                if ($ciudad === $cliente->ciudad) {
                                    echo "selected";
                                } ?> value="<?php echo $ciudad ?>"><?php echo $ciudad ?></option>
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