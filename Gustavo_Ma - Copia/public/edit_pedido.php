<?php 
use Database\Database;

    if( isset($_GET['cod'])) {
        $cod = $_GET['cod'];
    } else {
        header('location: ../public/lista.php');
    }

require_once "../src/views/header_nav.php";  ?>

<?php
 require_once "../src/model/Database.php";
 $db = new Database();
 $resulDb = $db->select(
     "SELECT * FROM pedidos WHERE cod = $cod; "
 );
 //var_dump($resulDb);
?>

<form method="post" action="../banco/atualiza.php" onsubmit="confirm('Atualizar pedido ?'); ">
    <h2>Atualização de Dados</h2>
    <h3> Codigo: </h3>
    <input type="text" name="cod" value="<?=$resulDb[0]->cod?>" readonly />
    <h3> Itens: </h3>
    <input type="text" name="itens" value="<?=$resulDb[0]->itens?>" />
    <h3> Quantidade: </h3>
    <input type="number" name="quant" value="<?=$resulDb[0]->quant?>" min=1 />

    <h3> Pagamento: </h3>
             <div class="row">
                 <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" <?= ($resulDb[0]->pague == 'Dinheiro') ? 'checked' : '' ?> /> Dinheiro
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Pix" <?= ($resulDb[0]->pague == 'Pix') ? 'checked' : '' ?> /> Pix
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Cartão" <?= ($resulDb[0]->pague == 'Cartão') ? 'checked' : '' ?> /> Cartão
                </div>
             </div>

             <h3> Entrega: </h3>
             <div class="row">
                 <div class="cil-lg-5 col-sm-6">
                  <select name="entrega" required class="form-select">
                        <option value=" <?= $resulDb[0]->local ?>"><?= $resulDb[0]->local ?></option>
                        <option value="Alvorada">Alvorada</option>
                        <option value="Viamão">Viamão</option>
                        <option value="Porto Alegre">Porto Alegre</option>
                        <option value="Gravataí">Gravataí</option>
                        <option value="Cachoeirinha">Cachoeirinha</option>
                        <option value="Canoas">Canoas</option>
                  </select>
                 </div>
             </div>
             <br><br>
             <input type="submit" value="Atualizar pedido" class="bnt bnt-success">
             <input type="reset" value="Reiniciar" class="bnt bnt-warning">
</form>

<?php require_once "../src/views/footer.php";  ?>