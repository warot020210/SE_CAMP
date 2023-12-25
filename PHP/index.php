<!DOCTYPE html>
<html>
    <head>
        <meta chatset="utf-8"/>
        <link rel ="stylesheet" href="stylephp.css">
    </head>
    <body>
        
        <?php $multi_x = 2; $lenght_number =24; ?>
        <table>
                <?php
                for ($j = 1; $j <= $lenght_number; $j++) {
                    echo "<tr><td>" . $multi_x . ' x ' . $j . ' = ' . ($multi_x * $j) . "<br><br>\n";
                }
                ?>
        </table>
       
    </body>
</html>


