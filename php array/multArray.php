<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mult Array</title>
</head>
<body>
    <h1> Traversing Associated 2D array</h1>
    <?php
    $arr = [
        "row1" => ["key11"=>["keyaa"=>"valaa","keybb"=>'valbb'],
                   "key12"=>["keyaa"=>"valaa","keybb"=>'valbb'],
                   "key13"=>["keyaa"=>"valaa","keybb"=>'valbb']],
        "row2" => ["key21"=>["keycc"=>"valcc","keydd"=>'valdd'],
                    "key22"=>["keycc"=>"valcc","keydd"=>'valdd'],
                    "key23"=>["keycc"=>"valcc","keydd"=>'valdd']],
        "row3" => ["key31"=>["keycc"=>"valcc","keydd"=>'valdd'],
                     "key32"=>["keycc"=>"valcc","keydd"=>'valdd'],
                     "key33"=>["keycc"=>"valcc","keydd"=>'valdd']],

    ];



    $arr2 = array(
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
  for ($i =0 ; $i<3; $i++ ){ 
  echo "<p><h2>Title $i</h2></p>";
    for ($k =0 ; $k<3; $k++){ 
         echo "<p><b>Sub-Title $k</b></p>";
            for ($t =0 ; $t<4; $t++){ 
                echo "<li>".$arr2[1][1][0]."</li>";
              
    }

    }

}

    ?>
</body>
</html>