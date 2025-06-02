<?php

    $login = 0;
    $invalid = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "Select * from `cadastro` where usuario = '$usuario' and senha = '$senha'";
        $result = mysqli_query($con,$sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                // echo 'Login Successfuly';
                $login = 1;
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('location:index.php');
            }else{
                // echo 'Invalid Data';
                $invalid = 1;
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBIJU | Entre na sua Conta</title>
    <link rel="stylesheet" href="Css/styleLogin.css">
</head>
<body>
    
    <header>
        <a href="#" class="logo">BIBIJU</a>
    </header>
    
    <div class="conteiner">
        <form action="" method="POST">
            <h3>Login</h3>
            <label for="nome">Usuario</label>
            <input type="text" id="nome" name="usuario" required>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Logar</button>
            <a href="SignIn.php" class="login">Crie sua conta</a>
        </form>
    </div>

</body>
</html>