<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <title>Contenu</title>
</head>
<body>

<?php require_once('./templates/header.php');?>

<?php if(isset($_SESSION['name'])) {

  if (isset($_SESSION['destination']) && $_SESSION['destination'] === 'plage') {?>
<main>
  <div class="image_destin">
    <img width= "50%" src="/img/contenu.jpg" alt="">
  </div>
</main>
<?php } else if(isset($_SESSION['destination']) && $_SESSION['destination'] === 'montagne') { ?>
  <main>
  <div class="image_destin">
    <img width= "" height="90%" src="/img/montagne.jpg" alt="">
  </div>
</main>
<?php }

} else {?>
<div class="forbidden">
  <h3>Connectez-vous pour avoir accès a ce contenu</h3>
</div>
<?php }?> 




<?php require_once('./templates/footer.php');?>
</body>
</html>