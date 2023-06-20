<!DOCTYPE html>
<html>
<head>
  <title>Tela de Cadastro</title>
 
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 100px auto;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastro</h1>
     <form id="cadastro" action="cadastro.php" method="POST">
     
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" placeholder="Digite seu login" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
    <a href="cadastrar.php"></strong></a>
  </div>
</body>
</html>