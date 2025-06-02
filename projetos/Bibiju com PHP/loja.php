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
    <link rel="stylesheet" href="Css/styleLoja.css">
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
    
    body {
      height: 200vh; /* Para testar o scroll */
      margin: 0;
      background-color: #ffff;
    }

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
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .icon:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.9);
    }

    .icon span {
      font-size: 20px;
      text-decoration: none;
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
    a>img {
      box-shadow: 10px 10px 6px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>
<body>
    
    <header>
        <a href="loja.php" class="logo">BIBIJUSHOP.</a>
        <nav class="menunav">
            <a href="index.php" style="font-size: 20px">noticías</a>
            <a href="colecoes.php" style="font-size: 20px">coleções</a>
            <a href="Contato.php" style="font-size: 20px">Contato</a>
        </nav>
    </header>
    
    <main>
        <div class="conteiner">
            <a href="#">
                <img src="imagens/loja/item1.svg" alt="colar1">
                <h2>COLAR CORDÃO BAIANO 4MM, 45 CM</h2>
                <H1>R$ 289,90</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item2.svg" alt="colar2">
                <h2>CORRENTE BICI</h2>
                <H1>R$ 379,99</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item3.svg" alt="colar3">
                <h2>CORRENTES BICI</h2>
                <H1>R$ 999,99</H1>
            </a>
        </div>

        <div class="conteiner">
            <a href="#">
                <img src="imagens/loja/item4.svg" alt="colar4">
                <h2>ANEL DE OURO 18K/750 DIAMANTADO ARO DUPLO</h2>
                <H1>R$ 1.119,97</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item5.svg" alt="colar5">
                <h2>ANEL DE FLOR VERMELHA OURO 18K COM 34 PONTOS DE DIAMANTE</h2>
                <H1>R$ 9.700,00</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item6.svg" alt="colar6">
                <h2>RING YEZZUS COLECTION</h2>
                <H1>R$ 90.00</H1>
            </a>
        </div>

        <div class="conteiner">
            <a href="#">
                <img src="imagens/loja/item7.svg" alt="colar7">
                <h2>MIX ANÉIS SLIM COM PEDRAS COLORIDAS ZIRCÔNIA</h2>
                <H1>R$ 11.100,00</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item8.svg" alt="colar8">
                <h2>ANEL DELICADO COM ARO VAZADO EM DUPLO BRANCO E AMARELO</h2>
                <H1>R$ 1.000,00</H1>
            </a>
            <a href="#">
                <img src="imagens/loja/item9.svg" alt="colar9">
                <h2>PULSEIRA GRUMET EM OURO 10K COM FECHO GAVETA E PRESILHA</h2>
                <H1>R$ 4.200,00</H1>
            </a>
        </div>
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