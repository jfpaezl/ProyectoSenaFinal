<div class="base-delantal">
    <div class="select">
        <label for="modelo">Modelos</label>
            <select name="modelo[modelo]">
                <option value="">--Seleccione un Modelo--</option>
                <option value="Delantal en Cuero">Delantal en Cuero</option>
                <option value="Delantal en Cuerina">Delantal en Cuerina</option>
                <option value="Delantal en Tela">Delantal en Tela</option>
            </select>
    </div>
    <div class="select">
        <label for="imagen">imagen</label>
        <input type="file" id="imagen" name="imagen" accept="image/jpeg image/png">
        <?php if ($objetoModelo->imagen) { ?>
            <img src="/imagenes/<?php echo s($objetoModelo->imagen);?>" alt="imagen" class="imagen-tabla">
        <?php }?>
    </div>
</div>
<div class="select">
    <label for="">Descripcion</label>
    <textarea id="descripcion" name="modelo[descripcion]"><?php echo s($objetoModelo->descripcion);?></textarea>
</div>
<div class="select">
    <label for="precio">Precio</label>
    <input type="number" id="precio" name="modelo[precio]" placeholder="precio modelo" min="0" value="<?php echo s($objetoModelo->precio);?>"></input>  
</div>