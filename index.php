<?php

$num = "";
$cookie_name1 = "number";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";


if(isset($_POST['number'])){
  $num = $_POST['display'].$_POST['number'];
}
else{
  $num="";
}

if(isset($_POST['op'])){
  $cookie_value1 = $_POST['display'];
  setcookie($cookie_name1,$cookie_value1,time()+(86400*30),"/");
  
  $cookie_value2= $_POST['op'];
  setcookie($cookie_name2,$cookie_value2,time()+(86400*30),"/");
  $num = "";
}

if(isset($_POST['clear'])){
  setcookie($cookie_name1,$cookie_value1,$cookie_name2,$cookie_value2, time () -3600 ,"/");
}

if(isset($_POST['igual'])){
  $num=$_POST['display'];

    switch($_COOKIE['op']){
      case "+":
        $result =$_COOKIE['number'] + $num;
          break;
      case "-":
        $result = $_COOKIE['number'] - $num ;
          break;
      case "*":
        $result = $_COOKIE['number'] * $num; 
          break;
      case "/":
        $result = $_COOKIE['number'] / $num;
          break;
      case "%":
        $result = ($_COOKIE['number'] * $num)/100;
          break;
                      
  }
  $num = $result;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" type="img/png" href="./564429.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <title>Calculator</title>
</head>

<body>

  <h1>Calculadora</h1>
  
  <div class="container">

    <form class="calculadora" method="POST" action="#">

      <input type="text" class="resultado" name="display" value="<?php echo $num; ?>">

      <input class="button" type="submit" name="clear" value="C">
      <input class="button" type="submit" name="op" value="%">
      <input class="button" type="submit" name="op" value="/">
      <input class="button" type="submit" name="op" value="*">
      
      <input class="button" type="submit" name="number" value="7">
      <input class="button" type="submit" name="number" value="8">
      <input class="button" type="submit" name="number" value="9">
      <input class="button" type="submit" name="op" value="-">

      <input class="button" type="submit" name="number" value="4">
      <input class="button" type="submit" name="number" value="5">
      <input class="button" type="submit" name="number" value="6">
      <input class="button" type="submit" name="op" value="+">

      
      <input class="button" type="submit" name="number" value="1">
      <input class="button" type="submit" name="number" value="2">
      <input class="button" type="submit" name="number" value="3">

      <input class="button" id="igual" type="submit" name="igual" value="=">
      
      <input class="button" id="zero" type="submit" name="number" value="0">   
      <input class="button" type="submit" name="number" value=".">
      
    </form>

  </div>
  
  <audio src="./sound/1120.wav" id="som-tecla" method="get" action="#"></audio>
 
  <footer></footer>


  
</body>
</html>