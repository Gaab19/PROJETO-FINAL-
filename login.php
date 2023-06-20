<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoA3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div id="corpo-form">
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        } 
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        } 
         input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
         }
         button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
         }
         button:hover{
            background-color: deepskyblue;
            cursor: pointer;
         }
    </style>
    <center>
    <h1>Bem Vindo (a) Usuario(a)</h1>
    <form id="login" action="logado.php" method="POST">
        <input type="text" placeholder="Login" name="login" required>
        <br><br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br><br>
        <input type="submit" id="entrar" value="Entrar"
    
    </center>    
</form>         
</div>          
</body>
</html>