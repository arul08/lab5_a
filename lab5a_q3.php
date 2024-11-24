<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Define the function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Call the function with sample values
        $length = 4; 
        $width = 2;   
        $area = calculateArea($length, $width);

        // Display the result
        echo "<h1>Area Calculation</h1>";
        echo "<p>The area of a rectangle with a length of $length and a width of $width is: <strong>$area</strong></p>";
    ?>
</body>
</html>
