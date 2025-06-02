<?php

    $success = 0;
    $user = 0;


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "Select * from `cadastro` where usuario = '$usuario'";
        $result = mysqli_query($con,$sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                // echo "User Already Exist!";
                $user = 1;
                echo "<script> alert('Usuario já existente')</script>";
            }else{
                $sql = "insert into `cadastro` (usuario,senha) values ('$usuario','$senha')";
                echo "<script> alert('Conta criada com sucesso!')</script>";
                $result = mysqli_query($con,$sql);

                if($result){
                    // echo "Sign Up Successful";
                    $success = 1;
                    header('location:Login.php');
                }else{
                    die(mysqli_error($con));
                }
            }
        }
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBIJU | Crie sua conta</title>
    <link rel="stylesheet" href="Css/styleSignIn.css">
</head>
<body>
    
    <header>
        <a href="#" class="logo">BIBIJU</a>
    </header>
    
    <div class="conteiner">
        <form action="SignIn.php" method="POST">
            <h3>Criar Conta</h3>
            <label for="nome">Usuario</label>
            <input type="text" id="nome" name="usuario" required>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
            <button type="submit">Criar Conta</button>
            <a href="Login.php" class="login">Login</a>
        </form>
    </div>

  </script>

</body>
</html>