<?php
if (empty($_POST['busqueda'])) {
    header("Refresh:1;url=./form_libros.php?mensaje=Falta el campo busqueda!!");
    echo '<h1>En breve le redirigiremos a la página principal.</h1>';

}else{
    echo "Busqueda: "; 
    echo $_POST['busqueda']; 
    echo "<br/>";
    echo "Categoria: "; 
    echo $_POST['categoria']; 
    echo "<br/>";
    echo "Tipo: "; 
    echo $_POST['tipo']; 
    echo "<br/>";
}

?>