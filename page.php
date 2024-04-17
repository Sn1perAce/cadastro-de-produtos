<?php
session_start();
    require_once("server.php");
    if (!empty($_SESSION["message"])) {
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
?>

<form action="list.php" method="get" accept-charset="utf-8">

    Nome do Produto
    <input type="text" name="ProductName"> <br>

    Preço do Produto
    <input type="text" name="Price"><br>

    Código do Produto
    <input type="number" name="Code"><br>

    <input type="submit" name="Send">

</form>