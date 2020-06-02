<?php
    require_once 'classes/Car.php';
    require_once 'classes/CarRender.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auta</title>
</head>
<body>
    <?php 

        $myCarSettings0 = array(
               'year' => 2019,
               'manufacturer' => "Audi",
               'model' => "A6",
               'type' =>  "Combi",
               'color' => "Grey",
               'VIN' => 1254587854789,
               'gearsCount' => 6,
               'doorsCount' => 5,
               'power' => 80,
        );
        $myCarSettings1 = array(
            'year' => 2018,
            'manufacturer' => "Ford",
            'model' => "Focus",
            'type' =>  "Combi",
            'color' => "White",
            'VIN' => 458955495665,
            'gearsCount' => 6,
            'doorsCount' => 5,
            'power' => 90,
        );
        $myCarSettings2 = array(
            'year' => 2018,
            'manufacturer' => "Volkswagen",
            'model' => "Golf",
            'type' =>  "Hatchback",
            'color' => "White",
            'VIN' => 455645665163,
            'gearsCount' => 6,
            'doorsCount' => 5,
            'power' => 90,
        );
        $myCarSettings3 = array(
            'year' => 2017,
            'manufacturer' => "Hyundai",
            'model' => "i30",
            'type' =>  "Combi",
            'color' => "White",
            'VIN' => 998956852266,
            'gearsCount' => 6,
            'doorsCount' => 5,
            'power' => 90,
        );
        $myCar0 = new Car($myCarSettings0);
        $myCar1 = new Car($myCarSettings1);
        $myCar2 = new Car($myCarSettings2);
        $myCar3 = new Car($myCarSettings3);

        $myRender0 = new CarRender($myCar0);
        $myRender1 = new CarRender($myCar1);
        $myRender2 = new CarRender($myCar2);
        $myRender3 = new CarRender($myCar3);

        echo $myRender0->renderAll();
        echo $myRender1->renderAll();
        echo $myRender2->renderAll();
        echo $myRender3->renderAll();

    ?>
</body>
</html>