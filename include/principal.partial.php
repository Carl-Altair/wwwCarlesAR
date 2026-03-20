<?php 
    $apartat = isset($_GET['apartat']) ? $_GET['apartat'] : 'inici';
?>

<main>
    <?php 
        $archivo_a_cargar = __DIR__ . '/partials/' . $apartat . '.partial.php';

        if (file_exists($archivo_a_cargar)) {
            include $archivo_a_cargar;
        } else {
            include __DIR__ . '/partials/inici.partial.php';
        }
    ?>
</main>