<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice11/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="contain">
         <form action="controller.php" method="POST">
        <div class="boite"> 
            <label for="">Entrer un nombre</label>
        <div class="input">
         <input type="text" name="nbr" id="" value="<?php if(!isset($_SESSION['error']['nbr']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['nbr']; else ''  ?>"> 
        </div>
    
      <?php if(isset($_SESSION['error']['nbr'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['nbr'] ?></span>
      <?php endif?>
      <br>
        <input type="submit" name="submit" value=calculer>

        </div>
   
    </form>
    </div>
    <br>

</body>
</html>