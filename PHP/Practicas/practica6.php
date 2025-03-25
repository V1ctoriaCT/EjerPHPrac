

<html>
    <head>
        <title>Practica 6</title>
            
    </head>
    <body>
        <h1>Practica 6</h1>
        <br>

        <?php
        $num=rand(1,100);
        echo "El número generado es: </br>";
        echo "$num";
        echo "</br></br>";
        
        if($num==50){
            echo "Num es exactamente 50!</br>";
        }
        if($num<50){
            echo " El Numero es MENOR que 50</br>";
        }else{
            echo " El Numero es MAYOR que 50</br>";
        }
        ?>


    </body>
</html>
    
    