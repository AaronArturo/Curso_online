<!-- Cmbio de imagen -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Actualizar foto perfil</h4>
            </div>
            <div class="modal-body">
                <form action="../php/actualizarFoto.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                    <input type="file" name="fotoNueva" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
            </div>
            <div class="modal-footer">
                    <input type="submit" name="btn" value="Actualizar" class="btn btn-primary"></input>
                </fomr>
            </div>
        </div>
    </div>
</div>
<!-- HELP -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Help</h4>
            </div>
            <div class="modal-body">
                <p>En caso de que la actualizacion de la foto de perfil no se vea reflejada, cierre sesion e inicie sesion nuevamente, si esto no funciona solicite apoyo tecnico </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/ripples.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../js/main.js"></script>
<script>
    $.material.init();
</script>