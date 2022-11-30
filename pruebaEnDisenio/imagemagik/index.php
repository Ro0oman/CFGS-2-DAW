<form  action="upload-file.php" method="post" enctype="multipart/form-data">
    <label for="fileTest">Selecciona una imagen/archivo:</label>
    <input id="fileTest" name="fileTest" type="file">
    <button type="submit">Guardar</button>
</form>

<?php
$salida = shell_exec('convert fall.jpg fall.png 2>&1');
echo "<pre>$salida</pre>";
?>