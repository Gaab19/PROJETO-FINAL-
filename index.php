<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tela de Boas-Vindas</title>
  <style>
    body {
      background-color: #000000;
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 400px;
      margin: 100px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      text-align: center;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      color: #333;
      font-size: 32px;
      margin-bottom: 20px;
    }
    
    p {
      color: #777;
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 30px;
    }
    
    .btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
      font-size: 16px;
    }
    
    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bem-Vindo(a) !</h1>
    <p>Clique em começar para entrar no site!!</p>
    <a class="btn" href="login.php">Começar</a>
  </div>
</body>
</html>
<center>
<?php
if(isset($_SESSION['nome'])== null){
?> Visitante

<a href="login.php">Login</a>
<?php } else {
    echo $_SESSION['nome']; ?>
    

<a href="cadastrar.php"><h4>Cadastrar</h4></a>
<a href="logout.php"><h4>Sair</h4></a>
<a href="alterarsenha.php"><h4>alterar senha</a></h4>
<a href="lista.php"><h4>lista de usuários</a><br><h4>
    <?php } ?>

</center>
<?php ?>      

</body>
</html>