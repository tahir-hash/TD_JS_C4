<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../exercice6/css/style.css">
  <title>Date suivante</title>
</head>
<body>

  <div class="contain">
      <form action="controller.php" method="post">
      <div class="boite">
                  <label for="">Entrer le nombre a</label>

        <div class="input">
            <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"required> 
          <?php if(isset($_SESSION['error']['a'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
          <?php endif?>
        </div>
          <br>   <label for="">Entrer le nombre b</label>
          <div class="input">
         
          <input type="text" name="b" id="" value="<?php if(!isset($_SESSION['error']['b']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['b']; else ''  ?>"required >
          <?php if(isset($_SESSION['error']['b'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
          <?php endif?>
          </div>
          <br>   <label for="">Entrer le nombre c</label>
          <div class="input">
          
          <input type="text" name="c" id="" value="<?php if(!isset($_SESSION['error']['c']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['c']; else ''  ?>"required>
            <?php if(isset($_SESSION['error']['c'])):?>
                    <span style="color:red"><?php echo $_SESSION['error']['b'] ?></span>
            <?php endif?>
          </div>
       
          <br>

          <input type="submit" name="btn_ok" id="" value="Calculer">

      </div>
        
    </form>
  </div>
    
</body>
</html>
