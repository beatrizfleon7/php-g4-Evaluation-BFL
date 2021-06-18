  
<?php session_start()?>

<header id="header_background">
  <div class="container_header">
     <nav class="nav">
       <ul class="nav-list">
         <li><a href="./index.php">Bienvenue</a></li>
         <li><a href="./destinations.php">Destinations</a></li>
         <?php if(isset($_SESSION['name'])){?>
          <li><a href="./admin.php">Bonjour, <?= $_SESSION['name']?>!</a></li>
          <li><a href="/controllers/logout.php">Déconnexion</a></li>
         <?php } else { ?>
          <li><a href="/connection.php">Connectez-vous</a></li>
         <?php } ?> 
       </ul>
     </nav>
   </div>
 </header>
