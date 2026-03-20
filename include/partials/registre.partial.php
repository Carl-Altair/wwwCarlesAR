<h2>Registre</h2>
<form action="include/processaRegistre.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>
    <label for="cognoms">Cognoms:</label>
    <input type="text" id="cognoms" name="cognoms"><br><br>
    <label for="Adreca">Adreça:</label>
    <input type="text" id="Adreca" name="Adreca" placeholder="Adreça"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="contrasenya">Contrasenya:</label>
    <input type="password" id="contrasenya" name="contrasenya" required><br><br>
    <label for="Telefon">Telefon:</label>
    <input type="text" id="Telefon" name="Telefon" placeholder="Telefon"><br><br>
    <label for="donacio">Donació:</label>
    <select id="donacio" name="donacio">
        <option value="">-- Tria una opció --</option>
       <!--- <option value="manzana" selected>Manzana</option>
        <option value="banana">Banana</option>
        <option value="naranja">Naranja</option> --->
    </select><br><br>
    <label>Continent:</label>
    <label for="europa">Europa:</label>
    <input type="radio" id="europa" name="continent" value="europa">
    <label for="asia">Àsia:</label>
    <input type="radio" id="asia" name="continent" value="asia">
    <label for="africa">Àfrica:</label>
    <input type="radio" id="africa" name="continent" value="africa">
    <label for="america">Amèrica:</label>
    <input type="radio" id="america" name="continent" value="america">
    <label for="oceania">Oceania:</label>
    <input type="radio" id="oceania" name="continent" value="oceania"><br><br>
    <input type="submit" name="envia" id="envia" value="Envia">
    <input type="reset" value="Reset">
</form>