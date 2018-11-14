<?php include_once 'includes/templates/header.php';?>


    <section class="seccion contenedor">
    <h2>Resumen Registro</h2>


        <?php if(isset($_POST['submit'])): //Valida que la variable exista
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $regalo = $_POST['regalo'];
            $total = $_POST['total_pedido'];
            $fecha = date('Y-m-d H:i:s');

            //PEDIDOS
        $boletos = $_POST['boletos'];
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];
            include_once 'includes/funciones/funciones.php';
            $pedido = productos_json($boletos, $camisas, $etiquetas);//Siempre que se usa una función que retorna valores, se debe asignar a una variable
            echo "<pre>";
            var_dump($pedido);
            echo "</pre>";
            ?>

        <?php endif; ?>


    </section>



<?php include_once 'includes/templates/footer.php'; ?>