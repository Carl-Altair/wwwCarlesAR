<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="../css/estils.css">
</head>
<?php
    if (isset($_POST['envia'])) {
        if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['contrasenya'])) {
            die('Error: Els camps Nom, Email i Contrasenya són obligatoris.');
        } else {
        $nom = trim($_POST['nom']);
        $cognoms = !empty($_POST['cognoms']) ? trim($_POST['cognoms']) : 'Valor Buit';
        $adreca = !empty($_POST['adreca']) ? trim(htmlspecialchars($_POST['Adreca'])) : 'Valor Buit';
        $email = trim(htmlspecialchars($_POST['email']));
        $contrasenya = trim(htmlspecialchars($_POST['contrasenya']));
        $telefon = !empty($_POST['telefon']) ? trim(htmlspecialchars($_POST['Telefon'])) : 'Valor Buit';
        $donacio = !empty($_POST['donacio']) ? trim(htmlspecialchars($_POST['donacio'])) : 'Valor Buit';
        $continent = isset($_POST['continent']) ? trim(htmlspecialchars($_POST['continent'])) : 'Valor Buit';
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
    <h2>Dades de Registre d'Usuari</h2>
    <p><strong>Nom:</strong> <?php echo $nom; ?></p>
    <p><strong>Cognoms:</strong> <?php echo $cognoms; ?></p>
    <p><strong>Adreça:</strong> <?php echo $adreca; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Contrasenya:</strong> <?php echo $contrasenya; ?></p>
    <p><strong>Telefon:</strong> <?php echo $telefon; ?></p>
    <p><strong>Donació:</strong> <?php echo $donacio; ?></p>
    <p><strong>Continent:</strong> <?php echo $continent; ?></p>
    </main>
    <?php
        include 'peu.partial.php';
    ?>
</body>
</html>