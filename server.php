<?
$ip = "localhost";
$login = "root";
$senha = "";

$banco = "tutorial";

$conn = mysqli_connect($ip,$login,$senha,$banco);

if($conn){
    echo "Connected";
}
else {
    echo "Não Deu";
}

?>