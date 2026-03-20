<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<?php
    $apartat = isset($_GET['apartat']) ? $_GET['apartat'] : 'inici';

    if (isset($_POST['envia'])) {
        if (empty($_POST['email']) || empty($_POST['assumpte'])) {
            die('Error: Els camps Email i Assumpte són obligatoris.');
        } else {
            $email = trim(htmlspecialchars($_POST['email']));
            $assumpte = trim(htmlspecialchars($_POST['assumpte']));
            $missatge = !empty($_POST['missatge']) ? trim(htmlspecialchars($_POST['missatge'])) : 'Valor Buit';
        }
    }
?>
<body>
    <?php 
        include 'cap.partial.php';
        $path = "../";
        include 'menu.partial.php';
    ?>
    <main>
        <h2>Dades de Missatge de Contacte</h2>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Assumpte:</strong> <?php echo $assumpte; ?></p>
        <p><strong>Missatge:</strong> <?php echo $missatge; ?></p>
    </main>
    <?php
        include 'peu.partial.php';
    ?>
</body>
</html>