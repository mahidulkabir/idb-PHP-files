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
        "row1" => ["key11"=>"val11","key12"=>"val12","key13"=>"val13"],
        "row2" => ["key21"=>"val21","key22"=>"val22","key23"=>"val23"],
        "row3" => ["key31"=>"val31","key32"=>"val32","key33"=>"val33"],

    ];

    echo ("\n");
    foreach($arr as $key =>$val){
        echo "$key \n";
        foreach($val as $k => $v){
            echo " <ol>
                <li> $v</li>
            </ol>";
        }
        echo "\n";
    }
    ?>
</body>
</html>