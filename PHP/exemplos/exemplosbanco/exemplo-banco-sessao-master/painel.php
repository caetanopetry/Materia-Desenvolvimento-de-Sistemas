<?php
   session_start();
  echo "<h2>Bem-vindo ao painel de controle!</h2>";
  echo "<p>Somente usuários autenticados podem acessar esta página.</p>";
  echo "<p>Olá, " . $_SESSION['nm_login'] . "!</p>";
  echo "<a href='logout.php'>Sair</a>";

