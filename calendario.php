<?php include_once 'includes/templates/header.php';?>

<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>

    <?php
    try {
        require_once('includes/funciones/bdconexion.php');//Conexion a la BD
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //Es importante dejar un espacio entre la última letra y las comillas
        $sql .= " FROM eventos "; //En todos los casos!
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="calendario">

        <?php
        $calendario = array();
        while( $eventos = $resultado->fetch_assoc() ) {

        //Obtiene la fecha del evento

        $fecha = $eventos['fecha_evento'];
        $categoria = $eventos['cat_evento'];
        $hora = $eventos['hora_evento'];
        $invitado = $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado'];

        $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['cat_evento'],
            'icono' => $eventos['icono'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
        );
        $calendario[$fecha][] = $evento;

        ?>
        <div class="calendario">
        <?php } //While de fetch_asooc() ?>
        <?php
        //Imprime todos los eventos
        foreach($calendario as $dia => $lista_eventos) { ?>
        <h3>
            <i class="fa fa-calendar"></i>
            <?php
            //Cambia el texto de las fechas
            //Unix
            //setlocale(LC_TIME, 'es_ES.UTF-8');
            //Windows
            setlocale(LC_TIME,'spanish');

            echo utf8_encode(strftime("%A, %d de %B del %Y", strtotime($dia) ) ); ?>
        </h3>
            <?php foreach ($lista_eventos as $evento){ ?>
                <div class="dia">
                    <p class="titulo"><?php  echo $evento['titulo']; ?></p>
                    <p class="hora">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php  echo $evento['fecha']. " ". $evento['hora']; ?>
                    </p>
                    <p>
                    <i class="fa <?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                    <?php  echo $evento['categoria']; ?></p>
                    <p>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php  echo $evento['invitado']; ?>
                    </p>


                </div>

            <?php } //fin forech eventos?>
        <?php } //fin foreach de dias ?>


    </div>
    <?php
    $conn->close();//cerramos la conexión a la BD
    ?>
    </div><!--.calendario-->

</section>
<?php include_once 'includes/templates/footer.php'; ?>
