<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Connection</title>
</head>
<body>
<?php require_once('./templates/header.php');?>
 <main>
    <form action="controllers/login.php" method="POST">
      <div class="imgcontainer">
        <img src="/img/avatar.png" alt="Avatar" class="avatar">
      </div>
      <div class= "container-login">
        <div class="container">

          <label for="name"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" value="">

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" value="">
            
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#a4d5d1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </div>
    
    </form>
  </main>
  <?php require_once('./templates/footer.php');?>
         
</body>
</html>