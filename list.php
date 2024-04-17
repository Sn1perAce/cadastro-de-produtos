<?
session_start();
    require_once("server.php");
    
    echo "Connected";

    if (isset($_GET["Send"])){
        if (!empty($_GET["ProductName"]) || !empty($_GET["Price"]) || !empty($_GET["Code"]) ){
            $nome=$_GET["ProductName"];
            $preco=$_GET["Price"];
            $codigo=$_GET["Code"];

            $comando="INSERT INTO produtos(nome, preco, codigo) VALUES ('$nome','$preco','$codigo')";
            $enviar=mysqli_query($conn,$comando);

            if ($enviar){
                $_SESSION['message']="Produto Cadastrado";
                header("location:page.php");
            } 
            else {
                $_SESSION['message']="Erro ao se comunicar com banco de dados";
                header("location:page.php");
                exit;
            }
        }
    }
?>