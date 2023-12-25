<!DOCTYPE html>
<html>
    <head>
        <meta chatset="utf-8"/>
        <link rel ="stylesheet" href="stylephp.css">
    </head>
    
    <body>
        <center>
            <div class = head1>
                <h1 >multiplication table</h1>
            </div>
            
        <?php $multi_x = 2; $lenght_number =24; ?>
        <div class =multitable>
            <table>
                <?php
                for ($j = 1; $j <= $lenght_number; $j++) {
                    echo "<tr><td>" . $multi_x . ' x ' . $j . ' = ' . ($multi_x * $j) . "<br><br>\n";
                }
                ?>
        </table>
        
        </div>
        
        </center>
        
        
        
       
    </body>
   
   
</html>


