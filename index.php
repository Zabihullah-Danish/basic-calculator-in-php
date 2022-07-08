<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/style.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1 id="calculator">Basic Calculator</h1>
        <div>
            <form class="inputs-form" action="" method="GET">
                <div class="inputs">
                    <label for="value1">Value 1</label>
                    <input type="number" name="value1" id="value1" placeholder="Enter a number">
                    <label for="value2">Value 2</label>
                    <input type="number" name="value2" id="value2" placeholder="Enter a number">
                    <!-- <span>=</span> -->
                    <span style="border:1px solid lightgray;border-radius: 100%">
                    
                    </span>
                </div>
                <div class="operations" style="padding-left: 10px;margin:10px;">
                    <input type="submit" formaction="./operations/add.php" value="Add">
                    <input type="submit" formaction="./operations/subtract.php" value="Subtract">
                    <input type="submit" formaction="./operations/multiplication.php" value="Multiply">
                    <input type="submit" formaction="./operations/division.php" value="Divide">
                    
                </div>
            </form>
        </div>
        <hr>
        <h1 id="one">Table of Multiplication</h1>
        <div style="display:flex;">
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 2 = ". $num * 2 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 3 = ". $num * 3 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 4 = ". $num * 4 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 4 = ". $num * 4 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 5 = ". $num * 5 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 6 = ". $num * 6 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 7 = ". $num * 7 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 8 = ". $num * 8 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 9 = ". $num * 9 . "<br>";
                    }
                ?>
            </div>
            <div style="padding:5px;border-right:1px solid lightgray;">
                <?php 
                    $num = 0;
                    for($num = 1; $num<11;$num++){
                        echo "$num x 10 = ". $num * 10 . "<br>";
                    }
                ?>
            </div>
            
        </div>
    </div>
</body>
</html>