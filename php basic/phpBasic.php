<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>
    <h1> Variables</h1>
    <h2>Object</h2>
    <?php
    class Student {
        public $name;
        public $age;

        public function __construct ($name, $age){
            $this -> name = $name;
            $this -> age = $age;


        }
    }
    $obj = new Student ("Sharmin", 24);
    var_dump($obj);
    
    ?>
</body>
</html>