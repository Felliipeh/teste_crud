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
     
             <div>
          <label for="nome">Nome:</label>
          <input type="text" id="nome"  name="nome"/>
        </div>
        <div>
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" />
        </div> 
          <div>
            <label for="senha">senha:</label>
            <input type="password" id="nome" name="senha" />
          </div>
<button type="submit">cadastra</button>
      </form>
      
</body>
</html>