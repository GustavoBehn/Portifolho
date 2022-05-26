<?php 
use Database\Database;

require_once "../src/views/header_nav.php";  ?>

<?php
require_once "../src/model/Database.php";
$db = new Database();
$resultDb = $db->select(
    "SELECT * FROM pedidos; "
);
?>

<table class="table container  mt-4 table-hover table-striped table-borderless">
    <thead>
        <th>Codigo</th>
        <th>Itens</th>
        <th>Quantidade</th>
        <th>Pagamento</th>
        <th>Local</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach($resultDb as $linha) :  ?>

            <tr>
                <td> <?= $linha->cod ?> </td>
                <td> <?= $linha->itens ?> </td>
                <td> <?= $linha->quant ?> </td>
                <td> <?= $linha->pague ?> </td>
                <td> <?= $linha->local ?> </td>
                <td> <a href = "../public/edit_pedido.php?cod=<?= $linha->cod ?>"><i class="bi bi-pencil"></i></a> 
                </td>
                <td> <a onclick="confirmaDelete(<?= $linha->cod ?>);" >Apagar</a> 
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "../src/views/footer.php";  ?>

<Script>
    function confirmaDelete(id) {
        if( confirm("Deseja excluir este registro?") ) {
            window.location.href='../banco/delete.php?cod='+id;
        } else {
            alert('Exclisão Cancelada!!')
        }
        
    }
</Script>