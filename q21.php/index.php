
<form action="processa.php" method="post">
    <label>Quantas pessoas?</label>
    <input type="number" name="q">
    <input type="submit" value="Gerar Campos">
</form>

<?php
if (isset($_GET["q"])){
    $q = $_GET["q"];
    for($c = 1; $c <= $q; $c++){ ?>

    <p>
            <label>Pessoa <?php echo $c; ?> (Nome-Sexo-Idade-Saúde):</label>
            <input type="text" name="pessoa[]">
        </p>
    <?php } ?>
    
    <input type="submit" value="Verificar Todos">
    </form>
<?php } ?>
   













