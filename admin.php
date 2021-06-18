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
  <title>Admin</title>
</head>
<body>
  <?php require_once('./templates/header.php');?> 
  
  <main class="main_admin">
  <h1 class="title_admin">Vos vacances!</h1>
  <div class="form_admin">
    <form action="/controllers/validation.php" method="post" class="form_admin">
        <fieldset>
          <legend for="destination">Choisissez vos vacances de rêve</legend>
          <br>
            <div class="form-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="destination" value="plage" >
                        Plage
                    </label>
                </div>
                <br>
                <div class="radio">
                    <label>
                        <input type="radio" name="destination" value="montagne" >
                        Montagne
                    </label>
                </div>
                
            </div>
            <br>
      </fieldset>
      <br>
      <fieldset>
        <legend for="destination">Choisissez le pays</legend>
        <br>
          <select name="country" id="country">
            <option value="Islande">Islande</option>
            <option value="Espagne">Espagne</option>
            <option value="France">France</option>
            <option value="Italie">Italie</option>
          </select>
          <br>
      </fieldset>
      <br>
      <button type="submit">Submit votre choix</button>

    </form>
  </div>
  </main>
  <?php require_once('./templates/footer.php');?>
  
</body>
</html>