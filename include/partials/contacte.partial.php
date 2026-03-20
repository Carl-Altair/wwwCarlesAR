<h2>Contacte</h2>
<form action="include/processaContacte.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="assumpte">Assumpte:</label>
    <input type="text" id="assumpte" name="assumpte" required><br><br>
    <label for="missatge">Missatge:</label>
    <textarea id="missatge" name="missatge" placeholder="Escriu el teu missatge aquí..."></textarea><br><br>
    <input type="submit" value="envia" name="envia">
    <input type="reset" value="Reset">
</form>