<?php
if(isset($_POST["submit"])){
	$input = $_POST["size"];
	$size = explode(" ",$input);

  //print_r($size);
  $dogs = $_POST["dog"];
  $group = $_POST["group"];

  sort($size);

  $differentSize = array();

  for($i=0;$i<sizeof($size)-1;$i++){
    $dif = $size[$i+1]-$size[$i];
    array_push($differentSize,$dif);
  }

  sort($differentSize);
  $value=end($size)-$size[0];
  if($group!=1){

    $sum=0;
    $a=sizeof($differentSize);
    for($j=0;$j<$group;$j++){

      $temp=$a-$j;
      $sum+=$differentSize[$temp];

    }
  
    $value = $value-$sum;
  }
  echo "$value";


}
 ?>
<html>
<body>
<form action="q3.php" method="post" >
No of Dogs<input name="dog"><br>
No of Groups<input name="group"><br>
Dog sizes <input name="size"><br>
<input type="submit" name="submit">

</form>
</body>
</html>
