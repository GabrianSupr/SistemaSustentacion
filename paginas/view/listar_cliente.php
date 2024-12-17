<?php
    require_once '../../autoload.php';
?>
<!DOCTYPE html>
<html lang="es">

    <?php 
    $ruta = "../..";
    $titulo = "Aplicacion de Ventas - Lista Producto";

    $assetsLoader = new scriptController();

    echo str_replace('href="assets/', 'href="../assets/', $assetsLoader->getCssLinks02());
    echo str_replace('href="assets/', 'href="../assets/', $assetsLoader->getFavicons02());


    ?>
    
<body>
    <?php
    include("../includes/header.php");
    //include("../includes/cargar_clases.php");

    //$crudcliente = new CRUDClientes();
    //$rs_client = $crudcliente-> ListarClientes();

    ?>
    <div class="main-content">
    <div class="container mt-3">
            <header>
                <nav>
                <h1><i class="fas fa-list-alt"></i> Lista de Clientes </h1>
                <hr/>

            </header>    
            <div class="btn-group col-md-5" role="group">
    <a href="registrar_clientes.php" class="btn btn-outline-primary btn-lg">
        <i class="fa fa-plus-circle"></i> Registrar
    </a>
    <a href="consultar_clientes.php" class="btn btn-outline-primary btn-lg">
        <i class="fas fa-search"></i> Consultar
    </a>
    <a href="filtrar_clientes.php" class="btn btn-outline-primary btn-lg">
        <i class="fas fa-filter"></i> Filtrar
    </a>
</div>
            </nav>
<section>
<article>
<div class="row justify-content-center mt-3">
<div class="col-md-8">
<table class="table">
<thead>
    <tr class="table-primary">
        <th>N°</th>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th colspan="3">Acciones</th>
    </tr>
    
</thead>

    <?php
        $i = 0;
        foreach($rs_client as $cli){    
            $i++;            
    ?>
    <tr class="reg_client">
        <td><?=$i?></td>
        <td class="codclie"><?= $cli->ClienteID; ?></td>
        <td class="clie"><?= $cli->Nombre; ?></td>
        <td><?= $cli->Apellido; ?></td>
        <td><?= $cli->Dirección; ?></td>
        <td><?= $cli->Teléfono; ?></td>
        <td><?= $cli->CorreoElectrónico; ?></td>
        <!--<td><a href="mostrar_cliente.php?codclien=<?= $cli->codigo_cliente; ?>" class="btn_mostrar btn btn-outline-info"><i class="fa fa-eye"></i></a></td>-->
        <td><a href="#" class="btn_editar btn btn-outline-primary"><i class="fas fa-edit"></i></a></td>
        <td><a href="#" class="btn_borrar btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a></td>

    </tr>
    <?php
    }
    ?>
                        
                    </table>
                </div>
            </div>
        </article>
    </section>
    <?php
       include ("../includes/pie.php");
       ?>
</div>

<!-- Modal de confirmación de eliminación -->
<div class="modal fade" id="md_borrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-danger" id="staticBackdropLabel"><i class="fas fa-trash-alt"></i>Borrar producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <!-- Mensaje de confirmación -->
                        <div class="row justify-content-center">
                            <h5 class="card-title">¿Seguro que quieres borrar este registro?</h5>
                            <p class="card-text">
                                <span class="lbl_clie"></span> (<span class="lbl_codclie"></span>)
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Botón para cerrar el modal -->
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <!-- Botón para confirmar la eliminación -->
                        <a href="#" class="btn_borrar btn btn-outline-danger">Borrar</a>
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</div>
</div>

<?php
    echo str_replace('href="assets/', 'href="../assets/', $assetsLoader->getJsScripts02());
  ?>
</body>
</html>