<?php
$arr = array(
    array(
        array(1, 8,5,3),
        array(3, 8,5,3),
        array(4, 8,5,3),
        array(1, 8,5,3),
    ),
    array(
        array(4, 8,5,3),
        array(6, 8,5,3),
        array(7, 8,5,3),
        array(1, 8,5,3),
    ),
     array(
        array(78, 8,5,3),
        array(22, 8,5,3),
        array(14, 8,5,3),
        array(13, 8,5,3),
    ),
);
    
// Display the array information
// print_r($arr);

echo "<br>";
echo "<br>";
echo "<br>";
for ($i =0 ; $i<3; $i++ ){ 
  echo "<p><h2>Title $i</h2></p>";
    for ($k =0 ; $k<3; $k++){ 
         echo "<p><b>Sub-Title $k</b></p>";
            for ($t =0 ; $t<4; $t++){ 
                echo "<li>".$arr[$i][$k][$t]."</li>";
              
    }

    }

}

?>