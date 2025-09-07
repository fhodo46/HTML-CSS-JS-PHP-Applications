<?php
$result=null;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $nrone = $_POST['firstnumber'];
  $nrtwo= $_POST['secondnumber'];
  $opn = $_POST['operation'];

  
  
  switch($opn){
    case 'addition': $result = $nrone + $nrtwo; break;
    case 'subtraction': $result = $nrone - $nrtwo; break;
    case 'multiplication': $result = $nrone * $nrtwo; break;

    case 'division': $result = $nrone/$nrtwo; break;

    default: $result=0; break;

  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculatorstyle.css"> 
    
</head>
<body>

<div class="container">

<form action="" method="POST" autocomplete="off"> 
 
  <div> <b> PHP Calculator (Detyra 2) </b></div>
  <div>

  <br>
  <label for="firstnumber"> First Number </label> <br> 
  <input type="number" name="firstnumber" id="firstnumber" class="firstinput" required>  <br> <br>
  <label for="secondnumber"> Second Number </label>  <br>
  <input type="number" name="secondnumber" id="secondnumber" class="secondinput" required> <br> <br>

    <button type="submit" name="operation" value="addition"> + </button>
    <button type="submit" name="operation" value="subtraction"> - </button>
    <button type="submit" name="operation" value="multiplication"> * </button>
    <button type="submit" name="operation" value="division"> / </button>

  
    <br> <br>
  
    
  </div>
  <div>
    <?php
    if(isset($result)){
    ?>
    Result: <?php echo $result?>
    <?php
    }
    else{
        ?>
        The result will appear here
        <?php 
    } ?>
  </div>
</form>
</div>
    
</body>
</html>
