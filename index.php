<?php
        //Miles Aguilar UC4LO1
        define("WORK", "Gen Pio Del Pilar National High School");
        $firstname = "Miles";
        $lastname = "Aguilar";
        $age = 34;
        $araw = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC4LO1</title>
</head>
<body>
    
    <div>
        <h1>Good Day!</h1>
            <p><?php echo "Hello!, I'm $firstname  $lastname, $age"; ?> years old...</p>
            <p>Currenty working at <?php echo strtoupper(WORK); ?>.</p>
            <p>Today is <?php echo $araw[2] .date("h:i:sa");?></p>
    </div>

    
</body>
</html>