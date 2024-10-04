<?php

    require ('./Shapes/shapes.php');
    require ('./Shapes/rectangle.php');
    require ('./Shapes/square.php');
    require ('./Shapes/circle.php');

    $rectangleArea = null;
    $rectanglePerimeter = null;
    if (!empty($_POST['rectangle-w']) && !empty($_POST['rectangle-h'])) {
        $rectangle = new Rectangle($_POST['rectangle-w'],$_POST['rectangle-h']);
        $rectangleArea = $rectangle->Area();
        $rectanglePerimeter = $rectangle->Perimeter();
        // Assigning new value ​​to the previous object
        $rectangle->setWidth($_POST['rectangle-w']);
        $rectangle->setHeight($_POST['rectangle-h']);
        $rectangleArea = $rectangle->Area();
        $rectanglePerimeter = $rectangle->Perimeter();
    }

    $squareArea = null;
    $squarePerimeter = null;
    if (!empty($_POST['square-side'])) {
        $square = new Square($_POST['square-side'],$_POST['square-side']);
        $squareArea = $square->Area();
        $squarePerimeter = $square->Perimeter();
        // Assigning new values ​​to the previous objects
        $square->setWidth($_POST['square-side']);
        $squareArea = $square->Area();
        $squarePerimeter = $square->Perimeter();
    }

    $circleArea = null;
    $circlePerimeter = null;
    if (!empty($_POST['circle-radius'])) {
        $circle = new Circle($_POST['circle-radius']);
        $circleArea = $circle->Area();
        $circlePerimeter = $circle->Perimeter();
        // Assigning new value ​​to the previous object
        $circle->setRadius($_POST['circle-radius']);
        $circleArea = $circle->Area();
        $circlePerimeter = $circle->Perimeter();
    }
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP - Task 5</title>

        <!-- CSS File -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="./assets/imgs/logo.jpg" type="image/x-icon">

        <!-- Font Files -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    
    </head>

    <body>

        <header>

            <nav class="FM-navbar FM-padding">
                <a href="./index.php"><img src="./assets/imgs/logo.jpg" alt="logo"></a>
                <h1 class="FM-task-num">PHP OOP - Task 5</h1>
            </nav>

        </header>

        <main>

            <section class="FM-shapes FM-padding FM-bg-off-white">

                <div class="FM-text-center">
                    <h2 class="FM-H2">shapes - perimeter & area</h2>
                    <p class="FM-p">
                        we are provided here the opportunity to calculate the perimeter and area of some shapes
                    </p>
                </div>

                <div class="FM-flex">

                    <div class="FM-div">
                        <h3 class="FM-H3">Rectangle</h3>
                        <p class="FM-p">
                            Please enter width and height of the Rectangle
                        </p>
                        <form class="FM-form" action="./index.php" method="post">
                            <div class="FM-flex">
                                <input class="FM-45" type="number" name="rectangle-w" placeholder="Enter width...">
                                <input class="FM-45" type="number" name="rectangle-h" placeholder="Enter height...">
                            </div>
                            <input type="submit" value="Calculate">
                        </form>
                        <h4 class="FM-H4">the output:</h4>
                        <span class="FM-output">
                            <?php 
                                echo "Rectangle Area is : " . $rectangleArea . "<br />"; 
                                echo "Rectangle Perimeter is : " . $rectanglePerimeter; 
                                ?>
                        </span>
                    </div>

                    <div class="FM-div">
                        <h3 class="FM-H3">Square</h3>
                        <p class="FM-p">
                            Please enter the length of one side of the square
                        </p>
                        <form class="FM-form" action="./index.php" method="post">
                            <input type="number" name="square-side" placeholder="Enter here...">
                            <input type="submit" value="Calculate">
                        </form>
                        <h4 class="FM-H4">the output:</h4>
                        <span class="FM-output">
                            <?php 
                                echo "Square Area is : " . $squareArea . "<br />"; 
                                echo "Square Perimeter is : " . $squarePerimeter; 
                                ?>
                        </span>
                    </div>

                    <div class="FM-div">
                        <h3 class="FM-H3">Circle</h3>
                        <p class="FM-p">
                            Please enter the radius of the Circle
                        </p>
                        <form class="FM-form" action="./index.php" method="post">
                            <input type="number" name="circle-radius" placeholder="Enter here...">
                            <input type="submit" value="Calculate">
                        </form>
                        <h4 class="FM-H4">the output:</h4>
                        <span class="FM-output">
                            <?php 
                                echo "Circle Area is : " . $circleArea . "<br />"; 
                                echo "Circle Perimeter is : " . $circlePerimeter; 
                                ?>
                        </span>
                    </div>

            </section>
            
        </main>
        
    </body>

</html>