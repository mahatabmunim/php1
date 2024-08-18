<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <h1>Hello, world!</h1>
    <div class="container">
        <h1>PHP Syntax</h1>
        <?php
        echo"hello world" ; 
        ?>
    </div>

    <div class="container">
        <h1>PHP Variables</h1>
        <?php 
        $num1 = 5;
        $num2 =5;

        echo $num1 +$num2 ;
        ?>
    </div>

    <div class="container">
        <h1>PHP echo and print Statements</h1>
        <?php 
        echo "mahatab". " ";
        echo"uddin"." ";
        echo "munim";
        
        ?>
        <h1>PHP String</h1>
        <?php
        $a="Hello world";
        $b="Hello world";
        echo $a . " " ;
        echo $b ;
        ?>
        <!-- PHP Integer -->
        <h1>PHP Integer</h1>
        <?php
        $a=564;
        $b= 6;
        echo $a + $b ;
        ?>
        <!-- PHP Float -->
        <h1>PHP Float</h1>
        <?php 
        $a= 1.50;
        $b= 1.50;
        echo $a + $b ;
        ?>
        <h1>PHP Boolean</h1>
        <?php 
        $a=false;
        echo $a ;
        ?>
    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>