

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Petite fonction en PHP</h1>
        <h3>Comment ça marche ?</h3>
        <p>Si le nombre entrer est impaire, il est multiplié par 3 et on lui ajoute 1; sinon on le divise par deux . Le procédé est répété jusqu'à ce qu'il atteigne 1</p>
        <input type="number" name="nombre" placeholder="Entrer un nombre">
        <input type="submit" value="Ok" name="submit">
    </form>
</body>
</html>
<?php
   
    function rec(int $number)
    {
        $i = 0;
        echo $number;
        while ($number > 1) 
        {
            if ($number % 2 !== 0) 
            {
                $number = (($number*3)+1);
                $i++;
                echo "   -->   ".$number;
            }
            if($number % 2 == 0) 
            {
                $number = ($number/2);
                $i++;
                echo "   -->   ".$number;
            }
        }
        
        echo "  || Le processus c'est effectuer en $i calcules ||";
        
    };
    
    if (isset($_POST['submit'])) {
        rec($_POST['nombre']);
    }

?>
