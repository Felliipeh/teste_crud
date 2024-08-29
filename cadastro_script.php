<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cadastro.css">
</head>
<body>
    <form action="cadastro_script.php" method="post">
     <?php 
include("CONEXAO.PHP");
     $nome= $_POST["nome"];
     $email= $_POST["email"];
     $senha= $_POST["senha"];

     $sql="INSERT INTO `usuario`(`NOME`, `EMAIL`, `SENHA`) VALUES ('$nome','$email','$senha')";

 if (mysqli_query($conn,"$sql")) {
echo "$nome cadastrado com sucesso ! ";
 } else
 echo "$nome não foi cadastrado";
     ?>
         

      </form>
      
</body>
</html>