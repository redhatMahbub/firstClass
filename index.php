<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>First Project</title>
    </head>
    <body>
        <!-- interger number -->
        <?php
           $roll = 6;
        ?>
        <h1>My Roll Number Is: <?php echo $roll;?></h1>
        <!-- string type -->
        <?php 
            $string = 'I\'ll teach php with rashel ahmed.!';
        ?>
        <h1>This is mahbub <?php echo $string;?></h1>
        <!-- array -->
        <?php 
            $arr = array(
                    'one' => 'Dhaka',
                    'two' => ' Feni',
            );
        ?>
        <h1>
            <?php 
                    foreach ($arr as $different) {
                        echo $different;
                    }
            ?>
        </h1>
        
        <!-- if else two types -->
        <?php 
            $v = 'Feni'; 
            if($v = 0) : ?>
                <h1>This is the beautiful city in bangladesh</h1>
             <?php 
            else : ?>
                <p>condition is wrong!</p>
                <?php
            endif;
        ?>
    </body>
</html>
