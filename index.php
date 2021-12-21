<?php 
    $title = "Index";
    include 'includes/header.php'; 
    
    ?>



     <!-- Basic HTML -->
     <h1>Hello HTML - PHP Primer</h1>
    <br/>
<?php  
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
    ?>
    
<?php

        //  Variables need a '$'. They are not strongly typed
        $name = 'Dahlia Smith';
        $age = 26;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";

    ?>

<?php require 'includes/footer.php' ?>