<?php
session_start();


?>
<style>
    h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>
<form method="POST">
    <ul>
        <label for="text">
            <h2>Preço do produto</h2>
        </label>
        <li style="list-style:none;">
            <input type="text" name="produto" id="produto">
        </li>
    </ul>
    <ul>
        <label for="text">
            <h2>Imposto em (%)</h2>
        </label>
        <li style="list-style:none;">
            <input type="text" name="imposto" id="imposto">
        </li>
    </ul>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_POST['produto']) && isset($_POST['imposto'])) {
    $produto = $_POST['produto'];
    $imposto = $_POST['imposto'];
    $impostoTotal = $produto * ($imposto / 100);
    $produtoValor = $produto - $impostoTotal;
?>
    <hr>
    <h2>Valor do produto: R$<?php echo $produto ?></h2>
    <h2>Taxa de imposto: <?php echo $imposto ?>%</h2>
    <hr>
    <h2>Valor do imposto: R$<?php echo $impostoTotal ?></h2>
    <h2>Valor do produto sem imposto: R$<?php echo $produtoValor ?></h2>
<?php
}

?>