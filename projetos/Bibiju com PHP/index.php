<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/styleIndex.css">
    <style>
    
    /* SCROLL DO MOUSE */
::-webkit-scrollbar {
    width: 8px; /* Barra de rolagem mais fina */
}

::-webkit-scrollbar-track {
    background-color: #f0f0f0; /* Cor do fundo da faixa */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background-color: #888; /* Cor cinza da "polegar" da barra de rolagem */
    border-radius: 10px;
    border: 2px solid #f0f0f0; /* Borda para dar o efeito de "sombra" no lado de fora */
}


/* SCROLL DO MOUSE */
    
    .button-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 1000;
    }

    .button {
      width: 80px;
      height: 80px;
      background-color: #0078FF;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      transition: box-shadow 0.3s ease;
    }

    .button:hover {
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    .button-icon {
      font-size: 30px;
      color: white;
      font-weight: bold;
      font-family: Arial, sans-serif;
    }

    .icon-group {
      display: none;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 10px;
    }

    .icon-group.active {
      display: flex;
      animation: fadeIn 0.3s ease;
    }

    .icon {
      width: 60px;
      height: 60px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .icon:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    .icon span {
      font-size: 20px;
    }
    .logout{
      text-decoration: none;
      padding: 19px;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
    
    <header>
        <a href="index.php" class="logo">BIBIJUNEWS.</a>
        <nav>
            <a href="colecoes.php" class="but-nav">Coleções</a>
            <a href="loja.php" class="but-nav">Loja</a>
            <a href="Contato.php" class="but-nav">Contato</a>
        </nav>
    </header>
    
    <main>
        <center>
        <div class="banner">
            <a href="#">
                <img src="imagens/main/bibiju.svg" alt="Bibiju">
                <h1 class="titulo-imagem">NOVO SITE: BIBIJU</h1>
            </a>
        </div>

        <div class="banner">
            <a href="colecao2.php">
                <img src="imagens/main/rocky.svg" alt="Bibiju">
                <h1 class="titulo-imagem">A$AP ROCKY: APRESENTA</h1>
            </a>
        </div>

        <div class="banner">
            <a href="#">
                <img src="imagens/main/speed.svg" alt="Bibiju">
                <h1 class="titulo-imagem">ISHOWSPEED: PARCERIA</h1>
            </a>
        </div>

        <div class="banner">
            <a href="#">
                <img src="imagens/main/neymar.svg" alt="Bibiju">
                <h1 class="titulo-imagem">NEYMAR: PARCERIA</h1>
            </a>
        </div>
    </center>
    </main>

    <div class="button-container">
        <div class="icon-group" id="iconGroup">
          <div class="icon"><span>🛒</span></div>
          <div class="icon"><span>👤</span></div>
          <div class="icon"><span><a href="logout.php" class="logout">➡</a></span></div>
        </div>
        <div class="button" onclick="toggleIcons()">
          <div class="button-icon">Λ</div>
        </div>
      </div>
    
      <script>
        function toggleIcons() {
          const iconGroup = document.getElementById('iconGroup');
          iconGroup.classList.toggle('active');
        }
      </script>
</body>
</html>