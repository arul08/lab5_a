<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name    = "ARULVADIVELAN A/L SUBRAMANIAM"; 
        $matric  = "DI220087"; 
        $course  = "Bachelor In Information Security"; 
        $Year    = "Year 3";
        $Address = "No 25, Lorong Raja Nala 6, Taman Kapar Indah, 42200 Kapar, Selangor Darul Ehsan";
    ?>

    <table>
        <tr>
            <td>NAME:</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>MATRIC:</td>
            <td><?php echo "$matric"; ?></td> 
        </tr>
        <tr>
            <td>COURSE:</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>YEAR OF STUDY:</td>
            <td><?php echo "$Year"; ?></td> 
        </tr>
        <tr>
            <td>ADDRESS:</td>
            <td><?php echo "$Address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
