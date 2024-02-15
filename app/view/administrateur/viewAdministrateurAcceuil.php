 
<!-- ----- debut de la page cave_acceuil -->
<?php
session_start();
$_SESSION["id"]=$results[0]->getId();
$_SESSION["login"]=$results[0]->getLogin();
$_SESSION["nom"]=$results[0]->getNom();
$_SESSION["prenom"]=$results[0]->getPrenom();
?>
<?php include $root . '/app/view/fragment/fragmentCaveHeader.html';  ?>
<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.php'; 
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html'; 
    ?>
  </div>   
  
  
  <?php
  include $root . '/app/view/fragment/fragmentCaveFooter.html'; 
  ?>

  <!-- ----- fin de la page cave_acceuil -->

</body>
</html>