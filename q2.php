<?php

if(isset($_POST["submit"])){
	$input = $_POST["inputs"];
	$atoms = explode(" ",$input);

$y = (2*$atoms[2]-$atoms[1])/4;
$x = ($atoms[1] - 2 * $atoms[0] + 2 * $y) / 2;
$z = ($atoms[0] - $y) / 6;
if ($x < 0){
    echo("Error");

}elseif ($y < 0 ){
    echo("Error");
}elseif($z < 0 ){
     echo("Error");
}else{
echo("$x $y $z");
}
}


?>

<html>
<body>
<form action="q2.php" method="post" >
<input name="inputs">
<input type="submit" name="submit">

</form>
</body>
</html>
